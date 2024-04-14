<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logement extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'photo', 'description', 'adress', 'mT_visite', 'surperficie', 'mt_logement_par_mois', 'quartier_id', 'users_id', 'typelogement_id', 'active'];
    public function client()
    {
        return $this->belongsToMany(client::class);
    }
}
