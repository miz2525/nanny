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
        Schema::create('nannies_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nanny_id')->constrained('nannies');
            $table->string('background_type', 255);
            $table->longText('work_title');
            $table->longText('work_period');
            $table->boolean('status');
            $table->longText('work_description');
            $table->longText('reference_title');
            $table->longText('reference_description');
            $table->foreignId('added_by')->constrained('admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nannies_backgrounds');
    }
};
