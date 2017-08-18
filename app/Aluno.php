<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['id', 'nome','matricula','cpf','endereço_id'];
    protected $guarded = [ 'created_at', 'update_at'];
    protected $table = 'aluno';
}
