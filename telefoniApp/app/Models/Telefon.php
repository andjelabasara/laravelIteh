<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefon extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv',
        'ekran',
        'baterija',
        'os',
        'Boje',
        'cena'
    ];
}
