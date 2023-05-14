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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('module', 255);
            $table->integer('module_id');
            $table->string('type', 255);
            $table->string('name', 255);
            $table->string('file_name', 255);
            $table->longText('file_path');
            $table->longText('full_path');
            $table->string('file_extension', 100);
            $table->string('mime_type', 50);
            $table->string('file_size', 100);
            $table->foreignId('added_by')->constrained('admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
