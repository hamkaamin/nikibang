<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Model\Paten;
use App\Model\Merek;
use App\Model\Cipta;
use App\Model\Desain;
use App\User;
use App\Model\Sliders;
use App\Model\Visitor;
use DB;
use Auth;
use Sentry;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(Request $request)
    {
        if ($request->has('period')) {
            $period = $request->period;
        } else {
            $period = null;
        } 
        return view('public_admin.home',compact('period'));
    }
    public function index(Request $request)
    { 
        // $data_inaktif = Data_arsip_inactive::count_media();
        $id =  Auth::id();
        $data_sliders = Sliders::all();
        $users = DB::table('users')->where('id', '=', $id)->first();
        if($users->role_id == 1 || $users->role_id == 3){   
            $total_paten = Paten::count_paten();
            $total_merek = Merek::count_merek();
            $total_cipta = Cipta::count_cipta();
            $total_desain = Desain::count_desain(); 
            return view('public_admin.home',compact('total_paten','total_merek','total_cipta','total_desain'));
        }else{
           return view('landing_page.berandapage',compact('data_sliders')); 
        }
    }
}