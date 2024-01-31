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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('sub_heading');
            $table->string('bowler_num');
            $table->string('bowler_desc');
            $table->string('accuracy_num');
            $table->string('accuracy_desc');
            $table->string('champions_num');
            $table->string('champions_desc');
            $table->foreignId('images_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
