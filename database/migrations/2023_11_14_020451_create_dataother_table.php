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
            $table->double('PriceAvg', 10, 2)->nullable(true);
            $table->double('PcsAfter', 10, 2)->nullable(true);
            $table->double('PriceAfter', 10, 2)->nullable(true);
            $table->string('Category')->nullable(true);
        });
        DB::table('dataother')->insert([
            [
                'Item No' => 'AS-000001',
                'Customer' => 'DC1',
                'PriceAvg' => 1500,
                'PcsAfter' => 0,
                'PriceAfter' => 0,
                'Category' => 'ตะกั่ว',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataother');
    }
};
