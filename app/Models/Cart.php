<?php

namespace App\Models;

use App\Models\Client;
use App\Models\SubService;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $guarded = [];

    public function service()
    {
        return $this->belongsToMany(SubService::class, 'sub_service_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');

    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');

    }

}