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
        Schema::create('dataother', function (Blueprint $table) {
            $table->string('Item No')->nullable(true);
            $table->string('Customer')->nullable(true);
            $table->double('PcsAfter', 20, 2)->nullable(true);
            $table->double('PriceAfter', 20, 2)->nullable(true);
            $table->string('Category')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataother');
    }
};
