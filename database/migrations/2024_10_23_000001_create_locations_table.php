<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_khmer')->nullable();
            $table->text('description')->nullable();
            $table->string('google_map_link');
            $table->string('icon')->default('📍');
            $table->decimal('distance_from_homestay', 8, 2)->nullable();
            $table->boolean('is_pinned')->default(false);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
