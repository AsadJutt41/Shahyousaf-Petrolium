<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remaning_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petrol_type')->constrained('fuels')->onDelete('cascade');
            $table->string('fuel_litter');
            $table->string('per_litter_price')->nullable();
            $table->string('total_fuel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remaning_stocks');
    }
};
