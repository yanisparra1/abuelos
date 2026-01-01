<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Historia extends Model
{
    use HasFactory;

    protected $fillable = [
        'abuelo_id',
        'hist_Med',
        'observacion',
        'otra',
    ];

    public function abuelo(): BelongsTo
    {
        return $this->belongsTo(Abuelo::class);
    }

    public function alergias(): BelongsToMany
    {
        return $this->belongsToMany(Alergia::class, 'alergia_historia');
    }

    public function medicinas(): BelongsToMany
    {
        return $this->belongsToMany(Medicina::class, 'historia_medicina');
    }

    public function histmedicos(): BelongsToMany
    {
        return $this->belongsToMany(Histmedico::class, 'historia_histmedico');
    }

    /**
     * Una historia clínica puede tener varios registros de antecedentes familiares.
     */
    public function familias(): HasMany
    {
        return $this->hasMany(Familia::class);
    }
      public function operaciones(): BelongsToMany
    {
       return $this->belongsToMany(Operacion::class, 'historia_operacion');
    }
}
