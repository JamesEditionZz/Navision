<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DCP extends Model
{
    protected $table = 'DCP'; // Name of the table in the database

    protected $fillable = [
        'Item&Branch',
        'Item No',
        'Global Dimension 2 Code',
        'Full Description',
        'Unit of Measure Code',
        'Quantity',
        'Cost Amount (Actual)',
        'Sales Amount (Actual)'
    ];
}
