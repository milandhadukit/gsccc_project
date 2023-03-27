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
        Schema::create('about_gscccs', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title_en');
            $table->string('title_hi');
            $table->string('title_gu');
            $table->text('content_en');
            $table->text('content_hi');
            $table->text('content_gu');
            $table->string('slug_en');
            $table->string('slug_hi');
            $table->string('slug_gu');
            $table->tinyInteger('status')->default(1)->comment('(0 = inactive and 1 = active)');
            $table->tinyInteger('parent_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_gscccs');
    }
};
