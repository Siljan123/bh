<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;


use Illuminate\Support\Facades\Auth;



use Illuminate\Support\Facades\Hash; 


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

    
}
