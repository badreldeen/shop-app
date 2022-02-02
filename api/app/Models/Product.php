<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'description', 'image','category_id', 'company_id' ,'price',
    ];

    public function company()
    {
        return $this->BelongsTo(\App\Models\Company::class);
    }
    public function category(){
        return $this->BelongsTo(\App\Models\Category::class);
    }


    
}
