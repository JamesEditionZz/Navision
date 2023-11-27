<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class A87_F2_tw_bu07 extends Model
{
    protected $table = 'A87_F2_tw_bu07'; // Name of the table in the database

    protected $fillable = [
        'A',
        'Location',
        'Item No',
        'Global Dimension 2 Code',
        'Full Description',
        'Unit of Measure Code',
        'Quantity',
        'Cost Amount (Actual)'
    ];
}
