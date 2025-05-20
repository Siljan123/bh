<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Auth;



use App\Models\Message;

class AdminController extends Controller
{
    //
    public function view()
    {
        // Redirect to dashboard if already logged in
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.admin_login');
    }

    public function viewCostumer()
    {
        // Redirect to dashboard if already logged in
        if (Auth::guard('admin')->check()) {
            return redirect()->route('customer');
        }
        return view('auth.admin_login');
    }

    /**
     * Login method for admin.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Attempt to log in as an admin
        if (Auth::guard('admin')->attempt($credentials)) {
            // Regenerate the session to prevent session fixation attacks
            $request->session()->regenerate();

            // Redirect to the admin dashboard
            return redirect()->route('admin.dashboard');
        }

        // If the credentials do not match, return an error message
        return back()->withErrors([
            'email' => 'Credentials not found.', // Updated error message
        ]);
    }
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function updateStatus(Request $request, $id)
    {
        $boarder = User::findOrFail($id);
        $boarder->status = $request->status;
        $boarder->save();
    
        return redirect()->back()->with('success', 'Status updated successfully.');
    }
    public function storesmessage(Request $request)
{
    $validated = $request->validate([
        'message' => 'required|string|max:5000',
        'admin_id' => 'required|exists:admins,id',
    ]);

    Message::create([
        'user_id' => Auth::id(),
        'admin_id' => $validated['admin_id'],
        'message' => $validated['message'],
    ]);

    return back()->with('success', 'Your message has been sent to the landlord!');
}
    
}
