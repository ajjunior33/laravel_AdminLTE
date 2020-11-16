<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conexao extends Model
{
    protected $table = 'conexoes';
    protected $fillable = [
        'grupo_id', 'usuario'
    ];
    public $timestamps = false;
}
