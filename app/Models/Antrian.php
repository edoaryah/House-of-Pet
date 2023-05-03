<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function orders()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
