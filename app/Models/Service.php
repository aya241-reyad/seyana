<?php

namespace App\Models;

use App\Models\Category;
use App\Models\SubService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'category_id'];
    protected $table = 'services';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function SubService()
    {
        return $this->hasMany(SubService::class);
    }

}