<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{ 
    protected $table = "tipe"; 
    protected $primaryKey = "id";

    public static function get_all(){
    	$data = Tipe::orderBy('id')->get();
    	return $data;
    }
}
