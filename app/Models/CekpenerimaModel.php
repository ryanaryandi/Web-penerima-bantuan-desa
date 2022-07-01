<?php

namespace App\Models;

use CodeIgniter\Model;

class CekpenerimaModel extends Model
{

    protected $table = 'penerimabantuan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama', 'tanggal_bulan_lahir', 'tempat_lahir', 'jenis_kelamin', 'status', 'agama', 'pekerjaan', 'pendidikan', 'status_ekonomi', 'rt', 'rw', 'dusun', 'waktu_pengambilan', 'jenis_bantuan', 'keterangan'];


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

        return $this->table('penerimabantuan')->like('nik', $kunci)->orLike('nama', $kunci);
    }
}
