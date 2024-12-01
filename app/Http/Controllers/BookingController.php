<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{ public function store(Request $request)
    {
          // Validate the room_id to ensure it exists in the rooms table
          $validatedData = $request->validate([
            'room_id' => 'required|exists:rooms,id', // Ensure the room exists
        ]);

        // Step 1: Check if the user has already booked any room
        $alreadyBooked = Booking::where('user_id', Auth::id())->exists();

        // If the user has already booked a room, prevent further booking
        if ($alreadyBooked) {
            return redirect()->back()->withErrors(['message' => 'You have already booked a room.']);
        }

        // Step 2: Find the room to be booked
        $room = Room::findOrFail($validatedData['room_id']);

        // Step 3: Check if the room has enough capacity
        if ($room->bookings >= $room->capacity) {
            return redirect()->back()->withErrors(['message' => 'The room does not have enough capacity for this booking.']);
        }

        // Step 4: Create the new booking
        Booking::create([
            'room_id' => $room->id,
            'user_id' => Auth::id(),
        ]);

        // Step 5: Increment the room's bookings count
        $room->increment('bookings');

        // Step 6: Optionally, update room status when the room is full
        if ($room->bookings >= $room->capacity) {
            $room->status = false; // Mark the room as unavailable (full)
            $room->save();
        }

        // Step 7: Redirect back with a success message
        return redirect()->route('dashboard')->with('success', 'Room booked successfully!');
    
    }
}
