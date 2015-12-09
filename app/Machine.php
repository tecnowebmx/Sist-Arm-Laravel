<?php

namespace ARM;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'name',
        'daily_price',
        'weekly_price',
        'monthly_price',
        'brand',
        'model',
        'series',
        'year',
        'original_number',
        'horometro',
        'motor',
        'costo_adquisicion',
        'sale_price',
        'acquisition_cost',
        'availability'
    ];

    public static function filterAndPaginate($id, $name, $marca, $modelo, $serie, $año, $disponibilidad){
        return Machine::name($name)
            ->id($id)
            ->brand($marca)
            ->model($modelo)
            ->series($serie)
            ->year($año)
            ->availability($disponibilidad)
            ->orderBy('id', 'DESC')
            ->where('status', 1)
            ->paginate();
    }

    public function scopeId($query, $id){
        if(trim($id) != ""){
            $query->where("id", "Like", "%$id%");
        }
    }

    public function scopeName($query, $name){
        if(trim($name) != ""){
            $query->where("name", "Like", "%$name%");
        }
    }

    public function scopeBrand($query, $marca){
        if(trim($marca) != ""){
            $query->where("brand", "Like", "%$marca%");
        }
    }

    public function scopeModel($query, $modelo){
        if(trim($modelo) != ""){
            $query->where("model", "Like", "%$modelo%");
        }
    }

    public function scopeSeries($query, $serie){
        if(trim($serie) != ""){
            $query->where("series", "Like", "%$serie%");
        }
    }

    public function scopeYear($query, $año){
        if(trim($año) != ""){
            $query->where("year", "Like", "%$año%");
        }
    }

    public function scopeAvailability($query, $disponibilidad){
        if(trim($disponibilidad) != ""){
            $query->where("availability", "Like", "%$disponibilidad%");
        }
    }
}
