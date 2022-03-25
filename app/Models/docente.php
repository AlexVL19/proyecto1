<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'second_name', 'imagen_docente', 'title', 'associate'];
}
