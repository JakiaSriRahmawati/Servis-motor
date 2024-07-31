<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function login()
    {
        return view('admin.login');
    }

    function homeAdmin()
    {
        $booking = booking::all();
        return view('admin.homeAdmin', compact('booking'));
    }
    function homeMekanik()
    {
        return view('mekanik.homeMekanik');
    }
    function homeOwner()
    {
        return view('owner.homeOwner');
    }
    function homeKasir()
    {
        return view('kasir.homeKasir');
    }
}