<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Aktivitas;
use App\Jabatan;
use App\Pegawai;
use App\Unit;
use PDF;
use Validator,File,Redirect,Response;
class SmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_smp = DB::table('aktivitas')
        ->join('unit', 'unit.id', '=', 'aktivitas.unit_id')
        ->join('pegawai', 'pegawai.id', '=', 'aktivitas.pegawai_id')
        ->select('aktivitas.*', 'pegawai.nama AS peg')
        ->where('aktivitas.jenis_anggaran', '=', 'Pengeluaran')
        ->where(function ($query) {
            $query->where('aktivitas.unit_id', '=', 2);
    })
        ->get();

    return view('smp.index', compact('ar_smp'));
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
    public function smpPDF()
    {
        $ar_smp = DB::table('aktivitas')
        ->join('unit', 'unit.id', '=', 'aktivitas.unit_id')
        ->join('pegawai', 'pegawai.id', '=', 'aktivitas.pegawai_id')
        ->select('aktivitas.*', 'pegawai.nama AS peg')
        ->where('aktivitas.jenis_anggaran', '=', 'Pengeluaran')
        ->where(function ($query) {
            $query->where('aktivitas.unit_id', '=', 2);
    })
        ->get();

        $pdf = PDF::loadView('smp.smpPDF', ['ar_smp'=>$ar_smp])
          ->setPaper('a4','portrait');
        return $pdf->download('data_smp.pdf');
    }
}
