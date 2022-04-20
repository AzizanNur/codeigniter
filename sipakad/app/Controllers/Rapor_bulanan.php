<?php

namespace App\Controllers;

class Rapor_bulanan extends BaseController
{
    public function input_rapor()
    {   
        return view('page/raporBulanan/laporan_input');
    }

    public function laporan_nilai()
    {
        return view('page/raporBulanan/laporan_nilai');
    }
}
