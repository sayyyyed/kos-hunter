<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properti;
use Illuminate\Support\Facades\Auth;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\Storage;

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

    public function show($id)
{
    $properti = Properti::with('images')->findOrFail($id);
    return view('book', compact('properti'));
}

public function getRoomCount(Properti $properti)
    {
        $availableRooms = $properti->jumlah_kamar - $properti->bookings()->sum('jumlah');
        return response()->json(['available_rooms' => max(0, $availableRooms)]);
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
                'lokasi' => 'required',
                'wifi' => 'required',
                'jumlah_kamar' => 'required',
                'tipe_kamarmandi' => 'required',
                'dapur' => 'required',
                'lain' => 'required',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif', // Validate multiple images
            ]);

            $properti = Properti::create($data);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images'), $imageName);

                    PropertyImage::create([
                        'properti_id' => $properti->id,
                        'image_url' => 'images/' . $imageName,
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Property added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to add property: ' . $e->getMessage());
        }
    }





    public function edit(Properti $properti)
    {
        return response()->json($properti);
    }

    public function update(Request $request, Properti $properti)
    {
        $data = $request->validate([
            'nama' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
            'lokasi' => 'required',
            'wifi' => 'required',
            'jumlah_kamar' => 'required',
            'tipe_kamarmandi' => 'required',
            'dapur' => 'required',
            'lain' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $properti->update($data);

        if ($request->hasFile('images')) {
            // Delete old images
            foreach ($properti->images as $image) {
                Storage::delete($image->image_url);
                $image->delete();
            }

            // Add new images
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);

                PropertyImage::create([
                    'properti_id' => $properti->id,
                    'image_url' => 'images/' . $imageName,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Properti successfully updated!');
    }

    public function destroy(Properti $properti)
    {
        $properti->delete();
        return redirect()->back()->with('success', 'Properti successfully deleted!');
    }

    //paginate 8
    public function showAll()
    {
        $propertis = Properti::with('images')->paginate(8);
        return view('dashboard', compact('propertis'));
    }
}
