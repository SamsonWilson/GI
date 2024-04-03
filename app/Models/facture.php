<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facture extends Model
{
    use HasFactory;
    protected $fillable = ['date_payement', 'mois_payer', 'mode_payement_id', 'location_id'];
}