<?php

namespace App\Filament\Resources\ReachResource\Pages;

use App\Filament\Resources\ReachResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReach extends EditRecord
{
    protected static string $resource = ReachResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
