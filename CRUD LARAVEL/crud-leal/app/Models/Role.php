<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['tipoRol'];
    protected $guarded = ['idRol'];
    protected $primaryKey = 'idRol';
    public $timestamps = false;
}
