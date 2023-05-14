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
        Schema::create('nannies', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['active', 'under_review', 'not_active']);
            $table->string('short_name', 255);
            $table->string('first_name', 255);
            $table->string('family_name', 255);
            $table->string('phone_number', 255);
            $table->boolean('driving_license');
            $table->boolean('pet_friendly');
            $table->longText('intro');
            $table->date('date_of_birth');
            $table->integer('experience_years');
            $table->foreignId ('nationality_id')->constrained('countries');
            $table->foreignId('city_id')->constrained('cities');
            $table->date('start_work');
            $table->enum('open_to_work', ['live_in', 'live_out', 'both']);
            $table->float('salary_live_in')->nullable();
            $table->float('salary_live_out')->nullable();
            $table->string('visa_status', 255);
            $table->string('education_level', 255);
            $table->longText('languages');
            $table->longText('age_group_experience')->nullable();
            $table->longText('video_link_url');
            $table->longText('psychometric_key_result');
            $table->longText('psychometric_conclusion');
            $table->longText('personality_introduction');
            $table->longText('personality_strength');
            $table->longText('personality_weekness');
            $table->longText('personality_opportunity');
            $table->longText('personality_potential_risk');
            $table->longText('personality_recommendation');
            $table->longText('skills')->nullable();
            $table->longText('needs_support_with')->nullable();
            $table->foreignId('added_by')->constrained('admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nannies');
    }
};
