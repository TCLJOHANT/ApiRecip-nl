<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute; //necesario para crear un mutador o accesor
class Usuario extends Model
{
    use HasFactory;

 //campos que quiero proteger  especificar qué campos no pueden asignar masivamente.
   protected $guarded = ['id',];
   //campos que no quiero que se envien en la data que se envia desde controlador
   protected $hidden = [
        'created_at',
        'updated_at'
   ];

    protected function contraseña():Attribute {
       return new Attribute(
          //(un accesor funciona cuando se hace consulta en base de datos) no modifica el valor en base de datos solo es para presentacion final
          // get: function($value){  
          //    return strtolower($value); 
          // },
         
          //(Un mutador es un método que define cómo se debe modificar un valor de atributo ANTES de guardarlo en la base de datos. )
          set: fn($value)=> bcrypt($value) //funcion flecha
      );
   }
}
