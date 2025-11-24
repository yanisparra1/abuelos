<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Medicina extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'dosis',
    ];

    public function historias(): BelongsToMany
    {
        return $this->belongsToMany(Historia::class, 'historia_medicina');
    }
}
