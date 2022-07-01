<?= $this->extend('layout/templateUser'); ?>

<?= $this->section('content'); ?>
<script src="https://use.fontawesome.com/4de1630ec9.js"></script>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Data Penerima Bantuan</h1>
           

            <div class="cari">
                <form action="/cekpenerima/cekpenerima" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Masukan pencarian.." name="kunci">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-danger" role="alert">
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
                            <th scope="col">Pengambilan</th>
                            <th scope="col">Bantuan</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($cekpenerimabantuan as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['nik']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td> <?php $tanggal = ($p['waktu_pengambilan']);
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
     echo " "  . $dayList[$day], ", ", date('d-m-Y', strtotime($p['waktu_pengambilan'])); ?>
                                <td><?= $p['jenis_bantuan']; ?></td>
                                <td><?= $p['keterangan']; ?></td>
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