<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesas extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
   protected $fillable = [
       'id',
       'descricao',
       'data',
       'usuario',
       'valor',
   ];

    /**
    * The attributes that should be hidden for serialization.
    *
    * @var array
    */
   protected $hidden = [
     
   ];

   /**
    * The attributes that should be cast.
    *
    * @var array
    */
   protected $casts = [
       
   ];

   /**
    * The accessors to append to the model's array form.
    *
    * @var array
    */
   protected $appends = [
       
   ];
}
