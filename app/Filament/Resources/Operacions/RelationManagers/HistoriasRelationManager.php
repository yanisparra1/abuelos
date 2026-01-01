<?php

namespace App\Filament\Resources\Operacions\RelationManagers;

use App\Filament\Resources\Historias\HistoriaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class HistoriasRelationManager extends RelationManager
{
    protected static string $relationship = 'historias';

    protected static ?string $relatedResource = HistoriaResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
