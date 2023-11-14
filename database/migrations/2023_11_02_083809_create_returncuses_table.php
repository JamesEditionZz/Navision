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
        Schema::create('returncuses', function (Blueprint $table) {
            $table->string('Item No')->nullable(true);
            $table->string('Global Dimension 2 Code')->nullable(true);
            $table->string('Full Description')->nullable(true);
            $table->string('Unit of Measure Code')->nullable(true);
            $table->double('Quantity', 10, 2)->nullable(true);
            $table->double('Cost Amount (Actual)', 10, 2)->nullable(true);
            $table->double('Sales Amount (Actual)', 10, 2)->nullable(true);
        });

        DB::table('returncuses')->insert([
            [
            'Item No' => 'MT-000787',
            'Global Dimension 2 Code' => 'MT-01',
            'Full Description' => 'รุมปลิว เต็มผืน   0.15mm  5.5cm x30md x200 ป้ายหงษ์เหลือง',
            'Unit of Measure Code' => 'PCS',
            'Quantity' => 5,
            'Cost Amount (Actual)' => 775,
            'Sales Amount (Actual)' => -848,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returncuses');
    }
};
