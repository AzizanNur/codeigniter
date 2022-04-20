<?php

namespace App\Controllers;

class Rapor_semester extends BaseController
{
    public function input_rapor()
    {
        return view('page/raporSemester/laporan_input');
    }

    public function laporan_nilai()
    {
        return view('page/raporSemester/laporan_nilai');
    }
}
