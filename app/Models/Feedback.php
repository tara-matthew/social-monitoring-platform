<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'social_platform_id',
        'brand_id'
    ];

    public function socialPlatform()
    {
        return $this->belongsTo(SocialPlatform::class);
    }
}
