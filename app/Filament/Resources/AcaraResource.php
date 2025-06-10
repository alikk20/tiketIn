<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcaraResource\Pages;
use App\Filament\Resources\AcaraResource\RelationManagers;
use App\Models\Acara;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class AcaraResource extends Resource
{
    protected static ?string $model = Acara::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            FileUpload::make('foto')
                ->image()
                ->directory('uploads/siswa')
                ->preserveFilenames()
                ->maxSize(2048)
                ->imageEditor()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('3:4'), // Format vertikal
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
            TextInput::make('jenis_acara')
                ->label('Jenis Acara')
                ->placeholder('Masukkan jenis acara (misal: seminar, workshop)')
                ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->width(150)
                    ->height(200),
                TextColumn::make('nama')->searchable(),
                TextColumn::make('tanggal')->date(),
                TextColumn::make('lokasi'),
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
        return parent::query()
            ->where('dibuat_oleh', auth()->user()->siswa->id);
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        $data['dibuat_oleh'] = auth()->user()->siswa->id;
        return $data;
    }

    public static function mutateFormDataBeforeSave(array $data): array
    {
        $data['dibuat_oleh'] = auth()->user()->siswa->id;
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