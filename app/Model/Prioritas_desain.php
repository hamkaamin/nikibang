<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prioritas_desain extends Model
{ 
    protected $table = "prioritas_desain"; 
    protected $primaryKey = "id";
    
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
