<?php

namespace App\Filament\Resources\Histmedicos;

use App\Filament\Resources\Histmedicos\Pages\CreateHistmedico;
use App\Filament\Resources\Histmedicos\Pages\EditHistmedico;
use App\Filament\Resources\Histmedicos\Pages\ListHistmedicos;
use App\Filament\Resources\Histmedicos\Schemas\HistmedicoForm;
use App\Filament\Resources\Histmedicos\Tables\HistmedicosTable;
use App\Models\Histmedico;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HistmedicoResource extends Resource
{
    protected static ?string $model = Histmedico::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return HistmedicoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HistmedicosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHistmedicos::route('/'),
            'create' => CreateHistmedico::route('/create'),
            'edit' => EditHistmedico::route('/{record}/edit'),
        ];
    }
}
