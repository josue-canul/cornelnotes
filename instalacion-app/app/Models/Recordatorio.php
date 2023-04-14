<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    use HasFactory;

    public function Tema(){
        return $this->belongsTo(Temas::class);
    }
    public function Asignatura(){
        return $this->belongsTo(Asignatura::class);
    }
}
