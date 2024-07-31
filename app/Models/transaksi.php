<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function booking(){
        return $this->hasMany(booking::class);
    }
}
