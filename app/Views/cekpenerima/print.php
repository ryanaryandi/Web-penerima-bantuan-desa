<div class="container">
    <div class="row">
        <div class="col-8">
            <h3 style="text-align: center;">PEMERINTAH KABUPATEN CILACAP</h3>
            <h3 style="text-align: center;">KECAMATAN WANAREJA</h3>
            <h3 class="mb-5" style="text-align: center;">DESA MADUSARI</h3>
            <HR WIDTH=100>
            <h4 style="text-align: center;">Bukti Penerima Bantuan</h4>

            <table class="table table-striped mt-5" cellpadding="10" cellspacing="0">
                <tr>
                    <th width="60px%" style="text-align: left;">NIK</th>
                    <td width="8%">:</td>
                    <td><?= $penerima['nik']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Nama</th>
                    <td>:</td>
                    <td><?= $penerima['nama']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Jadwal Pengambilan</th>
                    <td>:</td>
                    <td><?php echo ($penerima['waktu_pengambilan'] != '0000-00-00') ? date('d-m-Y', strtotime($penerima['waktu_pengambilan'])) : '' ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Keterangan</th>
                    <td>:</td>
                    <td><?= $penerima['keterangan']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

</div>
</div>
</div>