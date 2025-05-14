<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokumentasiKomunal extends Model
{
    public function jenis_dokumentasi()
    {
        return $this->belongsTo('App\JenisDokumentasi', 'dokumentasi_id');
    }

    public function ki_komunal()
    {
        return $this->belongsTo('App\KiKomunal', 'komunal_id');
    }
}