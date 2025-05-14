<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Data_kuasa extends Model
{ 
    protected $table = "data_kuasa"; 
    protected $primaryKey = "id";

    public function provinsi()
    {
        return $this->belongsTo('App\Model\Provinsi', 'provinsi_id');
    }
    public function cipta()
    {
        return $this->belongsTo('App\Model\Cipta', 'cipta_id');
    }
}
