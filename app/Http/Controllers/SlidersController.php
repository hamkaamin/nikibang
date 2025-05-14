<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Sliders;
use Illuminate\Support\Facades\Validator;
use File;
use Auth;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data_sliders=Sliders::all();
        if(Auth::user()->role_id !=1){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.sliders.sliders',compact('data_sliders'));
        }
    }

    public function modal_ubah_sliders(Request $request)
    { 
        $id = $request->id;
        $data_sliders = Sliders::find($id);   
        return view('public_admin.sliders.modal_ubah_sliders',compact('data_sliders'));
    }

    public function simpan_sliders_ubah(Request $request,$id)
    {
        $image = $request->file('path_file');
        $validation = Validator::make($request->all(), [
            'path_file' => 'required|mimes:jpeg,png,jpg|max:5000'
        ]);

        if ($validation->passes()) { 
            $sliders = Sliders::find($id); 
            $sliders->judul = $request->get('judul');  
            if(File::exists($sliders->path_file)) {
                File::delete($sliders->path_file);
            }
            $new_name = 'sliders_'.$id.'_' . $image->getClientOriginalName();
            $image->move(('assets/slider'), $new_name);  
            $sliders->path_file =  $new_name;  
            $sliders->save();
        }
        else{
            $sliders = Sliders::find($id); 
            $sliders->judul = $request->get('judul');  
            $sliders->save();
        }
        session()->put('status', 'Data berhasil Diubah!');  
        return redirect('/admin/sliders');
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
