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
        // verwijdert: $planets = DB::table('planets')->get();
       
        
        // toegevoegd
        $planets = Planet::all();
        
        // geef de planeten mee
        return view('planets.index', ['planets' => $planets]);
    }

    // pak het id dat in word meegegeven en laat alleen eentje tonen
    public function show($id) 
    {
        // removed: 
        // $planet = DB::table('planets')->where('id', $id)->first();
        // if (!$planet) {
        //     abort(404);
        // }


        // toegevoegd: findOrFail. 
        $planet = Planet::findOrFail($id);

        return view('planets.show', ['planet' => $planet]);
    }
}