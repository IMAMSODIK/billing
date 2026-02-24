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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('console_id');
            $table->string('customer_name');
            $table->string('phone')->nullable();
            $table->dateTime('booking_start');
            $table->dateTime('booking_end');
            $table->integer('estimated_price')->nullable();
            $table->enum('status', ['active', 'completed', 'cancelled'])
                ->default('active');
            $table->foreignId('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
