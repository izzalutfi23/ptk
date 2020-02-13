<?php

namespace App\Http\Controllers;

use App\Mdatasekolah;
use Illuminate\Http\Request;

class DatasekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Mdatasekolah::get();
        $data = array(
            'datasekolah' => $sekolah
        );
        return view('page/semuasekolah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mdatasekolah::create($request->all());

        return redirect('/datasekolah')->with('status', 'Data sekolah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mdatasekolah  $mdatasekolah
     * @return \Illuminate\Http\Response
     */
    public function show($status, $jenjang)
    {
        $datas = Mdatasekolah::where('status', $status)->where('jenjang', $jenjang)->get();
        
        $data = array(
            'datasekolah' => $datas,
            'status' => $status,
            'jenjang' => $jenjang
        );
        return view('page/detail_sekolah', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mdatasekolah  $mdatasekolah
     * @return \Illuminate\Http\Response
     */
    public function edit($npsn)
    {
        $sekolah = Mdatasekolah::where('npsn', $npsn)->get();

        foreach ($sekolah as $s) {
            $datas = json_decode($s, true);
        }

        $data = array(
            'data' => $datas
        );

        return view('page/edit_sekolah', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mdatasekolah  $mdatasekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Mdatasekolah::where('npsn', $request->npsn)->update([
            'nama_sekolah' => $request->nama_sekolah,
            'alamat' => $request->alamat,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'jenjang' => $request->jenjang,
            'status' => $request->status
        ]);
        
        return redirect('/datasekolah')->with('status', 'Data sekolah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mdatasekolah  $mdatasekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy($npsn)
    {
        Mdatasekolah::destroy('npsn', $npsn);
        
        return redirect('/datasekolah')->with('status', 'Data sekolah berhasil dihapus');
    }
}
