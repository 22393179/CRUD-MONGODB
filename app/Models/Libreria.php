<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Libreria extends Eloquent
{
    //use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'Libros';

    protected $fillable=['nombre', 'editorial', 'detalle'];
}
