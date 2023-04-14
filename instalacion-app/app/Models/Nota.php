<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    public function Tema(){
        return $this->belongsTo(Temas::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }

}
