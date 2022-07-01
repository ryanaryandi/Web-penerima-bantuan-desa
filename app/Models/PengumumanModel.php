<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{

    protected $table = 'pengumuman';
    protected $useTimestamps = true;
    protected $allowedFields = ['pengumuman', 'judul', 'tanggal'];


    public function getPengumuman($id = false)
    {
        if ($id = false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        // $builder = $this->table('penduduk');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('pengumuman')->like('pengumuman', $keyword)->orLike('judul', $keyword);
    }
}
