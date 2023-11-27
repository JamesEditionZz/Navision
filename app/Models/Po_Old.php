<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Po extends Model
{
    protected $table = 'Po';
    
    protected $fillable = [
        'Item No',
        'Global Dimension 2 Code',
        'Full Description',
        'Unit of Measure Code',
        'Quantity',
        'Cost Amount (Actual)'
    ];
}
