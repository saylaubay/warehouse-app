<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'amount',
        'price',
        'expire_date',
        'input_id',
    ];

    public function input()
    {
        return $this->belongsTo(Input::class);
    }


}
