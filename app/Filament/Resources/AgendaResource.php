<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgendaResource\Pages;
use App\Filament\Resources\AgendaResource\RelationManagers;
use App\Models\Agenda;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AgendaResource extends Resource
{
    protected static ?string $model = Agenda::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(45),
                TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->required()
                    ->maxLength(1000),
                DateTimePicker::make('waktu')
                    ->label('Waktu')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('waktu')
                    ->label('Waktu')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListAgendas::route('/'),
            'create' => Pages\CreateAgenda::route('/create'),
            'edit' => Pages\EditAgenda::route('/{record}/edit'),
        ];
    }
    // Nama di sidebar/navigation
    protected static ?string $navigationLabel = 'Agenda';

    // Judul di halaman index
    protected static ?string $label = 'Agenda';

    // Judul di halaman index (jamak)
    protected static ?string $pluralLabel = 'Daftar Agenda';

    public static function getPluralLabel(): string
    {
        return 'Daftar Agenda';
    }

    public static function getLabel(): string
    {
        return 'Agenda';
    }
}