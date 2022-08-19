<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racun extends Model
{
    use HasFactory;
    protected $fillable = [
        'datum',
        'adresa',
        
        
    ];
    public function stavke()
    {
        return $this->hasMany(StavkaRacuna::class);
    }

}
