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
            $table->double('quantity' , 10, 2)->nullable(true);
            $table->double('Cost per Unit', 8, 2)->nullable(true);
            $table->double('amount', 8, 2)->nullable(true);
            $table->double('estimate_amount', 8, 2)->nullable(true);
            $table->double('inventory')->nullable(true);
            $table->string('last_stock_in')->nullable(true);
            $table->string('entry_type')->nullable(true);
        });

        DB::table('item_stock')->insert([
            [
            'item no' => 'AS-000008',
            'goodname1' => 'เชือกมิลเบอร์ 4 (10X10)',
            'branchcode' => 'AS-03',
            'groupname' => 'CH-000002',
            'quantity' => 4,
            'Cost per Unit' => 1290,
            'amount' => 5160,
            'estimate_amount' => 5160,
            'inventory' => 4,
            'last_stock_in' => "",
            'entry_type' => ""
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_stock');
    }
};
