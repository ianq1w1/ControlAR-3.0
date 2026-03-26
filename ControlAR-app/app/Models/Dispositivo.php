<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ArCondicionado;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dispositivo extends Model
{
    protected $fillable = [
        'address',
        'device_AC_id'
    ];

    public function ACdevice(): BelongsTo{
        return $this->belongsTo(ArCondicionado::class, 'device_AC_id');
    }

    
}
