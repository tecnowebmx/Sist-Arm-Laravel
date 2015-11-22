<?php

namespace ARM;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'contacto_isi',
        'name',
        'contact',
        'type',
        'phone',
        'email',
        'address',
        'colonia',
        'municipio',
        'state',
        'zipcode'
    ];

    public function getFullNameAttribute(){
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAddressCompleteAttribute(){
        return $this->address . ' ' . $this->colonia . ' ' . $this->municipio . ' ' . $this->estado . ' ' . $this->zipcode;
    }

    public static function filterAndPaginate($name, $contact){
        return Prospect::name($name)
            ->contact($contact)
            ->orderBy('id', 'DESC')
            ->where('type', 0)
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
}
