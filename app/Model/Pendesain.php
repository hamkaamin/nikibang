<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pendesain extends Model
{ 
    protected $table = "pendesain"; 
    protected $primaryKey = "id";
    
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
