<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nombreCategoria'];
    protected $guarded = ['idCategoria'];
    protected $primaryKey = 'idCategoria';
    public $timestamps = false;
}
