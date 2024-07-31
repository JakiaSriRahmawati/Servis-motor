<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postLogin(Request $request)
    {
        // Validasi input
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Cek kredensial pengguna
        if (Auth::attempt($data)) {
            $user = Auth::user(); // Ambil pengguna yang sudah diautentikasi
    
            // Arahkan berdasarkan peran pengguna
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('homeAdmin')->with('notifikasi', 'Welcome To Home Admin, ' . $user->name);
                case 'pengguna':
                    return redirect()->route('booking')->with('notifikasi', 'Welcome, ' . $user->name);
                case 'owner':
                    return redirect()->route('homeOwner')->with('notifikasi', 'Welcome, ' . $user->name);
                case 'mekanik':
                    return redirect()->route('homeMekanik')->with('notifikasi', 'Welcome, ' . $user->name);
                case 'kasir':
                    return redirect()->route('homeKasir')->with('notifikasi', 'Welcome, ' . $user->name);
                default:
                    return redirect()->route('login')->with('notifikasi', 'Role not recognized.');
            }
        }
    
        // Jika login gagal
        return redirect()->route('login')->with('notifikasi', 'Email or Password is incorrect!');
    }
}
