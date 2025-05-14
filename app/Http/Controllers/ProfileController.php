<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Model\Indeks;
use App\Model\Satuan_jumlah;
use App\Model\Arsip_kondisi;
use App\Model\Arsip_lokasi;
use App\Model\Arsip_kategori;
use App\Model\Arsip_pemilik;
use App\Model\Data_arsip_inactive; 
use App\Model\Media;
use App\Model\Sliders;
use App\User;
use DB;

class ProfileController extends Controller
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

    public function my_profile()
    { 
        if(Auth::user()->role_id !=1){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.myprofile.my-profile');
        } 
    }

    public function ganti_username_email_admin($id, Request $request)
    {     
        $user = User::find($id);
        $user->username = $request->get('username'); 
        $user->email = $request->get('email'); 
        $user->save(); 
        return redirect('admin/myprofile');  
    }

    public function tambah_modal_master_user()
    {
        return view('public_admin.master_user.modal_tambah');
    }

    public function simpan_master_user(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'username' => 'unique:users,username',
            'email' => 'unique:users,email' 
        ], [
            'username.unique' => 'Username already exists.',
            'email.unique' => 'E-Mail already exists.'
        ]);
        if($request->password == $request->re_password){ 
            if ($validator->fails()) {
                $msg = "";
                foreach ($validator->messages()->all() as $message) {
                    $msg .= $message . ".
                    ";
                }
                session()->put('statusT', $msg); 
                return redirect()->back(); 
            } else { 
                $data_user = new User();
                $data_user->name = $request->get('nama'); 
                $data_user->tempat_lahir = $request->get('tempat_lahir');
                $data_user->no_telp = $request->get('no_telp');
                $data_user->alamat = $request->get('alamat');
                $data_user->tanggal_lahir = $request->get('tanggal_lahir');
                $data_user->email = $request->get('email');
                $data_user->username = $request->get('username');
                $data_user->password = Hash::make($request->password);
                $data_user->role_id = $request->get('role_id');
                $data_user->save();
                session()->put('status', 'User baru berhasil ditambahkan!');  
                return redirect('/admin/master_user');
            }
        }else{
            session()->put('statusT', 'Password Harus Sama'); 
            return redirect('/admin/master_user');
        }
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

    public function ganti_password_admin($id, Request $request)
    {    
        $user = User::find($id); 
        if(Hash::make($request->old_passwowrd) == $request->get('old_password_h')){
                session()->put('statusT', 'Password Sama Ulangi Lagi');
        }else{
            $user->password = bcrypt($request->get('new_password'));  
            $user->save(); 
            session()->put('status', 'Password Berhasil Diubah');
            return redirect('admin/myprofile'); 
        }  
      
         
    }

    public function master_user(Request $request)
    {
        $data_user = User::all(); 
        $data_slider = Sliders::all();
        if(Auth::user()->role_id !=1){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.master_user.master_user',compact('data_user'));
        }
    }

    public function detail_user(Request $request)
    {
        $id = $request->id;
        $data_user= User::find($id); 
        return view('public_admin.master_user.detail_user',compact('data_user'));
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
        $kelas = User::find($id);
        $kelas->delete();
        return redirect('/admin/master_user');
    }
}
