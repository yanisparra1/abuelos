<?php

namespace App\Filament\Resources\Historias\Schemas;

use App\Models\Abuelo;
use App\Models\Medicina;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class HistoriaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('abuelo_id')
                    ->relationship('abuelo', 'nombre')
                    ->searchable()
                     ->preload()
                    ->createOptionForm([
                        TextInput::make('nombre')
                            ->required(),
                        TextInput::make('apellido')
                            ->required(),
                        TextInput::make('cedula')
                            ->required(),
                        DatePicker::make('fecha_nacimiento')
                            ->required(),
                       
                        Select::make('sexo')
                            ->options([
                                'F' => 'Femenino',
                                'M' => 'Masculino',
                                    ])
                            ->required(),
                        
                        TextInput::make('direccion')
                            ->required(),
                        TextInput::make('telf_fa')
                            ->tel()
                            ->required(),
                    ])
                    ->disabledOn('edit')
                    ->required(),

                    Textarea::make('hist_Med')
                    ->label('Número de Historia')
                        ->required(),



    Section::make('Actuales Medicos')
   ->columns([
        'default' => 1,
        'md' => 2,
        'xl' => 2,
 
        
    ])               
    ->schema([
        MultiSelect::make('alergias')
        ->relationship('alergias', 'nombre')
        ->preload()
        ->createOptionForm([
            TextInput::make('nombre')
                ->required(),
        ]),

     
        

    MultiSelect::make('medicinas')
        ->relationship('medicinas', 'nombre')
        ->getOptionLabelFromRecordUsing(fn (Medicina $record) => "{$record->nombre} ({$record->dosis})")
        ->preload()
        ->createOptionForm([
            TextInput::make('nombre')
                ->required(),
            TextInput::make('dosis')
                ->required(),
            Textarea::make('descripcion')
                ->columnSpanFull(),
        ])  ,


        CheckboxList::make('histmedicos')
        ->relationship('histmedicos', 'nombre')
        ->columns(4)
        ->columnSpanFull(),

        Textarea::make('otra')
        ->required()
        ->columnSpanFull(), 
    ]) ->columnSpanFull(),


             
              
 
      
      

 
    
    Textarea::make('observacion')
    ->required()
    ->columnSpanFull(),
   

       
            ]); 
    }
}
