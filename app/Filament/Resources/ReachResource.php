<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReachResource\Pages;
use App\Filament\Resources\ReachResource\RelationManagers;
use App\Models\Reach;
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

class ReachResource extends Resource
{
    protected static ?string $model = Reach::class;

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
                TextInput::make('value')
                    ->numeric()
                    ->required()
                    ->label('Reach Value'), // Label untuk kolom nilai
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hari')
                    ->label('Hari')
                    ->sortable(),
                TextColumn::make('value')
                    ->label('Reach Value')
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
            'index' => Pages\ListReaches::route('/'),
            'create' => Pages\CreateReach::route('/create'),
            'edit' => Pages\EditReach::route('/{record}/edit'),
        ];
    }
}
