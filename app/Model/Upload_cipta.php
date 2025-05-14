<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Upload_cipta extends Model
{
	protected $table = "upload_cipta"; 
    protected $primaryKey = "id";

    public function cipta()
    {
        return $this->belongsTo('App\Model\Cipta', 'cipta_id');
    }
}
