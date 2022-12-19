<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['products'];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_project');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\ProjectCategory', 'category_id');
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class, 'project_id');
    }

    public function getFirstImageAttribute()
    {
        if ($this->images()->exists())
            return "/uploads/" .  $this->images->first()->url;
        else
            return emptyImage();
    }

    public function scopeFilter($query, $filters)
    {
        $query->when(
            $filters['title'] ?? false,
            fn ($query, $title) => $query->where('title', 'like', "%$title%")
        );

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas(
                'category',
                fn ($q) => ($q->where('slug', $category))
            );
        });

        $query->when($filters['product'] ?? false, function ($query, $product) {
            return $query->whereHas(
                'product',
                fn ($q) => ($q->where('slug', $product))
            );
        });
    }
}
