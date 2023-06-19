<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    public function carreras() {
        return $this->belongsTo(Carrera::class,'id_carrera');
    }

    public function temas() {
        return $this->hasMany(Tema::class,'id_tema');
    }

    protected $fillable = ['asignatura', 'id_carrera'];
}
