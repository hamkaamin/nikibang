<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inventor extends Model
{ 
    protected $table = "inventor"; 
    protected $primaryKey = "id";
    
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
