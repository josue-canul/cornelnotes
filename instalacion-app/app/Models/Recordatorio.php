<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsTo(user::class,'id_usuario');
    }

    protected $fillable = ['titulo', 'contenido', 'importancia', 'fecha', 'id_usuario'];

}
