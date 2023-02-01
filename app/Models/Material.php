<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
   use HasFactory;
   protected $fillable = ['nome', 'imagem', 'descricao', 'setor'];
   // protected $fillabel = ['nome', 'imagem', 'descricao', 'setor'];
}
