<?php

namespace App\Http\Controllers;

use App\Mdatasekolah;
use App\Mdatapendidik;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){
    	$sekolah = Mdatasekolah::all();
    	$tsekolah = $sekolah->count();

    	$tksekolahn = Mdatasekolah::where('jenjang', 'TK')->where('status', 'NEGERI')->get();
    	$ttksekolahn = $tksekolahn->count();
    	$sdsekolahn = Mdatasekolah::where('jenjang', 'SD')->where('status', 'NEGERI')->get();
    	$tsdsekolahn = $sdsekolahn->count();
    	$smpsekolahn = Mdatasekolah::where('jenjang', 'SMP')->where('status', 'NEGERI')->get();
    	$tsmpsekolahn = $smpsekolahn->count();
    	$smasekolahn = Mdatasekolah::where('jenjang', 'SMA')->where('status', 'NEGERI')->get();
    	$tsmasekolahn = $smasekolahn->count();

    	$tksekolahs = Mdatasekolah::where('jenjang', 'TK')->where('status', 'SWASTA')->get();
    	$ttksekolahs = $tksekolahs->count();
    	$sdsekolahs = Mdatasekolah::where('jenjang', 'SD')->where('status', 'SWASTA')->get();
    	$tsdsekolahs = $sdsekolahs->count();
    	$smpsekolahs = Mdatasekolah::where('jenjang', 'SMP')->where('status', 'SWASTA')->get();
    	$tsmpsekolahs = $smpsekolahs->count();
    	$smasekolahs = Mdatasekolah::where('jenjang', 'SMA')->where('status', 'SWASTA')->get();
    	$tsmasekolahs = $smasekolahs->count();

    	$pendidik = Mdatapendidik::all();
    	$tpendidik = $pendidik->count();

    	$gty = Mdatapendidik::where('status_peg', 'GTY')->get();
    	$jgty = $gty->count();
    	$gtt = Mdatapendidik::where('status_peg', 'GTT')->get();
    	$jgtt = $gtt->count();
    	$pns = Mdatapendidik::where('status_peg', 'PNS')->get();
    	$jpns = $pns->count();
    	$ptt = Mdatapendidik::where('status_peg', 'PTT')->get();
    	$jptt = $ptt->count();
    	$pty = Mdatapendidik::where('status_peg', 'PTY')->get();
    	$jpty = $pty->count();

    	$data = array(
    		'totalsekolah' => $tsekolah,
    		'totalpendidik' => $tpendidik,
    		'tkn' => $ttksekolahn,
    		'sdn' => $tsdsekolahn,
    		'smpn' => $tsmpsekolahn,
    		'sman' => $tsmasekolahn,
    		'tks' => $ttksekolahs,
    		'sds' => $tsdsekolahs,
    		'smps' => $tsmpsekolahs,
    		'smas' => $tsmasekolahs,
    		'gty' => $jgty,
    		'gtt' => $jgtt,
    		'pns' => $jpns,
    		'ptt' => $jptt,
    		'pty' => $jpty
    	);

    	return view('page/dashboard', $data);
    }
}
