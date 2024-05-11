<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maison extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'adresse', 'c_postal', 'nombrePiece'];
}