<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'active',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function outputs()
    {
        return $this->hasMany(Output::class);
    }

    public function inputs()
    {
        return $this->hasMany(Input::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


}
