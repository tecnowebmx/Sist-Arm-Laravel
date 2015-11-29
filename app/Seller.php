<?php

namespace ARM;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'name', 'last_name', 'key', 'phone', 'fecha_ingreso', 'email'
    ];

    public function getFullNameAttribute(){
        return $this->name . ' ' . $this->last_name;
    }

    public static function filterAndPaginate($name, $last_name, $key){
        return Seller::name($name)
            ->lastName($last_name)
            ->key($key)
            ->orderBy('id', 'DESC')
            ->where('status', 1)
            ->paginate();
    }

    public function scopeName($query, $name){
        if(trim($name) != ""){
            $query->where("name", "Like", "%$name%");
        }
    }

    public function scopeLastName($query, $last_name){
        if(trim($last_name) != ""){
            $query->where("last_name", "Like", "%$last_name%");
        }
    }

    public function scopeKey($query, $key){
        if(trim($key) != ""){
            $query->where("key", "like", "%$key%");
        }
    }
}
