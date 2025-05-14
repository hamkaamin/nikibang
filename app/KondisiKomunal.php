<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiKomunal extends Model
{
    //
    public function kondisi()
    {
        return $this->belongsTo('App\Kondisi', 'kondisi_id');
    }

    public function ki_komunal()
    {
        return $this->belongsTo('App\KiKomunal', 'komunal_id');
    }
}