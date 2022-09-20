<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedore extends Model
{
    protected $table = 'proveedores';
    protected $fillable = ['nombre, telefono, correo, direccion'];
    protected $guarded = ['idProveedor'];
    protected $primaryKey = 'idProveedor';
    public $timestamps = false;
}
