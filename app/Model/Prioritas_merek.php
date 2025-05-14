<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prioritas_merek extends Model
{ 
    protected $table = "prioritas_merek"; 
    protected $primaryKey = "id";

    public function merek()
    {
        return $this->belongsTo('App\Model\Merek', 'merek_id');
    }
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'countries_id');
    }
}
