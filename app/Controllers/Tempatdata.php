<?php

namespace App\Controllers;

use App\Models\PendudukModel;
use App\Models\PenerimaModel;

class Tempatdata extends BaseController
{
    protected $TempatdataModel;
    public function __construct()
    {
        $this->TempatdataModel = new PendudukModel();
        $this->PenerimaModel = new PenerimaModel();
    }

    public function tempatdata()
    {
        // $penduduk = $this->pendudukModel->findAll();
        $currentPage = $this->request->getVar('page_penduduk') ? $this->request->getVar('page_penduduk') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $tampil = $this->TempatdataModel->search($keyword);
        } else {
            $tampil = $this->TempatdataModel->orderby('id', 'desc');
        }

        $penduduk = $tampil->paginate(10, 'penduduk');
        $pager = $this->TempatdataModel->pager;



        $data = [
            'title' => '',
            'penduduk' => $penduduk,
            'pager' => $pager,
            'validation' => \Config\Services::validation(),
            'currentPage' => $currentPage
        ];


        return view('penerima/tempatdata', $data);
    }

    public function pilih($id)
    {
        $edit = $this->TempatdataModel->where(['id' => $id])->first();
        $data = [
            'title' => '',
            'validation' => \Config\Services::validation(),
            'penduduk' => $edit
        ];

        return view('penerima/pilih', $data);
    }
}
