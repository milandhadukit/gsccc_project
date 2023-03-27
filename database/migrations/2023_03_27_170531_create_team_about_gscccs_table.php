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
        Schema::create('team_about_gscccs', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('title_hi')->nullable();
            $table->string('title_gu')->nullable();
            $table->string('image')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_hi')->nullable();
            $table->string('name_gu')->nullable();
            $table->string('role_en')->nullable();
            $table->string('role_hi')->nullable();
            $table->string('role_gu')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_hi')->nullable();
            $table->string('address_gu')->nullable();
            $table->string('mobile_number');
            $table->string('email')->unique();
            $table->tinyInteger('status')->default(1)->comment('(0 = inactive and 1 = active)');
            $table->string('type')->nullable();
            $table->string('page')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_about_gscccs');
    }
};
