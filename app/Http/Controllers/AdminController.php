<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Create a new admin user
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->user_role = 'admin'; // Set the user role to 'admin'
        $admin->save();

        // Redirect to the admin dashboard or login page
        return redirect()->route('admin')->with('success', 'Admin registered successfully. Please log in.');
    }

    public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find the admin user by email
        $admin = User::where('email', $request->email)->where('user_role', 'admin')->first();

        // Check if the user exists and the password is correct
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Login the admin user
            auth()->login($admin);

            // Redirect to the admin dashboard
            return redirect()->route('admin.dashboard');
        }

        // Return an error message if the login fails
        return redirect()->back()->with('error', 'Invalid email or password.');
    }
}
