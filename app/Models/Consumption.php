<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consumption extends Model
{

    use HasFactory, SoftDeletes;
    protected $table = 'flight_consumptions';
    protected $fillable = [
        'flight_id',
        'origin',
        'date',
        'flight_type',
        'service_type',
        'passenger_count',
        'product_id',
        'product_name',
        'standard_specification_qty',
        'quantity_returned',
        'quantity_consumed',
        'unit_cost',
        'crew_feedback'
    ];}
