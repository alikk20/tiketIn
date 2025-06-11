<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TiketResource\Pages;
use App\Filament\Resources\TiketResource\RelationManagers;
use App\Models\Tiket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TiketResource extends Resource
{
    protected static ?string $model = Tiket::class;
    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('id_acara')
                ->label('Acara')
                ->relationship(
                    'acara',
                    'nama',
                    fn(Builder $query) =>
                    $query->where('dibuat_oleh', auth()->user()->siswa->id)
                )
                ->getOptionLabelFromRecordUsing(fn($record) => "{$record->nama} - {$record->tanggal->format('d M Y')}")
                ->required(),


            Select::make('id_siswa')
                ->label('Pembeli (Siswa)')
                ->relationship('siswa', 'nama') // pastikan model `Siswa` punya kolom `nama`
                ->searchable()
                ->required(),

            DatePicker::make('tanggal_pembelian')
                ->label('Tanggal Pembelian'),

            TextInput::make('kode_tiket')
                ->required()
                ->unique(ignoreRecord: true),

            TextInput::make('status')
                ->default('pending'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('acara.nama')->label('Acara'),
                TextColumn::make('siswa.nama')->label('Pembeli'),
                TextColumn::make('tanggal_pembelian')->date(),
                TextColumn::make('kode_tiket'),
                TextColumn::make('status')->badge(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    // Hanya tampilkan tiket dari acara yang dibuat oleh siswa yang login
    public static function query(): Builder
    {
        return parent::query()->whereHas('acara', function ($query) {
            $query->where('dibuat_oleh', auth()->user()->siswa->id);
        });
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTikets::route('/'),
            'create' => Pages\CreateTiket::route('/create'),
            'edit' => Pages\EditTiket::route('/{record}/edit'),
        ];
    }
}