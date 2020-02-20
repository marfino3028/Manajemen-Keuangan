<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Jabatan;
use DB;
use Validator,File,Redirect,Response;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_profile = DB::table('users')
        ->select('users.*')
        ->where('users.id','=',$id)
        ->get();

        return view('profile.show', compact('ar_profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =DB::table('users')->where('id',$id)->get();
        return view('profile/form_edit', compact('data'));
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
        if(!empty($request->foto)){
        //prosesganti foto lama dng baru
        $request->validate([
            'foto' =>'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->id.'.jpg';
            $request->foto->move(public_path('img'),$fileName);
        }else{
            $fileName = $request->id.'.jpg';
        }
        DB::table('users')->where('id',$id)->update(
            [
                'name'=>$request->nama,
                'jabatan'=>$request->jabatan,
                'foto'=>$fileName,
                'email'=>$request->email,
                //'password'=>$request->password,
            ]
            );
        //landing page ke detail profile / show.blade.php
        return redirect ('/settings'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     }

}
