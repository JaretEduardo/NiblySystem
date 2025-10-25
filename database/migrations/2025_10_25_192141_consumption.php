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
        Schema::create('flight_consumptions', function (Blueprint $table) {
            $table->id();
            $table->string('flight_id');
            $table->string('origin');
            $table->date('date');
            $table->string('flight_type');
            $table->string('service_type');
            $table->integer('passenger_count');
            $table->string('product_id');
            $table->string('product_name');
            $table->integer('standard_specification_qty');
            $table->integer('quantity_returned');
            $table->integer('quantity_consumed');
            $table->decimal('unit_cost', 8, 2);
            $table->text('crew_feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_consumptions');
    }
};
