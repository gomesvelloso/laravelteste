<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    //$ fillable: Autorizamos que o metodo create receba atraves de um array os parametros 
    //para que depois possam ser persistidos
    protected $fillable = ['nome', 'email', 'uf', 'site'];
}
