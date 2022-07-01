<?php

namespace App\Controllers;

use App\Models\PengumumanModel;
use \Mpdf\Mpdf;


class Pengumuman extends BaseController
{
    protected $pendudukModel;
    public function __construct()
    {
        $this->pengumumanModel = new PengumumanModel();
        $this->Mpdf = new Mpdf();
    }

    public function pengumuman()
    {
        // $penduduk = $this->pendudukModel->findAll();
        $currentPage = $this->request->getVar('page_penduduk') ? $this->request->getVar('page_penduduk') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $tampil = $this->pengumumanModel->search($keyword);
        } else {
            $tampil = $this->pengumumanModel->orderby('id', 'desc');
        }

        $penduduk = $tampil->paginate(10, 'penduduk');
        $pager = $this->pengumumanModel->pager;



        $data = [
            'title' => 'Pengumuman',
            'penduduk' => $penduduk,
            'pager' => $pager,
            'currentPage' => $currentPage
        ];


        return view('data/pengumuman', $data);
    }

    public function pengumumanwarga()
    {
        // $penduduk = $this->pendudukModel->findAll();
        $currentPage = $this->request->getVar('page_penduduk') ? $this->request->getVar('page_penduduk') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $tampil = $this->pengumumanModel->search($keyword);
        } else {
            $tampil = $this->pengumumanModel->orderby('id', 'desc');
        }

        $penduduk = $tampil->paginate(6, 'penduduk');
        $pager = $this->pengumumanModel->pager;



        $data = [
            'title' => 'Pengumuman',
            'penduduk' => $penduduk,
            'pager' => $pager,
            'currentPage' => $currentPage
        ];


        return view('cekpenerima/pengumuman', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Pengumuman',
            'validation' => \Config\Services::validation()
        ];

        return view('data/createpengumuman', $data);
    }


    public function save()
    {

        // Validasi input

        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul tidak boleh kosong!'
                ]
            ],

            'pengumuman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pengumuman tidak boleh kosong!'
                ]
                ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pengumuman/create')->withInput($validation);
        }


        $this->pengumumanModel->save([
            'judul' => $this->request->getVar('judul'),
            'pengumuman' => $this->request->getVar('pengumuman')
        ]);


        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/pengumuman');
    }

    public function edit($id)
    {
        $edit = $this->pengumumanModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Form Ubah Pengumuman',
            'validation' => \Config\Services::validation(),
            'penduduk' => $edit
        ];

        return view('data/editpengumuman', $data);
    }

    public function update($id)
    {


        // Validasi input
        if (!$this->validate([

            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul tidak boleh kosong!',
                ]
            ],
            'pengumuman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pengumuman tidak boleh kosong!',
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pengumuman/edit/' . $this->request->getVar('id'))->withInput($validation);
        }

        $this->pengumumanModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'pengumuman' => $this->request->getVar('pengumuman')
        ]);


        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/pengumuman');
    }

    public function delete($id)
    {
        $this->pengumumanModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/pengumuman');
    }

    public function print($id)
    {
        $print = $this->pengumumanModel->where(['id' => $id])->first();
        $mpdf = new Mpdf(['mode' => 'utf-8']);

        $data = [
            'title' => 'print penerima bantuan',
            'penerima' => $print
        ];

        // Jika nik tidak ditemukan
        if (empty($data['penerima'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('ID ' . $id . ' Tidak ditemukan');
        }

        $mpdf->WriteHTML(view('data/printpengumuman', $data));
        return redirect()->to($mpdf->Output('Pengumuman.pdf', 'I'));
    }
}
