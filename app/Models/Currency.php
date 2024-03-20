<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'active',
    ];

    public function outputs()
    {
        return $this->hasMany(Output::class);
    }

    public function inputs()
    {
        return $this->hasMany(Input::class);
    }

}
