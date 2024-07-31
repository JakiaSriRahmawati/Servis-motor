<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function homePelanggan(){
        $data = artikel::all();
        return view('pelanggan.homePelanggan', compact('data'));
    }
    function aboutus(){
        return view('aboutus.aboutus',);
    }
    function detail(artikel $artikel){
        $artikel = artikel::where('id', $artikel->id)->get()->first();
        return view('pelanggan.detailArtikel', compact('artikel', 'artikel'));
    }
    public function booking(Request $request)
    {
        // Mengambil semua data booking dari model Booking
        $booking = Booking::all();
        dd($booking);
        // Mengirim data booking ke view 'pelanggan.booking'
        return view('pelanggan.booking', compact('booking'));
    }
    function inputanbooking(Request $request){
        $request ->validate([
           'merk_motor'=>'required',
            'mesin_motor'=>'required',
            'seri_motor'=>'required',
            'no_plat'=>'required',
            'jenis_service'=>'required',
            'tgl_booking'=>'required',
            'deskripsi'=>'required',
            'status'=>'required',
        ]);
        $user = Auth::user();
        booking::create([
            'merk_motor' => $request->merk_motor,
            'mesin_motor' => $request->mesin_motor,
            'seri_motor' =>  $request->seri_motor,
            'no_plat' =>  $request->no_plat,
            'jenis_service' => $request->jenis_service,
            'tgl_booking' => $request->tgl_booking,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
            'user_id'=>$user->id
        ]);
        return redirect()->route('homePelanggan')->with('notifikasi', 'data berhasil di input' );
    }
    

}