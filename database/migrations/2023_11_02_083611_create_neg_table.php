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
        Schema::create('neg', function (Blueprint $table) {
            $table->string('Item No')->nullable(true);
            $table->string('Global Dimension 2 Code')->nullable(true);
            $table->string('Full Description')->nullable(true);
            $table->string('Unit of Measure Code')->nullable(true);
            $table->double('Quantity', 10, 2)->nullable(true);
            $table->double('Cost Amount (Actual)', 10, 2)->nullable(true);
        });

        DB::table('neg')->insert([
            [
            'Item No' => 'MT-000070',
            'Global Dimension 2 Code' => 'MT-01',
            'Full Description' => 'รุมสีทอง 1แบ่ง2  0.10mm  4.0 x 30 x 200 ป้ายถ้วยทอง',
            'Unit of Measure Code' => 'PCS',
            'Quantity' => -198,
            'Cost Amount (Actual)' => -34848,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neg');
    }
};
