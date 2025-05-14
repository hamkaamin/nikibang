<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pencipta extends Model
{
    //
    protected $table = "pencipta"; 
    protected $primaryKey = "id";
    
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
