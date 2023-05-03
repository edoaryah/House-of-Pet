<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


    public function service()
    {
        return $this->belongsTo(Service::class,'service_id','id');
    }

    public function antrians()
    {
        return $this->hasOne(User::class,'order_id','id');
    }
}
