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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            ############################################
            $table->string('name');
            $table->string('preferred_name')->nullable();
            $table->string('birthdate');
            $table->string('gender');
            $table->string('nationality');
            $table->string('country');
            $table->string('city');
            $table->string('passport_number');
            $table->string('passport_issue_country');
            $table->string('passport_expire_date');
            $table->string('school');
            #############################################################
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('whatsapp')->nullable();
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_relationship');
            $table->string('emergency_contact_phone_number');
            ##############################################################
            $table->string('eduction_level');
            $table->string('eduction_level_other')->nullable();
            $table->string('organization_name');
            $table->string('filed_of_study');
            $table->integer('years_of_experience')->default(0);
            $table->string('have_model_un_before');
            $table->string('list_of_model_un')->nullable();
            $table->string('have_experience_in_leadership');
            $table->string('list_of_experience_in_leadership')->nullable();
            ###################################################################
            $table->string('preferred_committee');
            $table->string('country_preference_for_representation');
            $table->string('dietary_restrictions');
            $table->string('dietary_restrictions_specify')->nullable();
            $table->string('require_any_special_assistance');
            $table->string('require_any_special_assistance_specify')->nullable();
            $table->string('visa_enter_un');
            $table->string('previously_issued_visa_us');
            $table->string('currently_hold_valid_us_visa');
            #####################################################################
            $table->string('how_did_you_hear_about_us');
            $table->string('consent_photos_video');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('application_status_from_admin')->default('pending');
            $table->string('payment_status')->default('pending');
            $table->string('password');
            $table->tinyInteger('email_status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
