<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\salas;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArCondicionado extends Model
{
    protected $fillable = [
        'marcaAC',
        'AC_sala_id'
    ];

    public function SalasAC(): BelongsTo{
        return $this->belongsTo(salas::class, 'AC_sala_id');
    }

}
