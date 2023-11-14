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
            $table->double('Quantity', 10, 2)->nullable(true);
            $table->double('Cost Amount (Actual)', 10, 2)->nullable(true);
        });
        DB::table('a82__f2_fg_bu10s')->insert([
            [
            'A' => 'NT-007450F1-FG-BU02',
            'Location' => 'F1-FG-BU02',
            'Item No' => 'NT-007450',
            'Global Dimension 2 Code' => 'NT-01',
            'Full Description' => '0.20mm ครามม่วง DK   22.0cm x 50 md x 180Mtr  ถ้วยทอง (Y)',
            'Unit of Measure Code' => 'PCS',
            'Quantity' => 595,
            'Cost Amount (Actual)' => 146965,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a82__f1_fg_bu10s');
    }
};
