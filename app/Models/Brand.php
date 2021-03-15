<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    public function tenant()
    {
        return $this->hasOne(Tenant::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
