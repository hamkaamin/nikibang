<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = "countries"; 
    protected $primaryKey = "id";

    public function pemegang_cipta()
    {
        return $this->hasMany('App\Model\Pemegang_cipta', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function pemegang_paten()
    {
        return $this->hasMany('App\Model\Pemegang_paten', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function pemegang_desain()
    {
        return $this->hasMany('App\Model\Pemegang_desain', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function pencipta()
    {
        return $this->hasMany('App\Model\Pencipta', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function konsultan_paten()
    {
        return $this->hasMany('App\Model\Konsultan_paten', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function konsultan_desain()
    {
        return $this->hasMany('App\Model\Konsultan_desain', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function konsultan_cipta()
    {
        return $this->hasMany('App\Model\Konsultan_cipta', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function pendesain()
    {
        return $this->hasMany('App\Model\Pendesain', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function pemilik()
    {
        return $this->hasMany('App\Model\Pemilik', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function prioritas_paten()
    {
        return $this->hasMany('App\Model\Prioritas_paten', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
    public function data_pemohon()
    {
        return $this->hasMany('App\Model\DataPemohon', 'countries_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
    public function cipta()
    {
        return $this->hasMany('App\Model\Cipta', 'country_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

}
