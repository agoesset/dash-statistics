<?php

namespace App\Filament\Resources\JangkauanResource\Pages;

use App\Filament\Resources\JangkauanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJangkauans extends ListRecords
{
    protected static string $resource = JangkauanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
