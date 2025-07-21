<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('boat_category_pivot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boat_id')->constrained('boats')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('boat_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('boat_category_pivot');
    }
}; 