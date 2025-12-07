<?php

namespace App\Filament\Resources\Historias\Pages;

use App\Filament\Resources\Historias\HistoriaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

//use App\Models\User;

class ListHistorias extends ListRecords
{
    protected static string $resource = HistoriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
           

            
        ];
    }
}
