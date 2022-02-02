<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description','image'
    ];

    public function user()
    {
        return $this->BelongsTo(\App\Models\User::class);
    }
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }
}
