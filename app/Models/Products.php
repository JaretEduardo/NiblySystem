<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Product_ID',
        'Product_Name',
        'Weight_or_Volume',
        'LOT_Number',
        'Expiry_Date',
        'Quantity'
    ];
}
