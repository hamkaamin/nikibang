<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Indeks;
use App\Model\Satuan_jumlah;
use App\Model\Arsip_kondisi;
use App\Model\Arsip_lokasi;
use App\Model\Arsip_kategori;
use App\Model\Arsip_pemilik;
use App\Model\Data_arsip_inactive; 
use App\Model\Media;
use App\User;
use DB;

class GrafikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    public function grafik_paten()
    { 
        $today = date('m'); 
        $year_day = date('Y');  
        $grafik = DB::select("  
        SELECT SUM(hits) as jumlah, EXTRACT(MONTH From visit_date) AS bulan FROM visitors
        GROUP BY bulan
            "); 
        return view('public_admin.grafik.div_grafik_paten',compact('grafik'));
    }

    public function grafik_cipta()
    { 
        $today = date('m'); 
        $year_day = date('Y'); 
        $grafik = DB::select("  
            SELECT SUM(id) as jumlah,tanggal_permohonan AS tanggal
            FROM hak_cipta
            GROUP BY tanggal   
            HAVING EXTRACT(MONTH FROM tanggal ) = $today
            AND EXTRACT(YEAR FROM tanggal)= $year_day
            order by tanggal asc
            "); 
        return view('public_admin.grafik.div_grafik_cipta',compact('grafik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}