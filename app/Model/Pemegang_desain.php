<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pemegang_desain extends Model
{
    //
    protected $table = "pemegang_desain"; 
    protected $primaryKey = "id";
    
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
