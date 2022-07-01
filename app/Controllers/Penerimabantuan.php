<?php

namespace App\Controllers;

use App\Models\PenerimaModel;
use App\Models\PendudukModel;
use \Mpdf\Mpdf;

class Penerimabantuan extends BaseController
{
    protected $PenerimaModel;
    public function __construct()
    {
        $this->PenerimaModel = new PenerimaModel();
        $this->PendudukModel = new PendudukModel();
        $this->Mpdf = new Mpdf();
    }

    public function penerimabantuan()
    {
        // $penerimabantuan = $this->PenerimaModel->findAll();
        $currentPage = $this->request->getVar('page_penerima') ? $this->request->getVar('page_penerima') : 1;

        $kunci = $this->request->getVar('kunci');
        if ($kunci) {
            $tampil = $this->PenerimaModel->search($kunci);
        } else {
            $tampil = $this->PenerimaModel->orderby('id', 'desc');
        }

        $penerimabantuan = $tampil->paginate(10, 'penerima');
        $pager = $this->PenerimaModel->pager;



        $data = [
            'title' => 'Data Penerima Bantuan',
            'penerimabantuan' => $penerimabantuan,
            'pager' => $pager,
            'currentPage' => $currentPage
        ];


        return view('penerima/penerimabantuan', $data);
    }

    public function simpan($nik)
    {

        // Cek NIK
        $nikLama = $this->PendudukModel->where(['nik' => $nik])->first();



        // Validasi input
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[penerimabantuan.nik]|min_length[16]|numeric|max_length[16]',
                'errors' => [
                    'required' => 'NIK tidak boleh kosong!',
                    'is_unique' => 'NIK sudah terdaftar sebagai penerima bantuan!',
                    'min_length' => 'NIK kurang dari 16 karakter!',
                    'numeric' => 'NIK harus angka!',
                    'max_length' => 'NIK lebih dari 16 karakter!'
                ]
            ],
            'pengambilan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jadwal pengambilan tidak boleh kosong!',
                ]
            ],
            'jenisbantuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis bantuan tidak boleh kosong!',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/tempatdata/pilih/' . $this->request->getVar('id'))->withInput($validation);
        }

        $this->PenerimaModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tanggal_bulan_lahir' => $this->request->getVar('tanggallahir'),
            'tempat_lahir' => $this->request->getVar('tempatlahir'),
            'jenis_kelamin' => $this->request->getVar('jeniskelamin'),
            'status' => $this->request->getVar('status'),
            'agama' => $this->request->getVar('agama'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'status_ekonomi' => $this->request->getVar('statusekonomi'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'dusun' => $this->request->getVar('dusun'),
            'waktu_pengambilan' => $this->request->getVar('pengambilan'),
            'jenis_bantuan' => $this->request->getVar('jenisbantuan'),
            'keterangan' => $this->request->getVar('keterangan'),
            'luas_lantai_bangunan' => $this->request->getVar('luaslantaibangunan'),
            'jenis_lantai_bangunan' => $this->request->getVar('jenislantaibangunan'),
            'jenis_dinding_bangunan' => $this->request->getVar('jenisdindingbangunan'),
            'wc' => $this->request->getVar('wc'),
            'sumber_penerangan' => $this->request->getVar('sumberpenerangan'),
            'sumber_air' => $this->request->getVar('sumberair'),
            'bahan_bakar' => $this->request->getVar('bahanbakar'),
            'konsumsi_gizi' => $this->request->getVar('konsumsigizi'),
            'pakaian' => $this->request->getVar('pakaian'),
            'makan' => $this->request->getVar('makan'),
            'pengobatan' => $this->request->getVar('pengobatan'),
            'barang_berharga' => $this->request->getVar('barangberharga')
        ]);


        session()->setFlashdata('pesan', 'Data berhasil ditambah.');

        return redirect()->to('/penerimabantuan');
    }

    public function detail($nik)
    {
        $detail = $this->PenerimaModel->where(['nik' => $nik])->first();

        $data = [
            'title' => 'Data Penerima Bantuan',
            'penerima' => $detail
        ];


        // Jika nik tidak ditemukan
        if (empty($data['penerima'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('NIK ' . $nik . ' Tidak ditemukan');
        }
        return view('penerima/detail', $data);
    }

    public function delete($id)
    {
        $this->PenerimaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/penerimabantuan');
    }

    public function edit($id)
    {
        $edit = $this->PenerimaModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Form Ubah Data Penerima Bantuan',
            'validation' => \Config\Services::validation(),
            'penerima' => $edit
        ];

        return view('penerima/edit', $data);
    }

    public function update($id, $nik)
    {

        // Cek NIK
        $nikLama = $this->PenerimaModel->where(['nik' => $nik])->first();
        if ($nikLama['nik'] == $this->request->getVar('nik')) {
            $rule_nik = 'required|min_length[16]|numeric|max_length[16]';
        } else {
            $rule_nik = 'required|is_unique[penerima.nik]|min_length[16]|numeric|max_length[16]';
        }


        // Validasi input
        if (!$this->validate([
            'nik' => [
                'rules' => $rule_nik,
                'errors' => [
                    'required' => 'NIK tidak boleh kosong!',
                    'is_unique' => 'NIK sudah digunakan!',
                    'min_length' => 'NIK kurang dari 16 karakter!',
                    'numeric' => 'NIK harus angka!',
                    'max_length' => 'NIK lebih dari 16 karakter!'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong!',
                ]
            ],
            'tanggallahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal lahir tidak boleh kosong!',
                ]
            ],
            'tempatlahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat lahir tidak boleh kosong!'
                ]
            ],
            'jeniskelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin tidak boleh kosong!'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status tidak boleh kosong!'
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Agama tidak boleh kosong!'
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan tidak boleh kosong!'
                ]
            ],
            'pendidikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pendidikan tidak boleh kosong!'
                ]
            ],
            'statusekonomi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status ekonomi tidak boleh kosong!'
                ]
            ],
            'rt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'RT tidak boleh kosong!'
                ]
            ],
            'rw' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'RW tidak boleh kosong!'
                ]
            ],
            'dusun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Dusun tidak boleh kosong!'
                ]
            ],
            'pengambilan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jadwal pengambilan tidak boleh kosong!'
                ]
            ],
            'jenisbantuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis bantuan tidak boleh kosong!'
                ]
            ]
            
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/penerimabantuan/edit/' . $this->request->getVar('id'))->withInput($validation);
        }

        $this->PenerimaModel->save([
            'id' => $id,
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tanggal_bulan_lahir' => $this->request->getVar('tanggallahir'),
            'tempat_lahir' => $this->request->getVar('tempatlahir'),
            'jenis_kelamin' => $this->request->getVar('jeniskelamin'),
            'status' => $this->request->getVar('status'),
            'agama' => $this->request->getVar('agama'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'status_ekonomi' => $this->request->getVar('statusekonomi'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'dusun' => $this->request->getVar('dusun'),
            'jenis_bantuan' => $this->request->getVar('jenisbantuan'),
            'waktu_pengambilan' => $this->request->getVar('pengambilan'),
            'keterangan' => $this->request->getVar('keterangan'),
            'luas_lantai_bangunan' => $this->request->getVar('luaslantaibangunan'),
            'jenis_lantai_bangunan' => $this->request->getVar('jenislantaibangunan'),
            'jenis_dinding_bangunan' => $this->request->getVar('jenisdindingbangunan'),
            'wc' => $this->request->getVar('wc'),
            'sumber_penerangan' => $this->request->getVar('sumberpenerangan'),
            'sumber_air' => $this->request->getVar('sumberair'),
            'bahan_bakar' => $this->request->getVar('bahanbakar'),
            'konsumsi_gizi' => $this->request->getVar('konsumsigizi'),
            'pakaian' => $this->request->getVar('pakaian'),
            'makan' => $this->request->getVar('makan'),
            'pengobatan' => $this->request->getVar('pengobatan'),
            'barang_berharga' => $this->request->getVar('barangberharga')
        ]);


        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/penerimabantuan');
    }

    public function print()
    {
        $penerima = $this->PenerimaModel->orderby('id', 'desc')->findAll();
        $mpdf = new Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
        $data = [
            'title' => 'Print data penduduk',
            'penerima' => $penerima
        ];
        $mpdf->WriteHTML(view('penerima/penerimabantuanprint', $data));
        return redirect()->to($mpdf->Output('data penerimabantuan.pdf', 'I'));
    }

    public function detailprint($nik)
    {
        $detailpenerima = $this->PenerimaModel->where(['nik' => $nik])->first();
        $mpdf = new Mpdf(['mode' => 'utf-8']);

        $data = [
            'title' => 'print penerima bantuan',
            'penerima' => $detailpenerima
        ];

        // Jika nik tidak ditemukan
        if (empty($data['penerima'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('NIK ' . $nik . ' Tidak ditemukan');
        }

        $mpdf->WriteHTML(view('penerima/detailpenerima', $data));
        return redirect()->to($mpdf->Output('detail penerima bantuan.pdf', 'I'));
    }
}
