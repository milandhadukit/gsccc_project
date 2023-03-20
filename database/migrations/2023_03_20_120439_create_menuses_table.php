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
        Schema::create('menuses', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('title_hi')->nullable();
            $table->string('title_gu')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_hi')->nullable();
            $table->text('description_gu')->nullable();
            $table->integer('parent_id')->default(0);
            $table->string('slug')->nullable();
            $table->enum('status', ['1', '0', '-1'])->default(1);
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menuses');
    }
};