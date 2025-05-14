<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jenis_ciptaan_cipta extends Model
{ 
    protected $table = "jenis_ciptaan_cipta"; 
    protected $primaryKey = "id";
 
    public function cipta()
    {
        return $this->hasMany('App\Model\Cipta', 'jenis_ciptaan_cipta_id', 'id');
    }
    public function sub_jenis_ciptaan_cipta()
    {
        return $this->hasMany('App\Model\Sub_jenis_cipta', 'jenis_ciptaan_id', 'id');
    }

}
