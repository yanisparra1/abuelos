<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Abuelo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'fecha_nacimiento',
        'edad',
        'sexo',
        'direccion',
        'telf_fa',
    ];

    /**
     * Get the historia associated with the abuelo.
     */
    public function historia(): HasOne
    {
        return $this->hasOne(Historia::class);
    }
}
