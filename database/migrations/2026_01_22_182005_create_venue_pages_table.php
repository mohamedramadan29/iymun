<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('venue_pages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_sub_title');
            $table->string('hero_title');
            $table->string('hero_color_title');
            $table->string('hero_image');
            $table->text('hero_description');
            #################### Start Comming Soon Section

            $table->string('coming_soon_title');
            $table->text('coming_soon_p1');
            $table->text('coming_soon_p2');

            ################ Advantage

            $table->string('adv_title1');
            $table->string('adv_title2');
            $table->string('adv_title3');
            $table->string('adv_p1');
            $table->string('adv_p2');
            $table->string('adv_p3');

            ############### why New york city

            $table->string('why_title');
            $table->text('why_p1');

            $table->string('why_title_point1');
            $table->string('why_title_point2');
            $table->string('why_title_point3');
            $table->string('why_title_point4');
            $table->string('why_title_point5');
            $table->string('why_title_point6');

            $table->text('why_p_point1');
            $table->text('why_p_point2');
            $table->text('why_p_point3');
            $table->text('why_p_point4');
            $table->text('why_p_point5');
            $table->text('why_p_point6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venue_pages');
    }
};
