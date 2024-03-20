<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'phone',
      'active',
    ];

    public function outputs()
    {
        return $this->hasMany(Output::class);
    }


}
