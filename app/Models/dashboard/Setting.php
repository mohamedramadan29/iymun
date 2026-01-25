<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'full_address',
        'location',
        'facebook_url',
        'x_url',
        'instagram_url',
        'linkedin_url',
        'youtube_url',
    ];
}
