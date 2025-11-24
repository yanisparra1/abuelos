<?php

namespace App\Filament\Resources\Histmedicos\Pages;

use App\Filament\Resources\Histmedicos\HistmedicoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHistmedico extends EditRecord
{
    protected static string $resource = HistmedicoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
