<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WhyJoin extends Model
{

    use HasTranslations;

    protected $guarded = [];

    public $translatable = [
        'hero_sub_title',
        'hero_title',
        'hero_color_title',
        'hero_description',

        'reason_title',
        'reason_desc',
        'reason_title1',
        'reason_title2',
        'reason_title3',
        'reason_title4',
        'reason_title5',
        'reason_title6',
        'reason_title7',
        'reason_title8',
        'reason_title9',
        'reason_title10',
        'reason_desc1',
        'reason_desc2',
        'reason_desc3',
        'reason_desc4',
        'reason_desc5',
        'reason_desc6',
        'reason_desc7',
        'reason_desc8',
        'reason_desc9',
        'reason_desc10',

        'test_title',
        'test_desc',

        'testmon_desc1',
        'testmon_name1',

        'testmon_desc2',
        'testmon_name2',

        'testmon_desc3',
        'testmon_name3',

        'career_title',
        'career_desc',

        'university_title',
        'university_title_point1',
        'university_title_point2',
        'university_title_point3',
        'university_title_point4',
        'university_title_point5',

        'career_title2',
        'career_title_point1',
        'career_title_point2',
        'career_title_point3',
        'career_title_point4',
        'career_title_point5',

    ];
}
