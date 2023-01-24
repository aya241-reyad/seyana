<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;

    protected $table = 'sub_services';
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

}