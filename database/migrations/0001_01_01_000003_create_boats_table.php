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
        Schema::create('boats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->string('category');
            $table->integer('model_year');
            $table->float('length');
            $table->integer('capacity');
            $table->decimal('daily_price', 12, 2);
            $table->text('description');
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->decimal('commission_rate', 5, 2)->default(15.00); // Yüzde olarak, ör: 15.00 = %15
            $table->enum('approval_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->json('pending_changes')->nullable(); // Onay bekleyen güncellemeler için
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boats');
    }
}; 