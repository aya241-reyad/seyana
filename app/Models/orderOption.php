<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderOption extends Model
{
    use HasFactory;
    protected $table = 'order_options';
    protected $guarded = [];

}