<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['idDoc,idRol,pNombre,sNombre,pApellido,sApellido,correo,contraseña'];
    protected $guarded = ['idUsuario'];
    protected $primaryKey = 'idUsuario';
    public $timestamps = false;
}
