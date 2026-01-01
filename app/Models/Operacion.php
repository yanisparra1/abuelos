<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Operacion extends Model
{
        protected $fillable = [
    
        'detalles',
       
    ];

    /**
     * Define la relación inversa "pertenece a" con Historia.
     * Un antecedente familiar pertenece a una única historia clínica.
     */
    public function historias(): BelongsToMany
    {
        return $this->belongsToMany(Historia::class);
    }
}
