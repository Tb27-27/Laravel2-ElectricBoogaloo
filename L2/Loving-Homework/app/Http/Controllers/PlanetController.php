<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// removed:
// use Illuminate\Support\Facades\DB;
use App\Models\Planet;

class PlanetController extends Controller
{
    // alle planeten
    public function index()
    {
        // $planets = Planet::all();
        
        // pak planeten op en laad direct het gekoppelde zonnestelsel in
        $planets = Planet::with('solarSystem')->get();
        
        return view('planets.index', ['planets' => $planets]);
    }

    // pak het id dat in word meegegeven en laat alleen eentje tonen
    public function show($id) 
    {
        // toegevoegd: findOrFail. 
        $planet = Planet::findOrFail($id);

        return view('planets.show', ['planet' => $planet]);
    }
}