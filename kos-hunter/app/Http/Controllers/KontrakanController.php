<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class KontrakanController extends Controller
{
    public function index()
    {
        // Fetch properties with tipe 'kontrakan' from the database
        $propertis = Properti::where('tipe', 'kontrakan')->get();

        // Group the properties by their location
        $propertisGroupedByLocation = $propertis->groupBy('lokasi');

        // Pass the grouped properties to the view
        return view('kontrakan', compact('propertisGroupedByLocation'));
    }
}
