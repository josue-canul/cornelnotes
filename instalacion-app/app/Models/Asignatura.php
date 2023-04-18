<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    //relacion inversa

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Temas(){
        return $this->hasMany(Temas::class);
    }
    
}
