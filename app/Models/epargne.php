<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class epargne extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'numero',
        'solde',
        'taux_interet'
    ];

    // Définir la relation avec le modèle Users.
    
    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
