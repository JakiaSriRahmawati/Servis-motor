<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function booking(){
        return $this->belongsTo(booking::class);
    }
    public function detail_transaksi(){
        return $this->belongsTo(detail_transaksi::class);
    }
}
