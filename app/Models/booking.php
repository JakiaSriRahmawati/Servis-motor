<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function mekanik(){
        return $this->belongsTo(mekanik::class);
    }
    public function transaksi(){
        return $this->belongsTo(transaksi::class);
    }
}
