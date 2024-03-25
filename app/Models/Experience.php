<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable=[
        'poste',
        'entreprise',
        'description',
        'annee_debut',
        'annee_fin',
    ];

    protected $table = 'experiences';
}
