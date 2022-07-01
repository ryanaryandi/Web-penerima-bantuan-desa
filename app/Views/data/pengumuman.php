<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<script src="https://use.fontawesome.com/4de1630ec9.js"></script>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Pengumuman</h1>
            <a href="/pengumuman/create" class="btn btn-primary mt-3"><i class="fa fa-plus"></i> Tambah Pengumuman</a>

            <div class="cari">
                <form action="/pengumuman/pengumuman" method="POST">
                    <div class="input-group ml-3" style="width:300px">
                        <input type="text" class="form-control" placeholder="Masukan pencarian.." name="keyword">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="fix">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengumuman</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col" class="aksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                        <?php foreach ($penduduk as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['judul']; ?></td>
                                <td><textarea readonly style="width:450px; height: 100px"><?= $p['pengumuman']; ?></textarea></td>

                                <td> <?php $tanggal = ($p['created_at']);
$day = date('D', strtotime($tanggal));
$dayList = array(
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
);
     echo " "  . $dayList[$day], ", ", date('d-m-Y', strtotime($p['created_at'])); ?>
                                
                                <td class="detail" style="width: 30px;">
                                    <a href="/pengumuman/edit/<?= $p['id']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
                                    <a href="/pengumuman/delete/<?= $p['id']; ?>" class="btn btn-danger mt-2 mb-2" onclick="return confirm('apakah anda yakin akan menghapus <?= $p['judul']; ?> ?');"><i class="fa fa-trash"></i> Hapus</a>
                                    <a href="/pengumuman/print/<?= $p['id']; ?>" class="btn btn-primary" target="_blank"><i class="fa fa-print" aria-hidden="true"></i> cetak</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <?= $pager->links('penduduk', 'penduduk_pagination'); ?>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>