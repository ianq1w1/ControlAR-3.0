<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\salas;
use App\Models\Dispositivo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ArCondicionado extends Model
{
    protected $fillable = [
        'marcaAC',
        'AC_sala_id'
    ];

    public function SalasAC(): BelongsTo{
        return $this->belongsTo(salas::class, 'AC_sala_id');
    }

    public function deviceAC(): HasOne{
        return $this->hasOne(Dispositivo::class, 'device_AC_id');
    }
}
