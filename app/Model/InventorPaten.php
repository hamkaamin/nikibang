<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InventorPaten extends Model
{
    protected $table = "inventor_paten"; 
    protected $primaryKey = "id";
    
    public function paten()
    {
        return $this->belongsTo('App\Model\Paten', 'paten_id');
    }
}
