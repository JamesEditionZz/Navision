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
        Schema::create('a82__f2_fg_bu10s', function (Blueprint $table) {
            $table->string('A')->nullable(true);
            $table->string('Location')->nullable(true);
            $table->string('Item No')->nullable(true);
            $table->string('Global Dimension 2 Code')->nullable(true);
            $table->string('Full Description')->nullable(true);
            $table->string('Unit of Measure Code')->nullable(true);
            $table->double('Quantity', 20, 2)->nullable(true);
            $table->double('Cost Amount (Actual)', 20, 2)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a82__f1_fg_bu10s');
    }
};
