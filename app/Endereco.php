<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['id','logradouro','numero','bairro'];
    protected $guarded = [ 'created_at', 'update_at'];
    protected $table = 'endereco';
}
