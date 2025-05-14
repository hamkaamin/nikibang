<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Konsultan_cipta extends Model
{ 
    protected $table = "konsultan_cipta"; 
    protected $primaryKey = "id";
    
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
