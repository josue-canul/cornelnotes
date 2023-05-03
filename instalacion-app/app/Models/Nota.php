<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    public function Temas(){
        return $this->belongsTo(Tema::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }

}
