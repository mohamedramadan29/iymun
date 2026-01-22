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
        Schema::create('committee_pages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_sub_title');
            $table->string('hero_title');
            $table->string('hero_color_title');
            $table->string('hero_image');
            $table->text('hero_description');
            ########## start Choose Committee Section

            $table->string('committee_title');
            $table->string('committee_desc');

            $table->string('com1_slogan');
            $table->string('com1_topic_title');
            $table->string('com1_topic_p');
            $table->string('com1_discus_title');
            $table->string('com1_discus_point1');
            $table->string('com1_discus_point2');
            $table->string('com1_discus_point3');
            $table->string('com1_discus_point4');
            $table->string('com1_discus_point5');
            $table->string('com1_learn_title');
            $table->string('com1_learn_point1');
            $table->string('com1_learn_point2');
            $table->string('com1_learn_point3');
            $table->string('com1_learn_point4');

            $table->string('com2_slogan');
            $table->string('com2_topic_title');
            $table->string('com2_topic_p');
            $table->string('com2_discus_title');
            $table->string('com2_discus_point1');
            $table->string('com2_discus_point2');
            $table->string('com2_discus_point3');
            $table->string('com2_discus_point4');
            $table->string('com2_discus_point5');
            $table->string('com2_learn_title');
            $table->string('com2_learn_point1');
            $table->string('com2_learn_point2');
            $table->string('com2_learn_point3');
            $table->string('com2_learn_point4');

            ############### How Work Section

            $table->string('how_work_title');
            $table->string('how_work_desc');
            $table->string('how_work_title_point1');
            $table->string('how_work_title_point2');
            $table->string('how_work_title_point3');
            $table->string('how_work_title_point4');
            $table->string('how_work_desc_point1');
            $table->string('how_work_desc_point2');
            $table->string('how_work_desc_point3');
            $table->string('how_work_desc_point4');

            ############# Why Join

            $table->string('why_join_title');
            $table->string('why_join_desc');

            $table->string('why_join_title_point1');
            $table->string('why_join_title_point2');
            $table->string('why_join_title_point3');
            $table->string('why_join_title_point4');
            $table->string('why_join_title_point5');
            $table->string('why_join_title_point6');
            $table->string('why_join_p_point1');
            $table->string('why_join_p_point2');
            $table->string('why_join_p_point3');
            $table->string('why_join_p_point4');
            $table->string('why_join_p_point5');
            $table->string('why_join_p_point6');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committee_pages');
    }
};
