<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Familia extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parentesco',
        'detalles',
        'historia_id',
    ];

    /**
     * Define la relación inversa "pertenece a" con Historia.
     * Un antecedente familiar pertenece a una única historia clínica.
     */
    public function historia(): BelongsTo
    {
        return $this->belongsTo(Historia::class);
    }
}
