<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Aktivitas;
use App\Jabatan;
use App\Pegawai;
use App\Unit;

use Validator,File,Redirect,Response;
use PDF;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_pemasukan = DB::table('aktivitas')
        ->join('unit', 'unit.id', '=', 'aktivitas.unit_id')
        ->join('pegawai', 'pegawai.id', '=', 'aktivitas.pegawai_id')
        ->select('aktivitas.*', 'pegawai.nama AS peg')
        ->where('aktivitas.jenis_anggaran', '=', 'Pemasukan')
        ->get();
    return view('pemasukan.index', compact('ar_pemasukan'));
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

    public function pemasukanPDF()
    {
        $ar_pemasukan = DB::table('aktivitas')
            ->join('unit', 'unit.id', '=', 'aktivitas.unit_id')
            ->join('pegawai', 'pegawai.id', '=', 'aktivitas.pegawai_id')
            ->select('aktivitas.*', 'pegawai.nama AS peg', 'unit.nama AS unt')
            ->where('aktivitas.jenis_anggaran', '=', 'Pemasukan')
            ->get();

        $pdf = PDF::loadView('pemasukan.pemasukanPDF', ['ar_pemasukan'=>$ar_pemasukan])
                ->setPaper('A4','portrait');
        return $pdf->download('data_pemasukan.pdf');
    }
}
