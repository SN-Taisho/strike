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
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('subheading');
            $table->string('age')->nullable();
            $table->string('req_skill')->nullable();
            $table->string('duration')->nullable();
            $table->string('description');
            $table->string('featured')->nullable();
            $table->string('other_info')->nullable();
            $table->foreignId('images_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmes');
    }
};
