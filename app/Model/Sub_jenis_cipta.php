<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sub_jenis_cipta extends Model
{ 
    protected $table = "sub_jenis_ciptaan_cipta"; 
    protected $primaryKey = "id"; 

    public function jenis_ciptaan()
    {
        return $this->belongsTo('App\Model\Jenis_ciptaan_cipta', 'jenis_ciptaan_id');
    }
}
