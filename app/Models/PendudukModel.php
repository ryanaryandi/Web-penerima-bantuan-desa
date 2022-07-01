<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{

    protected $table = 'penduduk';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama', 'tanggal_bulan_lahir', 'tempat_lahir', 'jenis_kelamin', 'status', 'agama', 'pekerjaan', 'pendidikan', 'status_ekonomi', 'rt', 'rw', 'dusun', 'pengumuman', 'luas_lantai_bangunan', 'jenis_lantai_bangunan', 'jenis_dinding_bangunan', 'wc', 'sumber_penerangan', 'sumber_air', 'bahan_bakar', 'konsumsi_gizi', 'pakaian', 'makan', 'pengobatan', 'barang_berharga'];


    public function getPenduduk($nik = false)
    {
        if ($nik = false) {
            return $this->findAll();
        }
       
        return $this->where(['nik' => $nik])->first();
        
    }

    public function search($keyword)
    {
        // $builder = $this->table('penduduk');
        // $builder->like('nama', $keyword);
        // return $builder;
        return $this->table('penduduk')->like('nama', $keyword)->orLike('agama', $keyword)->orLike('jenis_kelamin', $keyword)->orLike('pekerjaan', $keyword)->orLike('status', $keyword)->orLike('status_ekonomi', $keyword)->orLike('nik', $keyword);
    }
}
