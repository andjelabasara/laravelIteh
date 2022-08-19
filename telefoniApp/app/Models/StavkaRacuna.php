<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StavkaRacuna extends Model
{
    use HasFactory;
    protected $fillable = [
        'telefon',
        'kolicina', 
        'racun'
    ];
    public function racuna()
    {
        return $this->belongsTo(Racun::class);
    }
    public function proizvod()
    {
        return $this->belongsTo(Telefon::class);
    }
}
