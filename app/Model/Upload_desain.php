<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Upload_desain extends Model
{
	protected $table = "upload_desain"; 
    protected $primaryKey = "id";

    public function desain()
    {
        return $this->belongsTo('App\Model\Desain', 'desain_id');
    }
}
