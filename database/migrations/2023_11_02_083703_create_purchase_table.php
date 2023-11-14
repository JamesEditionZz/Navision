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
        Schema::create('purchase', function (Blueprint $table) {
            $table->string('Item No')->nullable(true);
            $table->string('Global Dimension 2 Code')->nullable(true);
            $table->string('Full Description')->nullable(true);
            $table->string('Unit of Measure Code')->nullable(true);
            $table->double('Quantity', 10, 2)->nullable(true);
            $table->double('Cost Amount (Actual)', 10, 2)->nullable(true);
        });

        DB::table('purchase')->insert([
            [
            'Item No' => 'SFN-000010',
            'Global Dimension 2 Code' => 'AS-10',
            'Full Description' => 'ผ้ามุ้ง ขาว ปลาหมึกยักษ์ 32 L x 300cm x 30Mtr',
            'Unit of Measure Code' => 'PCS',
            'Quantity' => 2,
            'Cost Amount (Actual)' => 3126,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase');
    }
};
