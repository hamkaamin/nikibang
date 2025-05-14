<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Konsultan_merek extends Model
{ 
    protected $table = "konsultan_merek"; 
    protected $primaryKey = "id";
    
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
