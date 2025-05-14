<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Model\Tentang_kami; 
use DB; 
use Auth;

class TentangKamiController extends Controller
{
	public function index()
    { 
    	$tentang_kami = DB::table('tentang_kami')->where('id', 1)->first(); 
        if(Auth::user()->role_id !=1){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.tentang_kami.tentang_kami',compact('tentang_kami'));
        }
    }

    public function simpan_tentang_kami(Request $request)
    {
    	$tentang_kami= Tentang_kami::find($request->id);
    	$tentang_kami->deskripsi = $request->get('deskripsi');
        session()->put('status', 'Data berhasil Diubah!');  
    	$tentang_kami->save();
        return redirect('/admin/tentang_kami');
    }
}
