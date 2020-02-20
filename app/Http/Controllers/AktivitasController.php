<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\Aktivitas;
use App\Jabatan;
use App\Pegawai;
use App\Pengurus;
//panggil pustaka/library/vendor
use DB;
use Validator,File,Redirect,Response;
use PDF;

class AktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $ar_aktivitas = DB::table('aktivitas')
         ->join('unit', 'unit.id', '=', 'aktivitas.unit_id')
         ->join('pegawai', 'pegawai.id', '=', 'aktivitas.pegawai_id')
         ->select('aktivitas.*', 'unit.nama AS unt', 'pegawai.nama AS peg')
         ->get();

        return view('aktivitas.index', compact('ar_aktivitas'));
    }

    public function create()
    {
         //arahkan ke form input data baru
         return view('aktivitas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
    //validasi data
    $validator = Validator::make(request()->all(),[

        'pegawai'=>'required',
        'nama'=>'required',
        'ja'=>'required',
        'jumlah'=>'required',
        'tanggal'=>'required',
        'keterangan'=>'image|mimes:jpg,jpeg,png,gif|max:2048',
        'unit'=>'required',

     ],[
         'pegawai.required'=>'Pegawai Wajib untuk diisi',
         'nama.required'=>'Nama Jenis Anggaran Wajib untuk diisi',
         'ja.required'=>'Jenis Anggaran Wajib untuk dipilih',
         'jumlah.required'=>'Jumlah Anggaran Wajib untuk dipilih',
         'tanggal.required'=>'Tanggal Wajib untuk diisi',
         'keterangan.image'=>'Ektensi File Foto Keterangan Hanya Boleh .jpg, .png, .gif',
         'keterangan.max' =>'File Foto Melebihi 2048 KB',
         'unit.required'=>'Unit Wajib untuk dipilih',
     ])->validate();

    //2. proses upload,dicek pas input ada upload file/tidak

        if(!empty($request->keterangan)){

            $request->validate([
                'keterangan' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            $fileName = $request->nama.'.jpg';
            $request->keterangan->move(public_path('img/bukti'), $fileName);
            }else{
            $fileName = '';
            }

    //1. tangkap request form
    DB::table('aktivitas')->insert(
        [
            'pegawai_id'=>$request->pegawai,
            'nama_jenis_anggaran'=>$request->nama,
            'jenis_anggaran'=>$request->ja,
            'jumlah_anggaran'=>$request->jumlah,
            'tgl_aktivitas'=>$request->tanggal,
            'keterangan'=>$fileName,
            'unit_id'=>$request->unit
        ]
    );


    //landing page
    return redirect ('/activity');
    }

    public function show($id)
    {
        $ar_aktivitas = DB::table('aktivitas')
           ->join('unit', 'unit.id', '=', 'aktivitas.unit_id')
           ->join('pegawai', 'pegawai.id', '=', 'aktivitas.pegawai_id')
           ->select('aktivitas.*', 'unit.nama AS unt', 'pegawai.nama AS peg')
           ->where('aktivitas.id','=',$id)
           ->get();

       return view('aktivitas.show', compact('ar_aktivitas'));
   }

    public function edit($id)
    {
        //tampilkan form untuk menampilkan
        //data lama yg mau diedit sebanyak 1 baris data
        $data = DB::table('aktivitas')->where('id',$id)->get();
        return view('aktivitas.form_edit',compact('data'));
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
        //2. validasi data
        $validator = Validator::make(request()->all(),[

            'pegawai'=>'required',
            'nama'=>'required',
            'ja'=>'required',
            'jumlah'=>'required',
            'tanggal'=>'required',
            'keterangan'=>'image|mimes:jpg,jpeg,png,gif|max:2048',
            'unit'=>'required',

        ],[
            'pegawai.required'=>'Pegawai Wajib untuk diisi',
            'nama.required'=>'Nama Jenis Anggaran Wajib untuk diisi',
            'ja.required'=>'Jenis Anggaran Wajib untuk dipilih',
            'jumlah.required'=>'Jumlah Anggaran Wajib untuk dipilih',
            'tanggal.required'=>'Tanggal Wajib untuk diisi',
            'unit.required'=>'Unit Wajib untuk dipilih',
        ])->validate();

        if(!empty($request->keterangan)){

            $request->validate([
                'keterangan' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            $fileName = $request->nama.'.jpg';
            $request->keterangan->move(public_path('img/bukti'), $fileName);
            }else{
            $fileName = '';
            }

        //1.proses ubah data
        DB::table('aktivitas')->where('id',$id)->update(
            [
                'pegawai_id'=>$request->pegawai,
                'nama_jenis_anggaran'=>$request->nama,
                'jenis_anggaran'=>$request->ja,
                'jumlah_anggaran'=>$request->jumlah,
                'tgl_aktivitas'=>$request->tanggal,
                'keterangan'=>$fileName,
                'unit_id'=>$request->unit
            ]
        );
        //landing page ke detail pemasukan
        return redirect ('/activity'.'/'.$id);

    }
    public function destroy($id)
    {
        //2. ambil isi kolom foto lalu hapus file fotonya
        //di folder img
        $keterangan = DB::table('aktivitas')->select('keterangan')->where('id','=',$id)->get();
        foreach($keterangan as $ket){
            $namaFile = $ket->keterangan;
        }
        File::delete(public_path('img/bukti/'.$namaFile));

       //1. hapus data
       DB::table('aktivitas')->where('id',$id)->delete();

       //landing page ke hal pegawai / index.blade.php
       return redirect('/activity');
    }
    public function aktivitasPDF()
    {
        $ar_aktivitas = DB::table('aktivitas')
         ->join('unit', 'unit.id', '=', 'aktivitas.unit_id')
         ->join('pegawai', 'pegawai.id', '=', 'aktivitas.pegawai_id')
         ->select('aktivitas.*', 'unit.nama AS unt', 'pegawai.nama AS peg')
         ->get();
        $pdf = PDF::loadView('aktivitas.aktivitasPDF', ['ar_aktivitas'=>$ar_aktivitas])
               ->setPaper('a4','portrait');
        return $pdf->download('data_aktivitas.pdf');
    }

}
