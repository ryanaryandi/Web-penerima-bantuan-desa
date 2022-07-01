<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Data Penduduk</h1>

            <div class="cari">
                <form action="/tempatdata/tempatdata" method="POST">
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
                            <th scope="col">Jenis KL</th>
                            <th scope="col">Status</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Status Ekonomi</th>
                            <th scope="col">Aksi</th>
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
                                <td>  
                                    <a href="/tempatdata/pilih/<?= $p['id']; ?>" class="btn btn-success" <?php echo (($p['pekerjaan'] == 'PNS') || 
                                    ($p['status_ekonomi'] == 'Mampu') || ($p['status'] == 'Lajang') || ($p['pendidikan'] == 'S1') || 
                                    ($p['pendidikan'] == 'S2') || ($p['pendidikan'] == 'S3') || ($p['pendidikan'] == 'SMA') || ($p['pendidikan'] == 'SMP') ||
                                    ($p['luas_lantai_bangunan'] == 'Lebih Dari 8m Persegi') ||  ($p['jenis_lantai_bangunan'] == 'Keramik') || ($p['jenis_dinding_bangunan'] == 'Tembok') ||
                                    ($p['wc'] == 'Sendiri') || ($p['sumber_penerangan'] == 'Listrik') || ($p['sumber_air'] == 'PAM') || ($p['bahan_bakar'] == 'Gas LPG') || ($p['bahan_bakar'] == 'Listrik') ||
                                    ($p['konsumsi_gizi'] == 'Baik') || ($p['pakaian'] == 'Pembelian Kapan Saja') || ($p['makan'] == 'Terpenuhi') || ($p['pengobatan'] == 'Mampu Membayar') ||
                                    ($p['barang_berharga'] == 'Mempunyai')) ? 'hidden' : '' ?>>Pilih</a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
            <?= $pager->links('penduduk', 'penduduk_pagination'); ?>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>