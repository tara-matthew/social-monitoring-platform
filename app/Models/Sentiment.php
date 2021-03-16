<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentiment extends Model
{
    use HasFactory;

    public function brands()
    {
        return $this->belongsToMany(Brand::class)->withTimestamps();
    }
}
