<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
{
    $query = Properti::query();

    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('nama', 'like', "%{$searchTerm}%")
              ->orWhere('alamat', 'like', "%{$searchTerm}%")
              ->orWhere('tipe', 'like', "%{$searchTerm}%");
    }

    $propertis = $query->paginate(6);
    return view('dashboard', compact('propertis'));
}
}
