<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table ='ENDERECO';  //fazer com que ele reconheça a tabela do banco e trocar o nome da tabela
    protected $primaryKey ='usuarioId';
    public $timestamps = false;
}
