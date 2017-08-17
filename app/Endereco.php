<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['logradouro','numero','bairro'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'endereco';
}
