<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Définition des attributs fillables, hidden et casts...

    // Relation many-to-many avec TypeUtilisateur

    protected $fillable = [
        'name',
        'prenom',
        'sexe',
        'photo',
        'datenais',
        'tel',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    // public function paiements(){
    //     return $this->hasMany(Paiement::class);
    // }

    public function roles()
    {
        return $this->belongsToMany(role::class, "role_users", "role_id", "user_id");
    }

    // public function permissions(){
    //     return $this->belongsToMany(Permission::class, "user_permission", "user_id", "permission_id");
    // }

    public function hasRole($role)
    {
        return $this->roles()->where("nom", $role)->first() !== null;
    }

    public function hasAnyRoles($roles)
    {
        return $this->roles()->whereIn("nom", $roles)->first() !== null;
    }

    public function getAllRoleNamesAttribute()
    {
        return $this->roles->implode("nom", ' | ');
    }
}
