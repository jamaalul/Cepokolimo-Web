<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendudukResource\Pages;
use App\Filament\Resources\PendudukResource\RelationManagers;
use App\Models\Penduduk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Date;

class PendudukResource extends Resource
{
    protected static ?string $model = Penduduk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('total_penduduk')
                    ->label('Total Penduduk')
                    ->required(),
                TextInput::make('produktif')
                    ->label('Penduduk Usia Produktif (15-64 Tahun)')
                    ->required(),
                TextInput::make('laki_laki')
                    ->label('Penduduk Laki-Laki')
                    ->required(),
                TextInput::make('perempuan')
                    ->label('Penduduk Perempuan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('total_penduduk')
                    ->label('Total Penduduk')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('produktif')
                    ->label('Penduduk Usia Produktif')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('laki_laki')
                    ->label('Penduduk Laki-Laki')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('perempuan')
                    ->label('Penduduk Perempuan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->date()
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenduduks::route('/'),
            'create' => Pages\CreatePenduduk::route('/create'),
            'edit' => Pages\EditPenduduk::route('/{record}/edit'),
        ];
    }
}
