<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Upload_merek extends Model
{
    protected $table = "upload_merek"; 
    protected $primaryKey = "id";

    public function merek()
    {
        return $this->belongsTo('App\Model\Merek', 'merek_id');
    }
}
