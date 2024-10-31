<?php

namespace App\Filament\Resources\KunjunganResource\Pages;

use App\Filament\Resources\KunjunganResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKunjungan extends CreateRecord
{
    protected static string $resource = KunjunganResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
