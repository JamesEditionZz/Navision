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
        Schema::create('po', function (Blueprint $table) {
            $table->string('Item No')->nullable(true);
            $table->string('Global Dimension 2 Code')->nullable(true);
            $table->string('Full Description')->nullable(true);
            $table->string('Unit of Measure Code')->nullable(true);
            $table->double('Quantity' , 10, 2)->nullable(true);
            $table->double('Cost Amount (Actual)', 10, 2)->nullable(true);
        });

        DB::table('po')->insert([
            [
            'Item No' => 'AS-000008',
            'Global Dimension 2 Code' => 'AS-03',
            'Full Description' => 'เชือกมิลเบอร์ 4 (10X10)',
            'Unit of Measure Code' => 'PCS',
            'Quantity' => 198,
            'Cost Amount (Actual)' => 34848,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('po');
    }
};