<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Desain extends Model
{ 
    protected $table = "desain_industri"; 
    protected $primaryKey = "id";
    
    public function master_status()
    {
        return $this->belongsTo('App\Model\Status', 'status', 'kode');
    }
    
    public function prioritas()
    {
        return $this->hasMany('App\Model\Prioritas_desain', 'desain_id', 'id');
    }

    public function pemegang()
    {
        return $this->hasMany('App\Model\Pemegang_desain', 'desain_id', 'id');
    }

    public function pendesain()
    {
        return $this->hasMany('App\Model\Pendesain', 'desain_id', 'id');
    }

    public function kelas_locarno()
    {
        return $this->hasMany('App\Model\Kelas_locarno', 'desain_id', 'id');
    }

    public function konsultan()
    {
        return $this->hasMany('App\Model\Konsultan_desain', 'desain_id', 'id');
    }

    public function upload_desain()
    {
        return $this->hasMany('App\Model\Upload_desain', 'desain_id', 'id');
    }
    public static function count_desain()
    {
        $desain = DB::table('desain_industri')->count();
        return $desain;
    }
}
