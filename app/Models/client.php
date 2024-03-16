<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'mail', 'tel1', 'tel2', 'adress', 'typeclient_id'];
    public function logement()
    {
        return $this->belongsToMany(logement::class);
    }
}
