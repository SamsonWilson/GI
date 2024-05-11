<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprioMaison extends Model
{
    protected $fillable = ['nombre_de_proprio', 'description', 'proprietaire_id', 'maison_id'];

    use HasFactory;
}