<?php

namespace App\Filament\Resources\Historias\Pages;

use App\Filament\Resources\Historias\HistoriaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHistoria extends EditRecord
{
    protected static string $resource = HistoriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
         
        ];
    }
}
