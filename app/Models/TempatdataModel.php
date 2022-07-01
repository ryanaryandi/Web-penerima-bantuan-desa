<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerimaModel extends Model
{

    protected $table = 'penduduk';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama', 'tanggal_bulan_lahir', 'tempat_lahir', 'jenis_kelamin', 'status', 'agama', 'pekerjaan', 'pendidikan', 'status_ekonomi', 'rt', 'rw', 'dusun', 'keterangan'];


    public function getPenduduk($nik = false)
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

        return $this->table('penduduk')->like('nama', $kunci)->orLike('agama', $kunci)->orLike('jenis_kelamin', $kunci)->orLike('pekerjaan', $kunci)->orLike('status', $kunci)->orLike('status_ekonomi', $kunci);
    }
}
