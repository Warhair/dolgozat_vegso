<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tevekenyseg extends Model
{
    use HasFactory;
    protected $fillable = [
        'tevekenyseg_nev',
        'pontszam', 
    ];
}
