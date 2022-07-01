<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<script src="https://use.fontawesome.com/4de1630ec9.js"></script>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-4 mb-5">Detail Penduduk</h2>

            <a href="/penduduk/edit/<?= $penduduk['id']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>

            <form action="/penduduk/<?= $penduduk['id']; ?>" method="POST" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus <?= $penduduk['nama']; ?> ?');"><i class="fa fa-trash"></i> Hapus</button>
            </form>

            <a href="/penduduk/detailprint/<?= $penduduk['nik']; ?>" class="btn btn-info" target="_blank"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a>

            <table class="table table-striped mt-2">
                <tr>
                    <th width="20%">NIK</th>
                    <td width="1%">:</td>
                    <td><?= $penduduk['nik']; ?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><?= $penduduk['nama']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td><?php echo ($penduduk['tanggal_bulan_lahir'] != '0000-00-00') ? date('d-m-Y', strtotime($penduduk['tanggal_bulan_lahir'])) : '' ?></td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td><?= $penduduk['tempat_lahir']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td><?= $penduduk['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>:</td>
                    <td><?= $penduduk['status']; ?></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td><?= $penduduk['agama']; ?></td>
                </tr>
                <tr>
                    <th>pekerjaan</th>
                    <td>:</td>
                    <td><?= $penduduk['pekerjaan']; ?></td>
                </tr>
                <tr>
                    <th>Pendidikan</th>
                    <td>:</td>
                    <td><?= $penduduk['pendidikan']; ?></td>
                </tr>
                <tr>
                    <th>Status Ekonomi</th>
                    <td>:</td>
                    <td><?= $penduduk['status_ekonomi']; ?></td>
                </tr>
                <tr>
                    <th>Luas Lantai Bangunan</th>
                    <td>:</td>
                    <td><?= $penduduk['luas_lantai_bangunan']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Lantai Bangunan</th>
                    <td>:</td>
                    <td><?= $penduduk['jenis_lantai_bangunan']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Dinding Bangunan </th>
                    <td>:</td>
                    <td><?= $penduduk['jenis_dinding_bangunan']; ?></td>
                </tr>
                <tr>
                    <th>Wc</th>
                    <td>:</td>
                    <td><?= $penduduk['wc']; ?></td>
                </tr>
                <tr>
                    <th>Sumber Penerangan</th>
                    <td>:</td>
                    <td><?= $penduduk['sumber_penerangan']; ?></td>
                </tr>
                <tr>
                    <th>Sumber Air</th>
                    <td>:</td>
                    <td><?= $penduduk['sumber_air']; ?></td>
                </tr>
                <tr>
                    <th>Bahan Bakar </th>
                    <td>:</td>
                    <td><?= $penduduk['bahan_bakar']; ?></td>
                </tr>
                <tr>
                    <th>Konsumsi Gizi</th>
                    <td>:</td>
                    <td><?= $penduduk['konsumsi_gizi']; ?></td>
                </tr>
                <tr>
                    <th>Pakaian</th>
                    <td>:</td>
                    <td><?= $penduduk['pakaian']; ?></td>
                </tr>
                <tr>
                    <th>Makan</th>
                    <td>:</td>
                    <td><?= $penduduk['makan']; ?></td>
                </tr>
                <tr>
                    <th>Pengobatan</th>
                    <td>:</td>
                    <td><?= $penduduk['pengobatan']; ?></td>
                </tr>
                <tr>
                    <th>Barang Berharga</th>
                    <td>:</td>
                    <td><?= $penduduk['barang_berharga']; ?></td>
                </tr>
                <tr>
                    <th>RT</th>
                    <td>:</td>
                    <td><?= $penduduk['rt']; ?></td>
                </tr>
                <tr>
                    <th>RW</th>
                    <td>:</td>
                    <td><?= $penduduk['rw']; ?></td>
                </tr>
                <tr>
                    <th>Dusun</th>
                    <td>:</td>
                    <td><?= $penduduk['dusun']; ?></td>
                </tr>
                <tr>
                    <th>Dibuat</th>
                    <td>:</td>
                    <td>
                        <p class="card-text"><small class="text-muted"><?= $penduduk['created_at']; ?></small></p>
                    </td>
                </tr>
                <tr>
                    <th>Diubah</th>
                    <td>:</td>
                    <td>
                        <p class="card-text"><small class="text-muted"><?= $penduduk['updated_at']; ?></small></p>
                    </td>
                </tr>
            </table>

            <a onclick="history.back();" class="btn btn-primary mb-5" disabled><i class="fa fa-backward"></i> Kembali</a>

            <!-- <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">

                        <div class="card-body">
                            <h3 class="card-title"><?= $penduduk['nama']; ?></h3>
                            <p class="card-text"><b>NIK : </b><?= $penduduk['nik']; ?></p>
                            <p class="card-text"><b>Tempat Lahir : </b><?= $penduduk['tempat_lahir']; ?></p>
                            <p class="card-text"><b>Jenis Kelamin : </b> <?= $penduduk['jenis_kelamin']; ?></p>
                            <p class="card-text"><b>Status : </b> <?= $penduduk['status']; ?></p>
                            <p class="card-text"><b>Agama : </b> <?= $penduduk['agama']; ?></p>
                            <p class="card-text"><b>Pekerjaan : </b> <?= $penduduk['pekerjaan']; ?></p>
                            <p class="card-text"><b>Pendidikan : </b> <?= $penduduk['pendidikan']; ?></p>
                            <p class="card-text"><b>Status Ekonomi : </b> <?= $penduduk['status_ekonomi']; ?></p>
                            <p class="card-text"><b>RT : </b> <?= $penduduk['rt']; ?></p>
                            <p class="card-text"><b>RW : </b> <?= $penduduk['rw']; ?></p>
                            <p class="card-text"><b>Dusun : </b> <?= $penduduk['dusun']; ?></p>
                            <p class="card-text"><small class="text-muted">Dibuat Pada <?= $penduduk['created_at']; ?></small></p>
                            <p class="card-text"><small class="text-muted">Diubah Pada <?= $penduduk['updated_at']; ?></small></p>

                            <a href="/penduduk/edit/<?= $penduduk['id']; ?>" class="btn btn-warning">Ubah</a>

                            <form action="/penduduk/<?= $penduduk['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus <?= $penduduk['nama']; ?> ?');">Hapus</button>
                            </form>

                            <a href="" class="btn btn-info">Cetak</a>
                            <br></br>
                            <a href="/penduduk/datapenduduk" class="btn btn-lg btn-primary" disabled>Kembali</a>
                        </div> -->
        </div>
    </div>
</div>

</div>
</div>
</div>
<?= $this->endSection(); ?>