<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properti;
use Illuminate\Support\Facades\Auth;

class PropertiController extends Controller
{
    public function index()
    {
        $propertis = Properti::all();
        return view('admin-kos.index', ['propertis'=>$propertis]);
    }

    public function create()
    {
        return view('properti.create');
    }



public function store(Request $request)
{
    try {
        $data = $request->validate([
            'admin_id' => 'required',
            'nama' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
            'wifi' => 'required',
            'jumlah_kamar' => 'required',
            'tipe_kamarmandi' => 'required',
            'dapur' => 'required',
            'lain' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif', // Add any validation rules for the image here
        ]);

        $data = $request->except('image');
    // Check if image file exists
if ($request->hasFile('image')) {
    // Process image upload
    $image = $request->file('image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('images'), $imageName);
    $data['image_url'] = 'images/' . $imageName;
}


        Properti::create($data);

        return redirect()->back()->with('success', 'Property added successfully');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->with('error', 'Failed to add property: ' . $e->getMessage());
    }
}





    public function edit(Properti $properti)
    {
        return view('properti.edit', compact('properti'));
    }

    public function update(Request $request, Properti $properti)
    {
        $properti->update($request->all());
        return redirect()->back()->with('success', 'Properti successfully edited!');
    }

    public function destroy(Properti $properti)
    {
        $properti->delete();
        return redirect()->back()->with('success', 'Properti successfully deleted!');
    }
}
