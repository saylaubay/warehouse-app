<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutputProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'output_id',
        'amount',
        'proce',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function output()
    {
        return $this->belongsTo(Output::class);
    }



}
