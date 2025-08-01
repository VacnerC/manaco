<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    //protected $table = 'cliente';
    
    //protected $fillable =['nombres', 'apellidos', 'direccion','celular','nit'];

    protected $table = 'categories';
    
    protected $fillable =['nombres', 'descripcion'];
}
