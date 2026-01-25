<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PartenerPage extends Model
{
    use HasTranslations;

    protected $guarded = [];
    public $translatable = [
        'hero_sub_title',
        'hero_title',
        'hero_color_title',
        'hero_description',
        'american_title',
        'american_sub_title',
        'american_p',
        'contribute_title',
        'contribute_points',
        'iymun_title',
        'iymun_sub_title',
        'iymun_p',
        'track_title',
        'track_points',
        'platinum_title',
        'platinum_p',
        'platinum1_title',
        'platinum2_title',
        'platinum3_title',
        'platinum4_title',
        'academic_title',
        'academic_p',
        'academic1_title',
        'academic2_title',
        'academic3_title',
        'academic4_title',
        'academic5_title',
        'academic6_title',
        'academic1_p',
        'academic2_p',
        'academic3_p',
        'academic4_p',
        'academic5_p',
        'academic6_p',
        'partner_say1_text',
        'partner_say2_text',
        'partner_say3_text',
        'partner_say1_name',
        'partner_say2_name',
        'partner_say3_name',
    ];
}
