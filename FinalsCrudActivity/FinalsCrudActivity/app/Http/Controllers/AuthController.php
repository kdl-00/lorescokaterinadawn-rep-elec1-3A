<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'student_no' => 'required|unique:user',
            'name' => 'required|max:100',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:6',
            'course' => 'required',
            'year_level' => 'required',
            'section' => 'required',
            'contact_no' => 'required|digits_between:10,13',
            'address' => 'required',
            'birthdate' => 'required|date|before:today',
        ]);

        $id = DB::table('user')->insertGetId([
            'student_no' => $request->student_no,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'course' => $request->course,
            'year_level' => $request->year_level,
            'section' => $request->section,
            'contact_no' => $request->contact_no,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('logs')->insert([
            'user_id' => $id,
            'action' => 'REGISTER',
            'description' => 'User registered',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $user = DB::table('user')->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->name);

            DB::table('logs')->insert([
                'user_id' => $user->id,
                'action' => 'LOGIN',
                'description' => 'User logged in',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect()->route('logs');
        }

        return back()->with('error', 'Invalid email or password');
    }

    public function logout()
    {
        DB::table('logs')->insert([
            'user_id' => Session::get('user_id'),
            'action' => 'LOGOUT',
            'description' => 'User logged out',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Session::flush();
        return redirect()->route('login');
    }

    public function settings()
    {
        $user = DB::table('user')->where('id', Session::get('user_id'))->first();
        return view('auth.settings', compact('user'));
    }

    public function updateSettings(Request $request)
    {
        DB::table('user')->where('id', Session::get('user_id'))->update([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
            'year_level' => $request->year_level,
            'section' => $request->section,
            'contact_no' => $request->contact_no,
            'address' => $request->address,
            'updated_at' => now()
        ]);

        DB::table('logs')->insert([
            'user_id' => Session::get('user_id'),
            'action' => 'UPDATE',
            'description' => 'Profile updated',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'Profile updated successfully');
    }
}
