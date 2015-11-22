<?php

namespace ARM;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'name', 'daily_price', 'weekly_price', 'monthly_price', 'brand', 'model', 'series', 'year', 'original_number',
        'horometro', 'motor', 'costo_adquisicion', 'sale_price', 'acquisition_cost'
    ];
}
