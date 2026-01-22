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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_sub_title');
            $table->string('hero_title');
            $table->string('hero_color_title');
            $table->string('hero_image');
            $table->text('hero_description');
            #################
            $table->string('about_title');
            $table->longText('about_desc');
            $table->string('about_point1');
            $table->string('about_point2');
            $table->string('about_point3');
            $table->string('about_point4');
            $table->string('about_image');
            ########### Mission and Vision

            $table->string('m_section_title');
            $table->string('m_section_p');
            $table->string('mission_title');
            $table->longText('mission_desc');
            $table->string('vission_title');
            $table->longText('vission_desc');
            ########## Core Vales

            $table->string('core_title');
            $table->string('core_p');
            $table->string('core_point_title1');
            $table->string('core_point_title2');
            $table->string('core_point_title3');
            $table->string('core_point_title4');
            $table->string('core_point_title5');
            $table->string('core_point_title6');
            $table->text('core_point_p1');
            $table->text('core_point_p2');
            $table->text('core_point_p3');
            $table->text('core_point_p4');
            $table->text('core_point_p5');
            $table->text('core_point_p6');

            ############### Diffrenet Section

            $table->string('diff_title');
            $table->string('diff_point1_title');
            $table->string('diff_point2_title');
            $table->string('diff_point3_title');
            $table->string('diff_point4_title');
            $table->text('diff_point1_p');
            $table->text('diff_point2_p');
            $table->text('diff_point3_p');
            $table->text('diff_point4_p');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
