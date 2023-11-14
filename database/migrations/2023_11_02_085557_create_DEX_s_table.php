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
        Schema::create('DEX_s', function (Blueprint $table) {
            $table->string('Item&Branch')->nullable(true);
            $table->string('Item No')->nullable(true);
            $table->string('Global Dimension 2 Code')->nullable(true);
            $table->string('Full Description')->nullable(true);
            $table->string('Unit of Measure Code')->nullable(true);
            $table->double('Quantity', 10, 2)->nullable(true);
            $table->double('Cost Amount (Actual)', 10, 2)->nullable(true);
            $table->double('Sales Amount (Actual)', 10, 2)->nullable(true);
        });
        DB::table('DEX_s')->insert([
            [
            'Item&Branch' => 'NT-028313DEX',
            'Item No' => 'NT-028313',
            'Global Dimension 2 Code' => 'NT-01',
            'Full Description' => '0.20mm ครามม่วง DK   22.0cm x 50 md x 180Mtr  ถ้วยทอง (Y)',
            'Unit of Measure Code' => 'PCS',
            'Quantity' => -5,
            'Cost Amount (Actual)' => -4685,
            'Sales Amount (Actual)' => 5250
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DEX_s');
    }
};
