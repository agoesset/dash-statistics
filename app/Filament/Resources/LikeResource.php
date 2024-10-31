<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LikeResource\Pages;
use App\Filament\Resources\LikeResource\RelationManagers;
use App\Models\Like;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LikeResource extends Resource
{
    protected static ?string $model = Like::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tgl_like')
                    ->required(),
                Forms\Components\TextInput::make('like_male')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('like_female')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('like_gen_z')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('like_gen_millenial')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('like_baby_boomer')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tgl_like')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('like_male')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('like_female')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('like_gen_z')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('like_gen_millenial')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('like_baby_boomer')
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
            'index' => Pages\ListLikes::route('/'),
            'create' => Pages\CreateLike::route('/create'),
            'edit' => Pages\EditLike::route('/{record}/edit'),
        ];
    }
}
