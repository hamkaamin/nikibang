<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Merek extends Model
{ 
    protected $table = "merek"; 
    protected $primaryKey = "id";
    
    public function master_status()
    {
        return $this->belongsTo('App\Model\Status', 'status', 'kode');
    }
    
    public function prioritas()
    {
        return $this->hasMany('App\Model\Prioritas_merek', 'merek_id', 'id');
    }

    public function kelas()
    {
        return $this->hasMany('App\Model\Kelas', 'merek_id', 'id');
    }

    public function pemilik()
    {
        return $this->hasMany('App\Model\Pemilik', 'merek_id', 'id');
    }

    public function konsultan()
    {
        return $this->hasMany('App\Model\Konsultan_merek', 'merek_id', 'id');
    }

    public function upload_merek()
    {
        return $this->hasMany('App\Model\Upload_merek', 'merek_id', 'id');
    }

    public static function count_merek()
    {
        $merek = DB::table('merek')->count();
        return $merek;
    }
}
