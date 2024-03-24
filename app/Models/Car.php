<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    

    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'model', 'color', 'year', 'price', 'image', 'description', 'status', 'email'];

    use HasFactory;
}
