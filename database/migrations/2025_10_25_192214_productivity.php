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
        Schema::create('productivity', function (Blueprint $table) {
            $table->id();
            $table->string('Drawer_ID')->unique();
            $table->string('Flight_Type');
            $table->string('Drawer_Category');
            $table->integer('Total_Items');
            $table->integer('Unique_Item_Types');
            $table->text('Item_List'); // Lista larga de items (ej. JSON o CSV)
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productivity');
    }
};
