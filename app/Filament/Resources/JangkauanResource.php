<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JangkauanResource\Pages;
use App\Filament\Resources\JangkauanResource\RelationManagers;
use App\Models\Jangkauan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
                Forms\Components\DatePicker::make('tgl_jangkauan')
                    ->required(),
                Forms\Components\TextInput::make('jakpus')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jakbar')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jaktim')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jaksel')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jakut')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kepser')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tgl_jangkauan')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jakpus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jakbar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jaktim')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jaksel')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jakut')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kepser')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
