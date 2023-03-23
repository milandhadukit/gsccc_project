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
        Schema::create('home_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('title_hi')->nullable();
            $table->string('title_gu')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_hi')->nullable();
            $table->text('content_gu')->nullable();
            $table->text('introduction_en')->nullable();
            $table->text('introduction_hi')->nullable();
            $table->text('introduction_gu')->nullable();
            $table->text('objective_en')->nullable();
            $table->text('objective_hi')->nullable();
            $table->text('objective_gu')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1)->comment('(0 = inactive and 1 = active)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_abouts');
    }
};
