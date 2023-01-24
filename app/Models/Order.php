<?php

namespace App\Models;

use App\Models\Option;
use App\Models\SubService;
use App\Models\orderOption;
use App\Models\ServiceOption;
use App\Models\orderServiceOption;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsToMany(SubService::class)->withPivot('price');

    }

    public function option()
    {
        return $this->belongsToMany(Option::class)->withPivot('price');

    }
    public function clients()
    {

        return $this->belongsTo(Client::class, 'client_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');

    }


}