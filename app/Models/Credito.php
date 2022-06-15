<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    use HasFactory;

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function cuotas() {
        return $this->hasMany(Cuota::class);
    }

    public function pagos() {
        return $this->hasMany(Pago::class);
    }
}
