<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'code',
        'measurement_id',
        'active',
    ];

    public function output_products()
    {
        return $this->hasMany(OutputProduct::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function measurement()
    {
        return $this->belongsTo(Measurement::class);
    }



}
