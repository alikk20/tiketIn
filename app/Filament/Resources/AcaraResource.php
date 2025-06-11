<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Acara;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AcaraResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AcaraResource\RelationManagers;

class AcaraResource extends Resource
{
    protected static ?string $model = Acara::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            FileUpload::make('foto')
                ->label('Foto'),
                
            TextInput::make('nama')
                ->label('Nama Acara')
                ->placeholder('Masukkan nama acara')
                ->required(),

            Textarea::make('deskripsi')
                ->label('Deskripsi Acara')
                ->placeholder('Jelaskan acara secara singkat')
                ->required(),
            DatePicker::make('tanggal')
                ->label('Tanggal Acara')
                ->native(false)
                ->placeholder('Pilih tanggal acara')
                ->required(),
            TextInput::make('lokasi')
                ->label('Lokasi Acara')
                ->placeholder('Masukkan lokasi acara')
                ->required(),
            TextInput::make('stok')
                ->label('Jumlah tiket')
                ->placeholder('Jumlah tiket ')
                ->required(),
            TextInput::make('harga')
                ->label('Harga Tiket')
                ->placeholder('35000')
                ->prefix('Rp.')
                ->required(),
            TextInput::make('jenis_acara')
                ->label('Jenis Acara')
                ->placeholder('Masukkan jenis acara (misal: seminar, workshop)')
                ->required(),
            TextInput::make('notelp')
                ->label('No Telepon')
                ->placeholder('8123456790')
                ->prefix('+62')
                ->required(),
            Hidden::make('dibuat_oleh')
                ->default(auth()->id()),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->circular(),
                TextColumn::make('nama')->searchable(),
                TextColumn::make('tanggal')->date(),
                TextColumn::make('lokasi'),
                TextColumn::make('harga'),
                TextColumn::make('stok'),
                TextColumn::make('jenis_acara'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function query(): Builder
    {
        return parent::query()->where('dibuat_oleh', auth()->id());
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        $data['dibuat_oleh'] = auth()->id();
        return $data;
    }

    public static function mutateFormDataBeforeSave(array $data): array
    {
        $data['dibuat_oleh'] = auth()->id();
        return $data;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAcaras::route('/'),
            'create' => Pages\CreateAcara::route('/create'),
            'edit' => Pages\EditAcara::route('/{record}/edit'),
        ];
    }
}