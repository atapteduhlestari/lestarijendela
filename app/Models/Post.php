<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(PostImage::class, 'post_id');
    }

    public function gettakeImageAttribute()
    {
        return "/storage/" . $this->url;
    }

    public function getFirstImageAttribute()
    {
        if ($this->images()->exists())
            return '/storage/' . $this->images->first()->url;
        else
            return emptyImage();
    }
}
