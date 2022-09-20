<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipodocumento extends Model
{
    protected $table = 'tipoDocumentos';
    protected $fillable = ['tipoDoc'];
    protected $guarded = ['idDoc'];
    protected $primaryKey = 'idDoc';
    public $timestamps = false;
    

}
