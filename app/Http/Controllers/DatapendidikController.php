<?php

namespace App\Http\Controllers;

use App\Mdatapendidik;
use Illuminate\Http\Request;

class DatapendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidik = Mdatapendidik::all();
        $data = array(
            'pendidik' => $pendidik
        );
        return view('/page/data_pendidik', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page/tambah_pendidik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mdatapendidik::create($request->all());

        return redirect('/datapendidik')->with('status', 'Data pendidik berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mdatapendidik  $mdatapendidik
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        $datas = Mdatapendidik::where('nik', $nik)->get();
        
        $data = array(
            'datapendidik' => $datas,
        );
        return view('page/detail_pendidik', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mdatapendidik  $mdatapendidik
     * @return \Illuminate\Http\Response
     */
    public function edit($nik)
    {
        $datas = Mdatapendidik::where('nik', $nik)->get();
        
        $data = array(
            'datapendidik' => $datas,
        );
        return view('page/edit_pendidik', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mdatapendidik  $mdatapendidik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Mdatapendidik::where('nik', $request->nik)->update([
            'gelar_depan' => $request->gelar_depan,
            'nama_lengkap' => $request->nama_lengkap,
            'gelar_belakang' => $request->gelar_belakang,
            'nuptk' => $request->nuptk,
            'j_kel' => $request->j_kel,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'status_perkawinan' => $request->status_perkawinan,
            'nama_ibukandung' => $request->nama_ibukandung,
            'nama_satuanpend' => $request->nama_satuanpend,
            'jenjang' => $request->jenjang,
            'npsn' => $request->npsn,
            'alamat_satuanpend' => $request->alamat_satuanpend,
            'kelurahan' => $request->kelurahan,
            'status' => $request->status,
            'kecamatan' => $request->kecamatan,
            'status_peg' => $request->status_peg,
            'jenis_ptk' => $request->jenis_ptk,
            'mapel_ygdiajarkan' => $request->mapel_ygdiajarkan,
            'tmt_pertama' => $request->tmt_pertama,
            'surat_tugas' => $request->surat_tugas,
            'nip' => $request->nip,
            'gol' => $request->gol,
            'masa_kerja' => $request->masa_kerja,
            'tmt_gol' => $request->tmt_gol,
            'pendidikan' => $request->pendidikan,
            'thn_lulus' => $request->thn_lulus,
            'jurusan_pendterakhir' => $request->jurusan_pendterakhir,
            'thn_masukkuliah' => $request->thn_masukkuliah,
            'semester_kuliah' => $request->semester_kuliah,
            'jurusan_progdi' => $request->jurusan_progdi,
            'universitas' => $request->universitas,
            'ipk_terakhir' => $request->ipk_terakhir,
            'perkiraan_thnlulus' => $request->perkiraan_thnlulus,
            'sertifikasi' => $request->sertifikasi,
            'no_pesertasertifikasi' => $request->no_pesertasertifikasi,
            'nrg' => $request->nrg,
            'mapel_sertifikasi' => $request->mapel_sertifikasi,
            'npwp' => $request->npwp,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'alamat_rumah' => $request->alamat_rumah
        ]);
        
        return redirect('/datapendidik')->with('status', 'Data pendidik berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mdatapendidik  $mdatapendidik
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        Mdatapendidik::destroy('nik', $nik);
        
        return redirect('/datapendidik')->with('status', 'Data pendidik berhasil dihapus');
    }
}
