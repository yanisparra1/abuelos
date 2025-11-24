<?php

namespace App\Filament\Resources\Alergias\Pages;

use App\Filament\Resources\Alergias\AlergiaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAlergia extends EditRecord
{
    protected static string $resource = AlergiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
