<?php

namespace App\Controllers;

use Config\View;


class PagesUser extends BaseController
{
    public function berandaUser()
    {
        $data = [
            'title' => 'Beranda || Web Desa Madusari'
        ];
        return view('pages/berandaUser', $data);
    }
}
