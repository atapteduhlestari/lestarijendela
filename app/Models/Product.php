<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(ProductSubCategory::class, 'sub_category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->url;
    }

    public function getFirstImageAttribute()
    {
        $default =  '/assets/img/no-image.png';

        if ($this->images->first())
            return "/storage/" .  $this->images->first()->url;
        else
            return $default;
    }
}
