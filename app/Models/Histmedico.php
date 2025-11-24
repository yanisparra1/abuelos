<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Histmedico extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function historias(): BelongsToMany
    {
        return $this->belongsToMany(Historia::class, 'historia_histmedico');
    }
}
