<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'sobrenome', 'imagem',
    ];

    protected $hidden = ['created_at', 'updated_at'];


}
