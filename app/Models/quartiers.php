<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quartiers extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'imagequartier', 'ville_id'];
}
