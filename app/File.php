<?php

namespace ARM;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    public function customer(){
        return $this->belongsTo('ARM\Customer');
    }
}
