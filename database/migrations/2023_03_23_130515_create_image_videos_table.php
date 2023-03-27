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
        Schema::create('image_videos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('video_link')->nullable();
            $table->string('content')->nullable();
            $table->tinyInteger('status_image')->default(1)->comment('(0 = inactive and 1 = active)');
            $table->tinyInteger('status_video')->default(1)->comment('(0 = inactive and 1 = active)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_videos');
    }
};
