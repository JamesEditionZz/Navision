<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returncus extends Model
{
    protected $table = 'Returncus';
    
    protected $fillable = [
        'Item No',
        'Global Dimension 2 Code',
        'Full Description',
        'Unit of Measure Code',
        'Quantity',
        'Sales Amount (Actual)'
    ];
}
