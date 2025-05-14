<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PemegangHakcipta extends Model
{ 
    protected $table = "pemegang_hakcipta"; 
    protected $primaryKey = "id";

    public function cipta()
    {
        return $this->belongsTo('App\Model\Hak_cipta', 'cipta_id');
    }
}
