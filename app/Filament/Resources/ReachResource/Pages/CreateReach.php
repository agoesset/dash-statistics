<?php

namespace App\Filament\Resources\ReachResource\Pages;

use App\Filament\Resources\ReachResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReach extends CreateRecord
{
    protected static string $resource = ReachResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
