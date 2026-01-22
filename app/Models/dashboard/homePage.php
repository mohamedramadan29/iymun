<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class homePage extends Model
{
    use HasTranslations;

    protected $guarded = [];

    protected $translatable = [
        'hero_first_title',
        'hero_main_title',
        'hero_p',
        'hero_city',
        'hero_date',
        'conference_title',
        'conference_p',
        'conference_step_title1',
        'conference_step_title2',
        'conference_step_title3',
        'conference_step_title4',
        'conference_step_p1',
        'conference_step_p2',
        'conference_step_p3',
        'conference_step_p4',
        'why_title',
        'why_p',
        'why_step_title1',
        'why_step_title2',
        'why_step_title3',
        'why_step_p1',
        'why_step_p2',
        'why_step_p3',
        'why_main_title',
        'why_main_p'
    ];
}
