<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PrioritasPatenData extends Model
{
    protected $table = "data_prioritas_paten"; 
    protected $primaryKey = "id";
 
    public function paten()
    {
        return $this->belongsTo('App\Model\Paten', 'paten_id');
    }
}
