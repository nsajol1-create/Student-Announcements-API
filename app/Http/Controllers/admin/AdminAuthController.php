<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    public function studentLogin()
    {
        return view('admin.loginchoices');
    }

    public function student()
    {
        return view('admin.studentlogin');
    }

    public function studentHome()
    {
        return view('admin.homestudent');
    }

    public function studentannouncements()
    {
        return view('admin.annoucementstudent');
    }

    public function studentDevelopers()
    {
        return view('admin.developerstudent');
    }

    public function studentContact()
    {
        return view('admin.contactstudent');
    }


    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        $user = Auth::user(); // ✅ SAFE

        if (!$user || $user->role !== 'admin') {
            Auth::logout();
            return back()->withErrors(['email' => 'Unauthorized']);
        }

        return redirect()->route('admin.dashboard');

         $token = $user->createToken('admin-token')->plainTextToken;

    return response()->json([
        'token' => $token,
        'user' => $user,
    ]);

    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}
}

