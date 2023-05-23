<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $mahasiswa = new MahasiswaModel();
        return view('index',[
            "nick" => $mahasiswa->getNick(),
            "prodi" => $mahasiswa->getProdi()
        ]);
    }

    public function biodata()
    {
        $mahasiswa = new MahasiswaModel();
        return view('biodata',[
            "nama" => $mahasiswa->getNama(),
            "nim" => $mahasiswa->getNim(),
            "prodi" => $mahasiswa->getProdi(),
            "hobi" => $mahasiswa->getHobi(),
            "skill" => $mahasiswa->getSkill()
        ]);
    }
}