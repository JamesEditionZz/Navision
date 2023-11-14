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
        Schema::create('item_all', function (Blueprint $table) {
            $table->string('No')->nullable(true);
            $table->double('Unit Cost Decha', 10, 2)->nullable(true);
            $table->string('Inventory Posting Group')->nullable(true);
            $table->string('Full Description')->nullable(true);
            $table->string('Item Search Description 1')->nullable(true);
            $table->string('Item Search Description 2')->nullable(true);
            $table->string('Item Search Description 3')->nullable(true);
        });
        DB::table('item_all')->insert([
            [
                'No' => 'AS-000001',
                'Unit Cost Decha' => 0,
                'Inventory Posting Group' => 'FG-06',
                'Full Description' => 'อวนเจริญ',
                'Item Search Description 1' => 'โฟมแผ่นสีดำ อวนเจริญ',
                'Item Search Description 2' => 'โฟมแผ่น',
                'Item Search Description 3' => 'โฟมแผ่นสีดำ'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_alls');
    }
};
