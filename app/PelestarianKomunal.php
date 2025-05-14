<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelestarianKomunal extends Model
{
    //
    public function upaya_pelestarian()
    {
        return $this->belongsTo('App\UpayaPelestarian', 'pelestarian_id');
    }

    public function ki_komunal()
    {
        return $this->belongsTo('App\KiKomunal', 'komunal_id');
    }
}