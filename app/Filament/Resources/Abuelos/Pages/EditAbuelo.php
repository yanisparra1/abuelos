<?php

namespace App\Filament\Resources\Abuelos\Pages;

use App\Filament\Resources\Abuelos\AbueloResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditAbuelo extends EditRecord
{
    protected static string $resource = AbueloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
