<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    // protected $fillable = ['nom'];
    // public function users()
    // {
    //     return $this->belongsToMany(User::class, "user_typeutilisateurs", "role_id", "user_id");
    // }
    public function users(){
        return $this->belongsToMany(User::class, "user_role", "role_id", "user_id");
    }

}