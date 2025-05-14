<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{ 
    protected $table = "pemilik"; 
    protected $primaryKey = "id";
    
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
    
    public function merek()
    {
        return $this->belongsTo('App\Model\Merek', 'merek_id');
    }
}
