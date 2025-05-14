<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prioritas_paten extends Model
{ 
    protected $table = "prioritas_paten"; 
    protected $primaryKey = "id";
 
    public function paten()
    {
        return $this->belongsTo('App\Model\Paten', 'paten_id');
    }
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
