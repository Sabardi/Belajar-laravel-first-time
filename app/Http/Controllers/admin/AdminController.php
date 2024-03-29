<?php
// menggunakann controller di dalam folder
namespace App\Http\Controllers\admin;

// menggunakann controller di dalam folder
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function tampil(){
        $arraymahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
        "Lisa Permata"];
        return view('mhs.mhs')->with('mahsiswa', $arraymahasiswa);

    }

    public function tampilDosen(){

        $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.",
        "Dr. Umar Agustinus","Dr. Syahrial, M.Kom."];
        return view('mhs.dosen')->with('dosen', $arrDosen);


    }

    public function tampilGalery(){

        return view('mhs.galery');

    }
}
