<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Paten extends Model
{ 
    protected $table = "paten"; 
    protected $primaryKey = "id";
    
    public function master_status()
    {
        return $this->belongsTo('App\Model\Status', 'status', 'kode');
    }
    
    public function prioritas()
    {
        return $this->hasMany('App\Model\Prioritas_paten', 'paten_id', 'id');
    }
    
    public function ipc()
    {
        return $this->hasMany('App\Model\Ipc', 'paten_id', 'id');
    }
    
    public function pemegang_paten()
    {
        return $this->hasMany('App\Model\Pemegang_paten', 'paten_id', 'id');
    }
    
    public function inventor()
    {
        return $this->hasMany('App\Model\Inventor', 'paten_id', 'id');
    }
    public function data_inventor()
    {
        return $this->hasMany('App\Model\DataInventor', 'paten_id', 'id');
    }
    public function data_koresponden()
    {
        return $this->hasMany('App\Model\DataKoresponden', 'paten_id', 'id');
    }
    public function data_pemohon()
    {
        return $this->hasMany('App\Model\DataPemohon', 'paten_id', 'id');
    }
    public function data_prioritas()
    {
        return $this->hasMany('App\Model\DataPrioritasPaten', 'paten_id', 'id');
    }
    
    public function konsultan()
    {
        return $this->hasMany('App\Model\Konsultan_paten', 'paten_id', 'id');
    }

    public function upload_paten()
    {
        return $this->hasMany('App\Model\Upload_paten', 'paten_id', 'id');
    }

    public static function count_paten()
    {
        $paten = DB::table('paten')->count();
        return $paten;
    }
    public static function count_paten_tidak_biaya()
    {
        $paten_tidak_biaya = DB::table('paten')->where('is_biaya','=',0)->count();
        return $paten_tidak_biaya;
    }
    public static function count_paten_sudah_biaya()
    {
        $paten_sudah_biaya = DB::table('paten')->where('is_biaya','=',1)->count();
        return $paten_sudah_biaya;
    }
    public static function count_paten_belum_biaya()
    {
        $paten_belum_biaya = DB::table('paten')->whereNULL('is_biaya')->count();
        return $paten_belum_biaya;
    }
}
