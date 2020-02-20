<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;
use DB;
use Validator,File,Redirect,Response;
use PDF;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_pengurus = DB::table('pegawai')
        ->join('jabatan','jabatan.id','=','pegawai.jabatan_id')
        ->select('pegawai.*','jabatan.nama AS posisi')
        ->where('pegawai.jabatan_id', '=', 2)
        ->get();
        return view('pengurus.index', compact('ar_pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pengurus.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request->foto)){
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->hp.'.jpg';
            $request->foto->move(public_path('img'), $fileName);
        }else{
            $fileName = '';
        }
        //1. tangkap request form
        DB::table('pegawai')->insert(
            [
                'nama'=>$request->nama,
                'jabatan_id'=>$request->jabatan,
                'alamat'=>$request->alamat,
                'hp'=>$request->hp,
                'email'=>$request->email,
                //'foto'=>$request->foto,
                'foto'=>$fileName,
            ]
        );


        //landing page
        return redirect ('/pengurus');
        //return redirect('/pegawai/'.$idx.'/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_pengurus = DB::table('pegawai')
        ->join('jabatan', 'jabatan.id', '=', 'pegawai.jabatan_id')
            ->select('pegawai.*', 'jabatan.nama AS posisi')
            ->where('pegawai.id','=',$id)
            ->get();
        return view('pengurus.show', compact('ar_pengurus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('pegawai')->where('id',$id)->get();
        return view('pengurus/form_edit',compact('data'));
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
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->hp.'.jpg';
            $request->foto->move(public_path('img'), $fileName);
        }else{
            $fileName = $request->nip.'.jpg';
        }
        DB::table('pegawai')->where('id',$id)->update(
            [
                'nama'=>$request->nama,
                'jabatan_id'=>$request->jabatan,
                'alamat'=>$request->alamat,
                'hp'=>$request->hp,
                'email'=>$request->email,
                //'foto'=>$request->foto,
                'foto'=>$fileName,
            ]
        );
        //landing page ke detail pegawai / show.blade.php
        return redirect ('/pengurus'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //ambil isi kolom foto lalu hapus file fotonya
        //di folder img
        $foto = DB::table('pegawai')->select('foto')
        ->where('id','=',$id)->get();
foreach($foto as $f){
    $namaFile = $f->foto;
}
File::delete(public_path('img/'.$namaFile));
//hapus data
DB::table('pegawai')->where('id',$id)->delete();
//landing page ke hal pegawai / index.blade.php
return redirect ('/pengurus');
     }
    public function pengurusPDF()
    {
        $ar_pengurus = DB::table('pegawai')
        ->join('jabatan','jabatan.id','=','pegawai.jabatan_id')
        ->select('pegawai.*','jabatan.nama AS posisi')
        ->where('pegawai.jabatan_id', '=', 2)
        ->get();
        $pdf = PDF::loadView('pengurus.pengurusPDF', ['ar_pengurus'=>$ar_pengurus])
               ->setPaper('a4','landscape');
        return $pdf->download('data_pengurus.pdf');
    }

}
