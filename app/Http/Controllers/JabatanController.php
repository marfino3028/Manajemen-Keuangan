<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use DB;
use App\jabatan;
use Validator,File,Redirect,Response;
use PDF;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$ar_jabatan = Jabatan::orderBy('id')->get();
        $ar_jabatan = DB::table('jabatan')->get();
        //"SELECT * FROM kategori
        return view('jabatan.index', compact('ar_jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jabatan.form');
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
        DB::table('jabatan')->insert(
            [
                'nama'=>$request->nama,
            ]
        );
        //landing page
        return redirect('/jabatan');
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
        $ar_jabatan = DB::table('jabatan')
        ->select('jabatan.*')
        ->where('jabatan.id','=',$id)
        ->get();

        return view('jabatan.show', compact('ar_jabatan'));
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
        $data = Jabatan::where('id',$id)->get();
        return view('jabatan/form_edit',compact('data'));
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
        DB::table('jabatan')->where('id',$id)->update(
            [
                'nama'=>$request->nama,
            ]
        );
        //landing page
        return redirect('/jabatan'.'/'.$id);
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
        DB::table('jabatan')->where('id',$id)->delete();
        //landing page ke hal jabatan / index.blade.php
        return redirect('/jabatan');
    }

}
