<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use App\Models\Room;

use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Auth;



class RoomController extends Controller
{
    public function view()
    {
        // Redirect to dashboard if already logged in
        if (Auth::guard('admin')->check()) {
            return redirect()->route('addroom');
        }
        return view('auth.admin_login');
    }
    
    public function create()
    {
        return view('rooms.create'); // Ensure you create this view
    }

    /**
     * Store a newly created room in storage.
     */
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,gif|max:9048',
            'price' => 'required|numeric|min:1',

            'capacity' => 'required|integer|min:1|max:6', // Max capacity of 6
        ], [
            'capacity.max' => 'The capacity cannot exceed 6.',

            'capacity.min' => 'Capacity must be at least 1.',
            'capacity.integer' => 'Capacity must be a valid number.',
            'price.min' => 'Capacity must be at least $1.',
        ]);

        // Handle file upload if image is provided
        if ($request->hasFile('image')) {
            try {
                $validatedData['image'] = $request->file('image')->store('rooms', 'public');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['image' => 'Failed to upload image.']);
            }
        }

        // Create the room
        $room = Room::create($validatedData);

        // Check the number of bookings and update the status
        $room->status = $room->bookings >= $room->capacity ? false : true;
        $room->save();

        return redirect()->route('admin.dashboard')->with('success', 'Room Added successfully!');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $room = Room::findOrFail($id);

        $room->update([
            'name' => $request->name,
            'capacity' => $request->capacity,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Room updated successfully!');
    }
    public function edit($id)
    {
        $room = Room::findOrFail($id); // Fetch a single room by its ID
        return view('editroomdashboard', compact('room'));
    }
    // Delete Room
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Room deleted successfully!');
    }
}
