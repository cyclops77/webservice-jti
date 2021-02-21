<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->call = new v1\ResponseController;
    }
    public function index()
    {
        $data = Pengguna::All();
        return $this->call->arrays('ok','success',$data,200);     
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|unique:pengguna',
            'usia' => 'required',
            'kota' => 'required',
        ]);
        $usia = str_replace([
            "th","TAHUN","THN","tahun","TH","Th","tH"],["","","","","","",""],$request->usia);
        Pengguna::create([
            'nama' => $request->nama,
            'usia' => $usia,
            'kota' => $request->kota,
        ]);
        return $this->call->index('ok','Berhasil menambahkan data',200);
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
