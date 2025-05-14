<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pencipta_cipta extends Model
{ 
    protected $table = "pencipta_cipta"; 
    protected $primaryKey = "id";

    public function cipta()
    {
        return $this->belongsTo('App\Model\Hak_cipta', 'cipta_id');
    }
}
