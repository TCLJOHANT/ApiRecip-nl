<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    use HasFactory;
     //campos que quiero proteger  especificar qué campos no pueden asignar masivamente.
   protected $guarded = ['id'];
    //relacion uno a muchos inversa
    public function user(){
        return $this->BelongsTo(User::class);
    }
    public function category(){
        return $this->BelongsTo(Category::class);
    }
}
