<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable=[
        'diplome',
        'universite',
        'annee_obtention',
        
    ];

    protected $table = 'education';
}
