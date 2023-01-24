<?php

namespace App\Models;

use App\Traits\HasPhoto;
use App\Traits\GetAttribute;
use Database\Factories\BannerFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;
    
    protected $table = 'banners';
    protected $guarded = [];



    
}