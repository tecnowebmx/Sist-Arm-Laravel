<?php

namespace ARM;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name',
        'contact',
        'phone',
        'email',
        'address',
        'colonia',
        'municipio',
        'state',
        'zipcode',
        'solicitud_apertura_cuenta',
        'acta_constitutiva',
        'comprobante_domicilio',
        'copia_cedula_fiscal'

    ];

    public function getAddressCompleteAttribute(){
        return $this->address . ' ' . $this->colonia . ' ' . $this->municipio . ' ' . $this->estado . ' ' . $this->zipcode;
    }

    public static function filterAndPaginate($name, $contact){
        return Prospect::name($name)
            ->contact($contact)
            ->orderBy('id', 'DESC')
            ->where('type', 1)
            ->where('status', 1)
            ->paginate();
    }

    public function scopeName($query, $name){
        if(trim($name) != ""){
            $query->where("name", "Like", "%$name%");
        }
    }

    public function scopeContact($query, $contact){
        if(trim($contact) != ""){
            $query->where("contact", "Like", "%$contact%");
        }
    }

    public function file(){
        return $this->hasMany('ARM\File');
    }
}
