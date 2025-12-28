<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ['nome', 'descricao', 'inicio', 'fim', 'bo_ativo'];
}
