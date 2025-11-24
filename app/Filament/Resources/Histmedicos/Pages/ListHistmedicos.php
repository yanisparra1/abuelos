<?php

namespace App\Filament\Resources\Histmedicos\Pages;

use App\Filament\Resources\Histmedicos\HistmedicoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHistmedicos extends ListRecords
{
    protected static string $resource = HistmedicoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
