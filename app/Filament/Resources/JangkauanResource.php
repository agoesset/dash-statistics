<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JangkauanResource\Pages;
use App\Filament\Resources\JangkauanResource\RelationManagers;
use App\Models\Jangkauan;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JangkauanResource extends Resource
{
    protected static ?string $model = Jangkauan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('hari')
                    ->options([
                        "Sunday" => "Sunday",
                        "Monday" => "Monday",
                        "Tuesday" => "Tuesday",
                        "Wednesday" => "Wednesday",
                        "Thursday" => "Thursday",
                        "Friday" => "Friday",
                        "Saturday" => "Saturday",
                    ])
                    ->required(),
                TextInput::make('jakpus')
                    ->numeric()
                    ->required(),
                TextInput::make('jakbar')
                    ->numeric()
                    ->required(),
                TextInput::make('jaktim')
                    ->numeric()
                    ->required(),
                TextInput::make('jaksel')
                    ->numeric()
                    ->required(),
                TextInput::make('jakut')
                    ->numeric()
                    ->required(),
                TextInput::make('kepser')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hari')
                    ->label('Hari')
                    ->sortable(),
                TextColumn::make('jakpus')
                    ->label('Jakarta Pusat')
                    ->sortable(),
                TextColumn::make('jakbar')
                    ->label('Jakarta Barat')
                    ->sortable(),
                TextColumn::make('jaktim')
                    ->label('Jakarta Timur')
                    ->sortable(),
                TextColumn::make('jaksel')
                    ->label('Jakarta Selatan')
                    ->sortable(),
                TextColumn::make('jakut')
                    ->label('Jakarta Utara')
                    ->sortable(),
                TextColumn::make('kepser')
                    ->label('Kepulauan Seribu')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
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
            'index' => Pages\ListJangkauans::route('/'),
            'create' => Pages\CreateJangkauan::route('/create'),
            'edit' => Pages\EditJangkauan::route('/{record}/edit'),
        ];
    }
}
