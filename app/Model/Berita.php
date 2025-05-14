<?php

namespace App\Model;
use DB;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{ 
    protected $table = "berita"; 
    protected $primaryKey = "id";

    public static function get_page_berita($num_per_page,$start_from)
    {
        $berita="
        SELECT * from berita "; 
        $data_berita = DB::select($berita);

        return $data_berita;
    }
    
    public static function count_page($num_per_page)
    {
        $count_page = Berita::select(DB::raw('COUNT(berita.id) as jumlah'))->first(); 
        $jumlah = $count_page->jumlah;
        $total_page = ceil($jumlah/$num_per_page);
        return $total_page;
    }
}