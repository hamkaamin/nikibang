<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class KiKomunal extends Model
{
    protected $table = "ki_komunals"; 
    protected $primaryKey = "id";

    public static function count_ki_komunals()
    {
        $ki_komunals = DB::table('ki_komunals')->count();
        return $ki_komunals;
    }

    public function jenis_barang()
    {
        return $this->belongsTo('App\JenisBarang', 'jenis_barang_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public static function count_ki_komunals_tidak_biaya()
    {
        $ki_komunals_tidak_biaya = DB::table('ki_komunals')->where('is_verif','=',0)->count();
        return $ki_komunals_tidak_biaya;
    }
    public static function count_ki_komunals_sudah_biaya()
    {
        $ki_komunals_sudah_biaya = DB::table('ki_komunals')->where('is_verif','=',1)->count();
        return $ki_komunals_sudah_biaya;
    }
    public static function count_ki_komunals_belum_biaya()
    {
        $ki_komunals_belum_biaya = DB::table('ki_komunals')->whereNULL('is_verif')->count();
        return $ki_komunals_belum_biaya;
    }
}