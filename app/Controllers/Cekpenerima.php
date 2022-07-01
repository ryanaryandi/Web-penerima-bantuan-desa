<?php

namespace App\Controllers;

use App\Models\CekpenerimaModel;
use \Mpdf\Mpdf;

class Cekpenerima extends BaseController
{
    protected $PenerimaModel;
    public function __construct()
    {
        $this->CekpenerimaModel = new CekpenerimaModel();
        $this->Mpdf = new Mpdf();
    }

    public function cekpenerima()
    {
        // $penerimabantuan = $this->PenerimaModel->findAll();
        // $currentPage = $this->request->getVar('page_penerima') ? $this->request->getVar('page_penerima') : 1;

        $kunci = $this->request->getVar('kunci');
        if ($kunci) {
            $tampil = $this->CekpenerimaModel->search($kunci);
        } else {
             $tampil = $this->CekpenerimaModel->orderby('id', 'desc');
            //return redirect()->to('/cekpenerima/blank');
        }

        $cekpenerimabantuan = $tampil->paginate(20, 'penerima');
         $pager = $this->CekpenerimaModel->pager;



        $data = [
            'title' => 'Data Penerima Bantuan',
            'cekpenerimabantuan' => $cekpenerimabantuan,
             'pager' => $pager,
            // 'currentPage' => $currentPage
        ];

        if (empty($data['cekpenerimabantuan'])) {
            // throw new \CodeIgniter\Exceptions\PageNotFoundException('NIK tidak terdaftar sebagai penerima bantuan');
            session()->setFlashdata('pesan', 'Maaf anda tidak terdaftar sebagai penerima bantuan');
            return redirect()->to('/cekpenerima/blank');
        }
        return view('cekpenerima/cekpenerima', $data);
    }

    public function blank()
    {
 $tampil = $this->CekpenerimaModel;
 $cekpenerimabantuan = $tampil->paginate(6, 'penerima');
        $data = [
            'title' => 'Data Penerima Bantuan',
            'cekpenerimabantuan' => $cekpenerimabantuan,
        ];


        return view('cekpenerima/tidakterdaftar', $data);
    }

    public function print($nik)
    {
        $detailpenerima = $this->CekpenerimaModel->where(['nik' => $nik])->first();
        $mpdf = new Mpdf(['mode' => 'utf-8']);

        $data = [
            'title' => 'print penerima bantuan',
            'penerima' => $detailpenerima
        ];

        // Jika nik tidak ditemukan
        if (empty($data['penerima'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('NIK ' . $nik . ' Tidak ditemukan');
        }

        $mpdf->WriteHTML(view('cekpenerima/print', $data));
        return redirect()->to($mpdf->Output('penerima bantuan.pdf', 'I'));
    }
}
