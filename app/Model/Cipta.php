<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cipta extends Model
{ 
    protected $table = "hak_cipta"; 
    protected $primaryKey = "id";
    
    public function master_status()
    {
        return $this->belongsTo('App\Model\Status', 'status', 'kode');
    }

    public function jenis_ciptaan()
    {
        return $this->hasMany('App\Model\Jenis_ciptaan', 'cipta_id', 'id');
    }

    public function pemegang()
    {
        return $this->hasMany('App\Model\Pemegang_cipta', 'cipta_id', 'id');
    }

    public function pencipta()
    {
        return $this->hasMany('App\Model\Pencipta', 'cipta_id', 'id');
    }

    public function konsultan()
    {
        return $this->hasMany('App\Model\Konsultan_cipta', 'cipta_id', 'id');
    }
    public function data_kuasa()
    {
        return $this->hasMany('App\Model\Data_kuasa', 'cipta_id');
    }
    public function pencipta_cipta()
    {
        return $this->hasMany('App\Model\Pencipta_cipta', 'cipta_id', 'id');
    }
    public function pemegang_hak_cipta()
    {
        return $this->hasMany('App\Model\PemegangHakcipta', 'cipta_id', 'id');
    }

    public function upload_cipta()
    {
        return $this->hasMany('App\Model\Upload_cipta', 'cipta_id', 'id');
    } 

    public function jenis_ciptaan_cipta()
    {
        return $this->belongsTo('App\Model\Jenis_ciptaan_cipta', 'jenis_ciptaan_id');
    }
    public function countries()
    {
        return $this->belongsTo('App\Model\Countries', 'country_id');
    }

    public static function count_cipta()
    {
        $cipta = DB::table('hak_cipta')->count();
        return $cipta;
    }

    public static function count_cipta_tidak_biaya()
    {
        $cipta_tidak_biaya = DB::table('hak_cipta')->where('is_biaya','=',0)->count();
        return $cipta_tidak_biaya;
    }
    public static function count_cipta_sudah_biaya()
    {
        $cipta_sudah_biaya = DB::table('hak_cipta')->where('is_biaya','=',1)->count();
        return $cipta_sudah_biaya;
    }
    public static function count_cipta_belum_biaya()
    {
        $cipta_belum_biaya = DB::table('hak_cipta')->whereNULL('is_biaya')->count();
        return $cipta_belum_biaya;
    }
}
