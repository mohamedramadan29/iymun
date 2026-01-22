<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class VenuePage extends Model
{
    use HasTranslations;

    protected $guarded = [];

    public $translatable = [
        'hero_sub_title',
        'hero_title',
        'hero_color_title',
        'hero_description',
        'coming_soon_title',
        'coming_soon_p1',
        'coming_soon_p2',
        'adv_title1',
        'adv_title2',
        'adv_title3',
        'adv_p1',
        'adv_p2',
        'adv_p3',
        'why_title',
        'why_p1',
        'why_title_point1',
        'why_title_point2',
        'why_title_point3',
        'why_title_point4',
        'why_title_point5',
        'why_title_point6',
        'why_p_point1',
        'why_p_point2',
        'why_p_point3',
        'why_p_point4',
        'why_p_point5',
        'why_p_point6',
    ];
}
