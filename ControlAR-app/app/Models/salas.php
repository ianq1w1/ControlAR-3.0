<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\ArCondicionado;
use Illuminate\Database\Eloquent\Relations\HasMany;

class salas extends Model
{
    //
    protected $fillable = [
        'nome_sala',
        'qtd_ac',
        'sala_user_id'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'sala_user_id');
    }

    public function AC(): HasMany{
        return $this->hasMany(ArCondicionado::class, 'AC_sala_id');
    }
}
