<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    public function credito() {
        return $this->belongsTo(Credito::class);
    }

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function detalle() {
        return $this->hasMany(PagoDetalle::class, 'pago_id', 'id');
    }
}
