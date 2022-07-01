<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<script src="https://use.fontawesome.com/4de1630ec9.js"></script>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Data Penduduk</h1>
            <a href="/penduduk/create" class="btn btn-primary mt-3"><i class="fa fa-plus"></i> Tambah Data</a>
            <a href="/penduduk/print" class="btn btn-warning mt-3" target="_blank"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a>
            <div class="cari">
                <form action="/penduduk/datapenduduk" method="POST">
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
            <div class="tengah">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tgl Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col">L/P</th>
                            <th scope="col">Status</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Ekonomi</th>
                            <th scope="col" class="aksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                        <?php foreach ($penduduk as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['nik']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?php echo ($p['tanggal_bulan_lahir'] != '0000-00-00') ? date('d-m-Y', strtotime($p['tanggal_bulan_lahir'])) : '' ?></td>
                                <td><?= $p['agama']; ?></td>
                                <td><?= $p['jenis_kelamin']; ?></td>
                                <td><?= $p['status']; ?></td>
                                <td><?= $p['pekerjaan']; ?></td>
                                <td><?= $p['status_ekonomi']; ?></td>
                                <td class="detail">
                                    <a href="/penduduk/detail/<?= $p['nik']; ?>" class="btn btn-success"> <i class="fa fa-eye" aria-hidden="true"></i> Detail</a>
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