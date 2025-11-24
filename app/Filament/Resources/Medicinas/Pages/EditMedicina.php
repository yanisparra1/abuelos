<?php

namespace App\Filament\Resources\Medicinas\Pages;

use App\Filament\Resources\Medicinas\MedicinaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMedicina extends EditRecord
{
    protected static string $resource = MedicinaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
