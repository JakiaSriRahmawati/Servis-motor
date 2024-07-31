<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function barang(){
        return $this->hasMany(barang::class);
    }
}
