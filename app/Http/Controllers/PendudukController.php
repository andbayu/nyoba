<?php

namespace App\Http\Controllers;

use App\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::select('select * from penduduks');

        return view('admin.penduduk',['penduduks'=>$data]);
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
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $pdd = Penduduk::find($id);
        return view('admin.edit',compact('pdd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $pdd,$id)
    {
       $pdd = Penduduk::find($id);
       $pdd->nama   = request('nama');
       $pdd->nik    = request('nik');
       $pdd->alamat = request('alamat');
       $pdd->save();
       return redirect('penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // DB::table('penduduks')->delete($id);
        DB::delete('delete from penduduks where id = ?',[$id]);
        return redirect('penduduk');
    }
}
