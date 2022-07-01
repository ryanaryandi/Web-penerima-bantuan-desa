<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerimaModel extends Model
{

    protected $table = 'penerimabantuan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama', 'tanggal_bulan_lahir', 'tempat_lahir', 'jenis_kelamin', 'status', 'agama', 'pekerjaan', 'pendidikan', 'status_ekonomi', 'rt', 'rw', 'dusun', 'waktu_pengambilan', 'jenis_bantuan', 'keterangan',
'luas_lantai_bangunan', 'jenis_lantai_bangunan', 'jenis_dinding_bangunan','wc', 'sumber_penerangan', 'sumber_air', 'bahan_bakar', 'konsumsi_gizi', 'pakaian', 'makan', 'pengobatan', 'barang_berharga'];


    public function getPenerimabantuan($nik = false)
    {
        if ($nik = false) {
            return $this->findAll();
        }

        return $this->where(['nik' => $nik])->first();
    }

    public function search($kunci)
    {
        // $builder = $this->table('penduduk');
        // $builder->like('nama', $kunci);
        // return $builder;

        return $this->table('penerimabantuan')->like('nama', $kunci)->orLike('agama', $kunci)->orLike('jenis_kelamin', $kunci)->orLike('pekerjaan', $kunci)->orLike('status', $kunci)->orLike('status_ekonomi', $kunci)->orLike('keterangan', $kunci);
    }
}
