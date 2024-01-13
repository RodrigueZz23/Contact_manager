<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_manager extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom', 'email', 'telephone',
    ];
    public $timetamps=false;
}
