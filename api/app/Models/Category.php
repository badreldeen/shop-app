<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug','image', 'description'
    ];

    public function subCategories()
    {
        return $this->hasMany(\App\Models\Category::class, 'parent_id');
    }

    public function root()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id');
    }
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }
}
