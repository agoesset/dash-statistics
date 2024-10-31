<?php

namespace App\Filament\Resources\JangkauanResource\Pages;

use App\Filament\Resources\JangkauanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJangkauan extends EditRecord
{
    protected static string $resource = JangkauanResource::class;

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
