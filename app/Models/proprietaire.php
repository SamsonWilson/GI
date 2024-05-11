<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proprietaire extends Model
{
    protected $fillable = ['nom', 'prenom', 'mail', 'tel1', 'tel2', 'adress', 'sexe', 'photo'];

    use HasFactory;
}
