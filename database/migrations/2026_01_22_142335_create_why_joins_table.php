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
        Schema::create('why_joins', function (Blueprint $table) {
            $table->id();
            $table->string('hero_sub_title');
            $table->string('hero_title');
            $table->string('hero_color_title');
            $table->string('hero_image');
            $table->text('hero_description');

            ####################
            $table->string('reason_title');
            $table->string('reason_desc');
            ########### Reasons ########

            $table->string('reason_title1');
            $table->string('reason_title2');
            $table->string('reason_title3');
            $table->string('reason_title4');
            $table->string('reason_title5');
            $table->string('reason_title6');
            $table->string('reason_title7');
            $table->string('reason_title8');
            $table->string('reason_title9');
            $table->string('reason_title10');
            $table->text('reason_desc1');
            $table->text('reason_desc2');
            $table->text('reason_desc3');
            $table->text('reason_desc4');
            $table->text('reason_desc5');
            $table->text('reason_desc6');
            $table->text('reason_desc7');
            $table->text('reason_desc8');
            $table->text('reason_desc9');
            $table->text('reason_desc10');

            ########### Testmonails ####

            $table->string('test_title');
            $table->string('test_desc');

            $table->text('testmon_desc1');
            $table->string('testmon_name1');

            $table->text('testmon_desc2');
            $table->string('testmon_name2');

            $table->text('testmon_desc3');
            $table->string('testmon_name3');

            ############ Carer And Academic

            $table->string('career_title');
            $table->string('career_desc');

            ############ University Applications
            $table->string('university_title');
            $table->string('university_title_point1');
            $table->string('university_title_point2');
            $table->string('university_title_point3');
            $table->string('university_title_point4');
            $table->string('university_title_point5');

            ######### Career Opportunities
            $table->string('career_title2');
            $table->string('career_title_point1');
            $table->string('career_title_point2');
            $table->string('career_title_point3');
            $table->string('career_title_point4');
            $table->string('career_title_point5');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_joins');
    }
};
