<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($image) {
            if (static::where('image', $image->image)->exists()) {
                storage::disk('public')->delete($photo->path);
            }
        });

    }

    public function imagable()
    {
        return $this->morphsTo();
    }

}