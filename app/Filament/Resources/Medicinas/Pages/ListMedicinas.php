<?php

namespace App\Filament\Resources\Medicinas\Pages;

use App\Filament\Resources\Medicinas\MedicinaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMedicinas extends ListRecords
{
    protected static string $resource = MedicinaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
