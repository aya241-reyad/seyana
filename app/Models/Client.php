<?php

namespace App\Models;

use App\Models\Rate;
use App\Models\Order;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = ['first_name', 'last_name', 'phone', 'password', 'email', 'pin_code', 'is_active'];
    public function cart()
    {
        return $this->hasMany(Cart::class,'client_id','id');
    }
    public function order()
    {
        return $this->hasMany(Order::class,'client_id','id');
    }

    public function rates()
    {
        return $this->hasMany(Rate::class,'client_id','id');
    }



}