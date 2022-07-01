
<div style="position: absolute; left:80; right: 0; top: 60; bottom: 0;">
<img src="img/cilacaphitamputih.jpg" 
         style="width: 20mm; height: 27mm; margin: 0;" />
        </div>

<div class="container">
    <div class="row">
        <div class="col-8">

      <div style="text-align: center; line-height: 5px">

            <p style="font-size: 20px;">PEMERINTAH KABUPATEN CILACAP</p>
            <p style="font-size: 20px;">KECAMATAN WANAREJA</p>
            <h1>KEPALA DESA MADUSARI</h1>
            <p>Jln. Inpres Madura Tambaksari</p>
            <p style="font-size: 15px;">MADUSARI</p>
      </div>
           
            <p style="text-align: right; line-height: 1px;">Kode Pos 53265</p>
            <p style="border-width: 5px; border-top-style: solid; line-height: 1px;"></p>
            <p style="text-align: center;font-size: 15px;">DATA DIRI WARGA</p>
            <table class="table table-striped mt-2" style="line-height: 40px;">
                <tr>
                    <th width="50%" style="text-align: left;">NIK</th>
                    <td width="8%">:</td>
                    <td><?= $penduduk['nik']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Nama</th>
                    <td>:</td>
                    <td><?= $penduduk['nama']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Tanggal Lahir</th>
                    <td>:</td>
                    <td><?php echo ($penduduk['tanggal_bulan_lahir'] != '0000-00-00') ? date('d-m-Y', strtotime($penduduk['tanggal_bulan_lahir'])) : '' ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Tempat Lahir</th>
                    <td>:</td>
                    <td><?= $penduduk['tempat_lahir']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Jenis Kelamin</th>
                    <td>:</td>
                    <td><?= $penduduk['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Status</th>
                    <td>:</td>
                    <td><?= $penduduk['status']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Agama</th>
                    <td>:</td>
                    <td><?= $penduduk['agama']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">pekerjaan</th>
                    <td>:</td>
                    <td><?= $penduduk['pekerjaan']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Pendidikan</th>
                    <td>:</td>
                    <td><?= $penduduk['pendidikan']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Status Ekonomi</th>
                    <td>:</td>
                    <td><?= $penduduk['status_ekonomi']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Luas Lantai Bangunan</th>
                    <td>:</td>
                    <td><?= $penduduk['luas_lantai_bangunan']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Jenis Lantai Bangunan</th>
                    <td>:</td>
                    <td><?= $penduduk['jenis_lantai_bangunan']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Jenis Dinding Bangunan </th>
                    <td>:</td>
                    <td><?= $penduduk['jenis_dinding_bangunan']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Wc</th>
                    <td>:</td>
                    <td><?= $penduduk['wc']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Sumber Penerangan</th>
                    <td>:</td>
                    <td><?= $penduduk['sumber_penerangan']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Sumber Air</th>
                    <td>:</td>
                    <td><?= $penduduk['sumber_air']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Bahan Bakar </th>
                    <td>:</td>
                    <td><?= $penduduk['bahan_bakar']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Konsumsi Gizi</th>
                    <td>:</td>
                    <td><?= $penduduk['konsumsi_gizi']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Pakaian</th>
                    <td>:</td>
                    <td><?= $penduduk['pakaian']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Makan</th>
                    <td>:</td>
                    <td><?= $penduduk['makan']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Pengobatan</th>
                    <td>:</td>
                    <td><?= $penduduk['pengobatan']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Barang Berharga</th>
                    <td>:</td>
                    <td><?= $penduduk['barang_berharga']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">RT</th>
                    <td>:</td>
                    <td><?= $penduduk['rt']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">RW</th>
                    <td>:</td>
                    <td><?= $penduduk['rw']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Dusun</th>
                    <td>:</td>
                    <td><?= $penduduk['dusun']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

</div>
</div>
</div>