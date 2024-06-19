<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate the request data
            $data = $request->validate([
                'properti_id' => 'required',
                'user_id' => 'required',
                'jumlah' => 'required|integer|min:1',
            ]);

            // Add the current authenticated user's ID if it's not provided in the request
            if (!$request->has('user_id')) {
                $data['user_id'] = Auth::id();
            }

            // Create a new booking
            Booking::create($data);

            return response()->json(['success' => 'Booking added successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to add booking: ' . $e->getMessage()], 500);
        }
    }
}
