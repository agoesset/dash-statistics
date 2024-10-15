<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LikeResource\Pages;
use App\Filament\Resources\LikeResource\RelationManagers;
use App\Models\Like;
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

class LikeResource extends Resource
{
    protected static ?string $model = Like::class;

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
                TextInput::make('like_male')
                    ->numeric()
                    ->required()
                    ->label('Likes from Male'),
                TextInput::make('like_female')
                    ->numeric()
                    ->required()
                    ->label('Likes from Female'),
                TextInput::make('like_gen_alpha')
                    ->numeric()
                    ->required()
                    ->label('Likes from Gen Alpha'),
                TextInput::make('like_gen_z')
                    ->numeric()
                    ->required()
                    ->label('Likes from Gen Z'),
                TextInput::make('like_gen_millenial')
                    ->numeric()
                    ->required()
                    ->label('Likes from Millennials'),
                TextInput::make('like_baby_boomer')
                    ->numeric()
                    ->required()
                    ->label('Likes from Baby Boomers'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hari')
                    ->label('Hari')
                    ->sortable(),
                TextColumn::make('like_male')
                    ->label('Likes from Male')
                    ->sortable(),
                TextColumn::make('like_female')
                    ->label('Likes from Female')
                    ->sortable(),
                TextColumn::make('like_gen_alpha')
                    ->label('Likes from Gen Alpha')
                    ->sortable(),
                TextColumn::make('like_gen_z')
                    ->label('Likes from Gen Z')
                    ->sortable(),
                TextColumn::make('like_gen_millenial')
                    ->label('Likes from Millennials')
                    ->sortable(),
                TextColumn::make('like_baby_boomer')
                    ->label('Likes from Baby Boomers')
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
            'index' => Pages\ListLikes::route('/'),
            'create' => Pages\CreateLike::route('/create'),
            'edit' => Pages\EditLike::route('/{record}/edit'),
        ];
    }
}
