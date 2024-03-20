<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;

    protected $fillable = [
        'warehouse_id',
        'supplier_id',
        'currency_id',
        'facture_number',
        'code',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function input_products()
    {
        return $this->hasMany(InputProduct::class);
    }



}
