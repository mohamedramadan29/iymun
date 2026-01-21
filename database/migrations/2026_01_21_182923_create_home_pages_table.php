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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            ############ Hero Section
            $table->string('hero_first_title');
            $table->string('hero_main_title');
            $table->string('hero_p');
            $table->string('hero_city');
            $table->string('hero_date');
            $table->string('hero_img1');
            $table->string('hero_img2');
            $table->string('hero_img3');

            ########### Conference Section ###########

            $table->string('conference_title');
            $table->string('conference_p');
            $table->string('conference_step_title1');
            $table->string('conference_step_title2');
            $table->string('conference_step_title3');
            $table->string('conference_step_title4');
            $table->string('conference_step_p1');
            $table->string('conference_step_p2');
            $table->string('conference_step_p3');
            $table->string('conference_step_p4');
            ################## Why Section ############
            $table->string('why_title');
            $table->string('why_p');
            $table->string('why_step_title1');
            $table->string('why_step_title2');
            $table->string('why_step_title3');
            $table->string('why_step_p1');
            $table->string('why_step_p2');
            $table->string('why_step_p3');
            $table->string('why_main_title');
            $table->string('why_main_p');
            ####################
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
