<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    // Een Planet behoort toe aan een SolarSystem
    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }    
}