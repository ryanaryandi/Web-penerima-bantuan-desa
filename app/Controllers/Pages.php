<?php

namespace App\Controllers;

use Config\View;


class Pages extends BaseController
{
    public function beranda()
    {
        $data = [
            'title' => 'Beranda || Web Desa Madusari'
        ];
        return view('pages/beranda', $data);
    }
}
