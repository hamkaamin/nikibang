<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataKoresponden extends Model
{
    protected $table = "data_koresponden"; 
    protected $primaryKey = "id";

    public function paten()
    {
        return $this->belongsTo('App\Model\Paten', 'paten_id');
    }
    
}
