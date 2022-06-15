<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function creditos(){
        return $this->hasMany(Credito::class);
    }

    public function cuotas(){
        return $this->hasManyThrough(Cuota::class, Credito::class);
    }

    public function pagos(){
        return $this->hasMany(Pago::class);
    }
}
