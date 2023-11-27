<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_stock', function (Blueprint $table) {
            $table->string('item no')->nullable(true); // Change the data type to string
            $table->string('goodname1')->nullable(true);
            $table->string('branchcode')->nullable(true);
            $table->string('groupname')->nullable(true);
            $table->double('quantity' , 20, 2)->nullable(true);
            $table->double('Cost per Unit', 20, 2)->nullable(true);
            $table->double('amount', 20, 2)->nullable(true);
            $table->double('estimate_amount', 20, 2)->nullable(true);
            $table->double('inventory')->nullable(true);
            $table->string('last_stock_in')->nullable(true);
            $table->string('entry_type')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_stock');
    }
};
