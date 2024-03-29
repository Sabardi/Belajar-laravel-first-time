<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('admin');
    }

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


    public function tester(){
        return "Ini tester";
    }
}
