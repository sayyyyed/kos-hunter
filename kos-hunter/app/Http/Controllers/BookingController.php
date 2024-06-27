<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Properti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $bookings = $user->bookings;

        return view('booking-saya', compact('bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'properti_id' => 'required|exists:properti,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        try {
            $properti = Properti::findOrFail($request->properti_id);
            $availableRooms = $properti->calculateAvailableRooms();

            if ($request->jumlah > $availableRooms) {
                return response()->json(['success' => false, 'message' => 'Not enough rooms available'], 422);
            }

            $booking = Booking::create([
                'user_id' => auth()->id(),
                'properti_id' => $request->properti_id,
                'jumlah' => $request->jumlah,
            ]);

            return response()->json(['success' => true, 'message' => 'Booking successful']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Booking failed: ' . $e->getMessage()], 500);
        }
    }

    public function destroy(Booking $booking)
    {
        if (Auth::id() !== $booking->user_id) {
            return response()->json([
                'success' => false,
                'message' => 'You are not authorized to remove this booking.'
            ], 403);
        }

        $booking->delete();

        return response()->json([
            'success' => true,
            'message' => 'Booking has been removed successfully.'
        ]);
    }
}
