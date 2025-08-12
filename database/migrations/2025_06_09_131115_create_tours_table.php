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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->string('duration');
            $table->string('number_of_individuals');
            $table->integer('price');
            $table->text('about');
            $table->text('included');
            $table->text('excluded');
            $table->text('tour_plan_day_1')->nullable();
            $table->text('tour_plan_day_2')->nullable();
            $table->text('tour_plan_day_3')->nullable();
            $table->text('tour_plan_day_4')->nullable();
            $table->text('tour_plan_day_5')->nullable();
            $table->text('policy');
            $table->string('image_primary')->nullable();
            $table->string('image_secondary_1')->nullable();
            $table->string('image_secondary_2')->nullable();
            $table->string('image_secondary_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
