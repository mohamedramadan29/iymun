<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['question', 'answer', 'category', 'order'];
}
