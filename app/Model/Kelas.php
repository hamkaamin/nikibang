<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{ 
    protected $table = "kelas"; 
    protected $primaryKey = "id";
    
    public function merek()
    {
        return $this->belongsTo('App\Model\Merek', 'merek_id');
    }
}
