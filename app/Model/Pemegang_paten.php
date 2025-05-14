<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pemegang_paten extends Model
{
    //
    protected $table = "pemegang_paten"; 
    protected $primaryKey = "id";
    
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
