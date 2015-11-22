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
}
