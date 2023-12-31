<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use SoftDeletes; 

    protected $table = 'personas' ; 

    protected $primaryKey = 'id' ; 

    protected $connection = 'mysql' ; 

    protected $fillable = ['nombre', 'apellido', 'telefono', 'email', 'mensaje'] ; 
}
