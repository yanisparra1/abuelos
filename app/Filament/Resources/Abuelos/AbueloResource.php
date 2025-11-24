<?php

namespace App\Filament\Resources\Abuelos;

use App\Filament\Resources\Abuelos\Pages\CreateAbuelo;
use App\Filament\Resources\Abuelos\Pages\EditAbuelo;
use App\Filament\Resources\Abuelos\Pages\ListAbuelos;
use App\Filament\Resources\Abuelos\Schemas\AbueloForm;
use App\Filament\Resources\Abuelos\Tables\AbuelosTable;
use App\Models\Abuelo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbueloResource extends Resource
{
    protected static ?string $model = Abuelo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return AbueloForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AbuelosTable::configure($table);
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
            'index' => ListAbuelos::route('/'),
            'create' => CreateAbuelo::route('/create'),
            'edit' => EditAbuelo::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
