<?php

namespace App\Filament\Resources\Abuelos\Pages;

use App\Filament\Resources\Abuelos\AbueloResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAbuelos extends ListRecords
{
    protected static string $resource = AbueloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
