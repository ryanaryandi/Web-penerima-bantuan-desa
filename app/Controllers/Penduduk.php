<?php

namespace App\Controllers;

use App\Models\PendudukModel;
use \Mpdf\Mpdf;


class Penduduk extends BaseController
{
    protected $pendudukModel;
    public function __construct()
    {
        $this->pendudukModel = new PendudukModel();
        $this->Mpdf = new Mpdf();
    }

    public function datapenduduk()
    {
        // $penduduk = $this->pendudukModel->findAll();
        $currentPage = $this->request->getVar('page_penduduk') ? $this->request->getVar('page_penduduk') : 1;

        $keyword = $this->request->getVar('keyword');
        
        if ($keyword) {
            $tampil = $this->pendudukModel->search($keyword);
        } else {
            $tampil = $this->pendudukModel->orderby('id', 'desc');
            // $tampil = $this->pendudukModel; 
            
        }

       
        $penduduk = $tampil->paginate(10, 'penduduk');
        $pager = $this->pendudukModel->pager;

        $data = [
            'title' => 'Data Penduduk Web Desa Madusari',
            'penduduk' => $penduduk,
            'pager' => $pager,
            'currentPage' => $currentPage
        ];


        return view('data/datapenduduk', $data);
    }

    public function detail($nik)
    {
        $detail = $this->pendudukModel->where(['nik' => $nik])->first();

        $data = [
            'title' => 'Data Penduduk || Web Desa Madusari',
            'penduduk' => $detail
        ];


        // Jika nik tidak ditemukan
        if (empty($data['penduduk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('NIK ' . $nik . ' Tidak ditemukan');
        }
        return view('data/detail', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Penduduk',
            'validation' => \Config\Services::validation()
        ];

        return view('data/create', $data);
    }


    public function save()
    {

        // Validasi input

        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[penduduk.nik]|min_length[16]|numeric|max_length[16]',
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
            'luaslantaibangunan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Luas lantai bangunan tidak boleh kosong!'
                    ]
                ],
                'jenislantaibangunan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jenis lantai bangunan tidak boleh kosong!'
                    ]
                ],
                    'jenisdindingbangunan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Jenis dinding bangunan tidak boleh kosong!'
                        ]
                    ],
                    'wc' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Wc tidak boleh kosong!'
                        ]
                    ],
                    'sumberpenerangan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Sumber penerangan tidak boleh kosong!'
                        ]
                    ],
                    'sumberair' => [
                        'rules' => 'required',
                         'errors' => [
                            'required' => 'Sumber air tidak boleh kosong!'
                         ]
                    ],
                    'bahanbakar' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Bahan bakar tidak boleh kosong!'
                        ]
                    ],
                    'konsumsigizi' => [
                        'rules' => 'required',
                         'errors' => [
                            'required' => 'Konsumsi gizi tidak boleh kosong!'
                         ]
                     ],
                     'pakaian' => [
                        'rules' => 'required',
                         'errors' => [
                             'required' => 'Pakaian tidak boleh kosong!'
                         ]
                     ],
                     'makan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Makan tidak boleh kosong!'
                        ]
                    ],
                     'pengobatan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Pengobatan tidak boleh kosong!'
                        ]
                    ],
                    'barangberharga' => [
                         'rules' => 'required',
                         'errors' => [
                                'required' => 'Barang berharga tidak boleh kosong!'
                         ]
                    ]    
        ])) {

            $validation = \Config\Services::validation();
            return redirect()->to('/penduduk/create')->withInput($validation);
        }


        $this->pendudukModel->save([
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


        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/datapenduduk');
    }


    public function delete($id)
    {
        $this->pendudukModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/datapenduduk');
    }


    public function edit($id)
    {
        $edit = $this->pendudukModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Form Ubah Data Penduduk',
            'validation' => \Config\Services::validation(),
            'penduduk' => $edit
        ];

        return view('data/edit', $data);
    }


    public function update($id, $nik)
    {

        // Cek NIK
        $nikLama = $this->pendudukModel->where(['nik' => $nik])->first();
        if ($nikLama['nik'] == $this->request->getVar('nik')) {
            $rule_nik = 'required|min_length[16]|numeric|max_length[16]';
        } else {
            $rule_nik = 'required|is_unique[penduduk.nik]|min_length[16]|numeric|max_length[16]';
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
                'luaslantaibangunan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Luas lantai bangunan tidak boleh kosong!'
                        ]
                    ],
                    'jenislantaibangunan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Jenis lantai bangunan tidak boleh kosong!'
                        ]
                    ],
                        'jenisdindingbangunan' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Jenis dinding bangunan tidak boleh kosong!'
                            ]
                        ],
                        'wc' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Wc tidak boleh kosong!'
                            ]
                        ],
                        'sumberpenerangan' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Sumber penerangan tidak boleh kosong!'
                            ]
                        ],
                        'sumberair' => [
                            'rules' => 'required',
                             'errors' => [
                                'required' => 'Sumber air tidak boleh kosong!'
                             ]
                        ],
                        'bahanbakar' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Bahan bakar tidak boleh kosong!'
                            ]
                        ],
                        'konsumsigizi' => [
                            'rules' => 'required',
                             'errors' => [
                                'required' => 'Konsumsi gizi tidak boleh kosong!'
                             ]
                         ],
                         'pakaian' => [
                            'rules' => 'required',
                             'errors' => [
                                 'required' => 'Pakaian tidak boleh kosong!'
                             ]
                         ],
                         'makan' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Makan tidak boleh kosong!'
                            ]
                        ],
                         'pengobatan' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'Pengobatan tidak boleh kosong!'
                            ]
                        ],
                        'barangberharga' => [
                             'rules' => 'required',
                             'errors' => [
                                    'required' => 'Barang berharga tidak boleh kosong!'
                             ]
                        ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/penduduk/edit/' . $this->request->getVar('id'))->withInput($validation);
        }

        $this->pendudukModel->save([
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

        return redirect()->to('/datapenduduk');
    }

    public function print()
    {
        $penduduk = $this->pendudukModel->orderby('id', 'desc')->findAll();
        $mpdf = new Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
        $data = [
            'title' => 'Print data penduduk',
            'penduduk' => $penduduk
        ];
        $mpdf->WriteHTML(view('data/print', $data));
        return redirect()->to($mpdf->Output('data warga.pdf', 'I'));
    }

    public function detailprint($nik)
    {
        $detail = $this->pendudukModel->where(['nik' => $nik])->first();
        $mpdf = new Mpdf(['mode' => 'utf-8']);

        $data = [
            'title' => 'print',
            'penduduk' => $detail
        ];

        // Jika nik tidak ditemukan
        if (empty($data['penduduk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('NIK ' . $nik . ' Tidak ditemukan');
        }

        $mpdf->WriteHTML(view('data/detailprint', $data));
        return redirect()->to($mpdf->Output('detail warga.pdf', 'I'));
    }
}
