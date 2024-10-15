<?php

namespace App\Filament\Resources\ReachResource\Pages;

use App\Filament\Resources\ReachResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReaches extends ListRecords
{
    protected static string $resource = ReachResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
