<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        // Eager Loading
        // haal alle planeten op en laad direct het zonnestelsel in.
        // 2 queries worden uitgevoerd in plaats van meer
        
        $planets = Planet::with('solarSystem')->get();
        
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($id) 
    {
        // Eager Loading
        Planet::with('solarSystem')->findOrFail($id);
    }
}