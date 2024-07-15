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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->year('year');
            $table->string('rated');
            $table->date('released');
            $table->string('runtime');
            $table->string('genre');
            $table->string('director');
            $table->string('writer');
            $table->string('actors');
            $table->text('plot');
            $table->string('language');
            $table->string('country');
            $table->decimal('imdbRating', 3, 1);
            $table->string('type');
            $table->string('dvd')->nullable();
            $table->decimal('boxOffice', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
