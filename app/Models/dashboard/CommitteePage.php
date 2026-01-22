<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CommitteePage extends Model{
    use HasTranslations;

    protected $guarded = [];

    public $translatable = [
        'hero_sub_title',
        'hero_title',
        'hero_color_title',
        'hero_description',
        'committee_title',
        'committee_desc',
        'com1_slogan',
        'com1_topic_title',
        'com1_topic_p',
        'com1_discus_title',
        'com1_discus_point1',
        'com1_discus_point2',
        'com1_discus_point3',
        'com1_discus_point4',
        'com1_discus_point5',
        'com1_learn_title',
        'com1_learn_point1',
        'com1_learn_point2',
        'com1_learn_point3',
        'com1_learn_point4',
        'com2_slogan',
        'com2_topic_title',
        'com2_topic_p',
        'com2_discus_title',
        'com2_discus_point1',
        'com2_discus_point2',
        'com2_discus_point3',
        'com2_discus_point4',
        'com2_discus_point5',
        'com2_learn_title',
        'com2_learn_point1',
        'com2_learn_point2',
        'com2_learn_point3',
        'com2_learn_point4',
        'how_work_title',
        'how_work_desc',
        'how_work_title_point1',
        'how_work_title_point2',
        'how_work_title_point3',
        'how_work_title_point4',
        'how_work_desc_point1',
        'how_work_desc_point2',
        'how_work_desc_point3',
        'how_work_desc_point4',
        'why_join_title',
        'why_join_desc',
        'why_join_title_point1',
        'why_join_title_point2',
        'why_join_title_point3',
        'why_join_title_point4',
        'why_join_title_point5',
        'why_join_title_point6',
        'why_join_p_point1',
        'why_join_p_point2',
        'why_join_p_point3',
        'why_join_p_point4',
        'why_join_p_point5',
        'why_join_p_point6',
    ];
}
