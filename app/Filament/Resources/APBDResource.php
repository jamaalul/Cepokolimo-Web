<?php

namespace App\Filament\Resources;

use App\Filament\Resources\APBDResource\Pages;
use App\Filament\Resources\APBDResource\RelationManagers;
use App\Models\APBD;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class APBDResource extends Resource
{
    protected static ?string $model = APBD::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tahun')
                    ->label('Tahun')
                    ->required()
                    ->maxLength(128),
                TextInput::make('pendapatan')
                    ->label('Pendapatan')
                    ->required()
                    ->numeric()
                    ->maxLength(20)
                    ->prefix('Rp ')
                    ->formatStateUsing(fn ($state) => number_format($state, 0, ',', '.')),
                TextInput::make('belanja')
                    ->label('Belanja')
                    ->required()
                    ->numeric()
                    ->maxLength(20)
                    ->prefix('Rp ')
                    ->formatStateUsing(fn ($state) => number_format($state, 0, ',', '.'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('pendapatan')
                    ->label('Pendapatan')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.')),
                TextColumn::make('belanja')
                    ->label('Belanja')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.')),

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
            'index' => Pages\ListAPBDS::route('/'),
            'create' => Pages\CreateAPBD::route('/create'),
            'edit' => Pages\EditAPBD::route('/{record}/edit'),
        ];
    }

    protected static ?string $navigationLabel = 'APBD';

    // Judul di halaman index
    protected static ?string $label = 'APBD';

    // Judul di halaman index (jamak)
    protected static ?string $pluralLabel = 'APBD';

    public static function getPluralLabel(): string
    {
        return 'APBD';
    }

    public static function getLabel(): string
    {
        return 'APBD';
    }
}
