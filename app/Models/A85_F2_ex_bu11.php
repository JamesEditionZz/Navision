<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class A85_F2_ex_bu11 extends Model
{
    protected $table = 'A85_F2_ex_bu11'; // Name of the table in the database

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
