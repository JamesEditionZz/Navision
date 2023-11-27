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
        Schema::create('log_price', function (Blueprint $table) {
            $table->string('Item No_Old')->nullable(true);
            $table->string('Customer_Old')->nullable(true);
            $table->double('PcsAfter_Old', 20, 2)->nullable(true);
            $table->double('PriceAfter_Old', 20, 2)->nullable(true);
            $table->string('Category_Old')->nullable(true);
            $table->string('DateUpdate_Old')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_prices');
    }
};
