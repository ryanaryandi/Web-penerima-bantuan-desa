<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<script src="https://use.fontawesome.com/4de1630ec9.js"></script>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="mt-4 mb-5">Detail Penerima Bantuan</h2>

            <a href="/penerimabantuan/edit/<?= $penerima['id']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>

            <form action="/penerimabantuan/delete/<?= $penerima['id']; ?>" method="POST" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus <?= $penerima['nama']; ?> ?');"><i class="fa fa-trash"></i> Hapus</button>
            </form>

            <a href="/penerimabantuan/detailprint/<?= $penerima['nik']; ?>" class="btn btn-info" target="_blank"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a>

            <table class="table table-striped mt-2">
                <tr>
                    <th width="20%">NIK</th>
                    <td width="1%">:</td>
                    <td><?= $penerima['nik']; ?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><?= $penerima['nama']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td><?php echo ($penerima['tanggal_bulan_lahir'] != '0000-00-00') ? date('d-m-Y', strtotime($penerima['tanggal_bulan_lahir'])) : '' ?></td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td><?= $penerima['tempat_lahir']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td><?= $penerima['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>:</td>
                    <td><?= $penerima['status']; ?></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td><?= $penerima['agama']; ?></td>
                </tr>
                <tr>
                    <th>pekerjaan</th>
                    <td>:</td>
                    <td><?= $penerima['pekerjaan']; ?></td>
                </tr>
                <tr>
                    <th>Pendidikan</th>
                    <td>:</td>
                    <td><?= $penerima['pendidikan']; ?></td>
                </tr>
                <tr>
                    <th>Status Ekonomi</th>
                    <td>:</td>
                    <td><?= $penerima['status_ekonomi']; ?></td>
                </tr>
                <tr>
                    <th>Luas Lantai Bangunan</th>
                    <td>:</td>
                    <td><?= $penerima['luas_lantai_bangunan']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Lantai Bangunan</th>
                    <td>:</td>
                    <td><?= $penerima['jenis_lantai_bangunan']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Dinding Bangunan </th>
                    <td>:</td>
                    <td><?= $penerima['jenis_dinding_bangunan']; ?></td>
                </tr>
                <tr>
                    <th>Wc</th>
                    <td>:</td>
                    <td><?= $penerima['wc']; ?></td>
                </tr>
                <tr>
                    <th>Sumber Penerangan</th>
                    <td>:</td>
                    <td><?= $penerima['sumber_penerangan']; ?></td>
                </tr>
                <tr>
                    <th>Sumber Air</th>
                    <td>:</td>
                    <td><?= $penerima['sumber_air']; ?></td>
                </tr>
                <tr>
                    <th>Bahan Bakar </th>
                    <td>:</td>
                    <td><?= $penerima['bahan_bakar']; ?></td>
                </tr>
                <tr>
                    <th>Konsumsi Gizi</th>
                    <td>:</td>
                    <td><?= $penerima['konsumsi_gizi']; ?></td>
                </tr>
                <tr>
                    <th>Pakaian</th>
                    <td>:</td>
                    <td><?= $penerima['pakaian']; ?></td>
                </tr>
                <tr>
                    <th>Makan</th>
                    <td>:</td>
                    <td><?= $penerima['makan']; ?></td>
                </tr>
                <tr>
                    <th>Pengobatan</th>
                    <td>:</td>
                    <td><?= $penerima['pengobatan']; ?></td>
                </tr>
                <tr>
                    <th>Barang Berharga</th>
                    <td>:</td>
                    <td><?= $penerima['barang_berharga']; ?></td>
                </tr>
                <tr>
                    <th>RT</th>
                    <td>:</td>
                    <td><?= $penerima['rt']; ?></td>
                </tr>
                <tr>
                    <th>RW</th>
                    <td>:</td>
                    <td><?= $penerima['rw']; ?></td>
                </tr>
                <tr>
                    <th>Dusun</th>
                    <td>:</td>
                    <td><?= $penerima['dusun']; ?></td>
                </tr>
                <tr>
                    <th>Jadwal Pengambilan</th>
                    <td>:</td>
                    <td> <?php $tanggal = ($penerima['waktu_pengambilan']);
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
     echo " "  . $dayList[$day], ", ", date('d-m-Y', strtotime($penerima['waktu_pengambilan'])); ?>
                </tr>
                <tr>
                    <th>Jenis Bantuan</th>
                    <td>:</td>
                    <td><?= $penerima['jenis_bantuan']; ?></td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>:</td>
                    <td><?= $penerima['keterangan']; ?></td>
                </tr>
                <tr>
                    <th>Dibuat</th>
                    <td>:</td>
                    <td>
                        <p class="card-text"><small class="text-muted"><?= $penerima['created_at']; ?></small></p>
                    </td>
                </tr>
                <tr>
                    <th>Diubah</th>
                    <td>:</td>
                    <td>
                        <p class="card-text"><small class="text-muted"><?= $penerima['updated_at']; ?></small></p>
                    </td>
                </tr>
            </table>

            <a href="/penerimabantuan" class="btn btn-primary mb-5" disabled><i class="fa fa-backward"></i> Kembali</a>

        </div>
    </div>
</div>

</div>
</div>
</div>
<?= $this->endSection(); ?>