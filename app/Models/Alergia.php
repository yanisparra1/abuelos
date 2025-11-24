<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alergia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    public function historias(): BelongsToMany
    {
        return $this->belongsToMany(Historia::class, 'alergia_historia');
    }
}
