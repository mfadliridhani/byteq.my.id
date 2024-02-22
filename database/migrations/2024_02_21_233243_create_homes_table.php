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
            $table->string('description_i_can_help');
            $table->string('description_get_online_and');
            $table->string('resume');
            $table->string('projects');
            $table->string('image')->nullable()->default('default.jpg');
            $table->string('name');
            $table->text('description_about_me');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('github');
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
