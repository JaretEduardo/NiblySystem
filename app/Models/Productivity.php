<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productivity extends Model
{
     use HasFactory, SoftDeletes;
         protected $table = 'productivity';

    protected $fillable = [
        'Drawer_ID',
        'Flight_Type',
        'Drawer_Category',
        'Total_Items',
        'Unique_Item_Types',
        'Item_List'
    ];
}
