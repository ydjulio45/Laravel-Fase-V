<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $fillable = ['idUsuario, nombre, fecha, preciofact'];
    protected $guarded = ['idFactura'];
    protected $primaryKey = 'idFactura';
    public $timestamps = false;
}
