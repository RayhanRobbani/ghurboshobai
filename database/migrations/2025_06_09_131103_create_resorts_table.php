<?php

use App\Models\Location;
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
        Schema::create('resorts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(Location::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('duration');
            $table->string('number_of_individuals');
            $table->integer('price');
            $table->text('about');
            $table->text('included');
            $table->text('excluded');
            $table->string('image_primary')->nullable();
            $table->string('image_secondary_1')->nullable();
            $table->string('image_secondary_2')->nullable();
            $table->string('image_secondary_3')->nullable();
            $table->string('image_secondary_4')->nullable();
            $table->string('image_secondary_5')->nullable();
            $table->string('image_secondary_6')->nullable();
            $table->string('image_secondary_7')->nullable();
            $table->string('image_secondary_8')->nullable();
            $table->string('image_secondary_9')->nullable();
            $table->string('image_secondary_10')->nullable();
            $table->string('image_secondary_11')->nullable();
            $table->string('image_secondary_12')->nullable();
            $table->string('image_secondary_13')->nullable();
            $table->string('image_secondary_14')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resorts');
    }
};
