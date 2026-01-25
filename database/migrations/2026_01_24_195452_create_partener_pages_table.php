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
        Schema::create('partener_pages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_sub_title');
            $table->string('hero_title');
            $table->string('hero_color_title');
            $table->string('hero_image');
            $table->text('hero_description');
            ############## Founding Partners

            #### American Diplomats
            $table->string('american_title');
            $table->string('american_sub_title');
            $table->text('american_p');
            $table->string('contribute_title');
            $table->text('contribute_points');

            ###### International Youth MUN

            $table->string('iymun_title');
            $table->string('iymun_sub_title');
            $table->text('iymun_p');
            $table->string('track_title');
            $table->text('track_points');


            ######## Platinum sponser

            $table->string('platinum_title');
            $table->string('platinum_p');
            $table->string('platinum1_title');
            $table->string('platinum2_title');
            $table->string('platinum3_title');
            $table->string('platinum4_title');
            ##### Academic Partener

            $table->string('academic_title');
            $table->text('academic_p');
            $table->string('academic1_title');
            $table->string('academic2_title');
            $table->string('academic3_title');
            $table->string('academic4_title');
            $table->string('academic5_title');
            $table->string('academic6_title');
            $table->text('academic1_p');
            $table->text('academic2_p');
            $table->text('academic3_p');
            $table->text('academic4_p');
            $table->text('academic5_p');
            $table->text('academic6_p');

            ############ Partener Sayes

            $table->text('partner_say1_text');
            $table->text('partner_say2_text');
            $table->text('partner_say3_text');
            $table->text('partner_say1_name');
            $table->text('partner_say2_name');
            $table->text('partner_say3_name');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partener_pages');
    }
};
