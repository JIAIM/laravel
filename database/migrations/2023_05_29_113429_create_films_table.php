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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('director');
            $table->string('image')->nullable();
            $table->unsignedInteger('year')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('studio_id')->nullable();
            $table->index('studio_id', 'film_studio_idx');
            $table->foreign('studio_id', 'film_studio_fk')->on('studios')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
