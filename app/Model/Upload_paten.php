<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Upload_paten extends Model
{
	protected $table = "upload_paten"; 
    protected $primaryKey = "id";

    public function paten()
    {
        return $this->belongsTo('App\Model\Paten', 'paten_id');
    }
}
