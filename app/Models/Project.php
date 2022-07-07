<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
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
            return "/storage/" .  $this->images->first()->url;
        else
            return emptyImage();
    }
}
