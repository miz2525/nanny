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
        Schema::create('nannies_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nanny_id')->constrained('nannies');
            $table->longText('comment');
            $table->foreignId('added_by')->constrained('admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nannies_comments');
    }
};
