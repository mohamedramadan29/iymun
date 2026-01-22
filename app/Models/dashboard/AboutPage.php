<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutPage extends Model
{
    use HasTranslations;

    protected $guarded = [];

    public $translatable = [
        'hero_sub_title',
        'hero_title',
        'hero_color_title',
        'hero_description',
        'about_title',
        'about_desc',
        'about_point1',
        'about_point2',
        'about_point3',
        'about_point4',
        'about_image',
        'm_section_title',
        'm_section_p',
        'mission_title',
        'mission_desc',
        'vission_title',
        'vission_desc',
        'core_title',
        'core_p',
        'core_point_title1',
        'core_point_title2',
        'core_point_title3',
        'core_point_title4',
        'core_point_title5',
        'core_point_title6',
        'core_point_p1',
        'core_point_p2',
        'core_point_p3',
        'core_point_p4',
        'core_point_p5',
        'core_point_p6',
        'diff_title',
        'diff_point1_title',
        'diff_point2_title',
        'diff_point3_title',
        'diff_point4_title',
        'diff_point1_p',
        'diff_point2_p',
        'diff_point3_p',
        'diff_point4_p',
    ];
}
