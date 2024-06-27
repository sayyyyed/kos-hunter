<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class KosController extends Controller
{
    public function index()
    {
        // Fetch properties with tipe 'kos' from the database
        $propertis = Properti::where('tipe', 'kos')->get();

        // Group the properties by their location
        $propertisGroupedByLocation = $propertis->groupBy('lokasi');

        // Pass the grouped properties to the view
        return view('kos', compact('propertisGroupedByLocation'));
    }
}
