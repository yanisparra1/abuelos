<?php

namespace App\Filament\Resources\Historias;

use App\Filament\Resources\Historias\Pages\CreateHistoria;
use App\Filament\Resources\Historias\Pages\EditHistoria;
use App\Filament\Resources\Historias\Pages\ListHistorias;
use App\Filament\Resources\Historias\Schemas\HistoriaForm;
use App\Filament\Resources\Historias\Tables\HistoriasTable;
use App\Models\Historia;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HistoriaResource extends Resource
{
    protected static ?string $model = Historia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    protected static ?string $recordTitleAttribute = 'observacion';

    public static function form(Schema $schema): Schema
    {
        return HistoriaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HistoriasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\FamiliasRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHistorias::route('/'),
            'create' => CreateHistoria::route('/create'),
            'edit' => EditHistoria::route('/{record}/edit'),
        ];
    }
}
