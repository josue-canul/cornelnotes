<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasMany(User::class,'id_carrera');
    }

    public function asignaturas() {
        return $this->hasMany(Asignatura::class,'id_carrera');
    }

}
