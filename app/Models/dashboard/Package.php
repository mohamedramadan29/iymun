<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Package extends Model
{
    use HasTranslations;

    protected $guarded = [];

    protected $translatable = ['title', 'slogan', 'features'];
}
