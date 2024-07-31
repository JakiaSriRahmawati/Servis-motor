<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
