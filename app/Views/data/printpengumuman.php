
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

            <p style="text-align: right; margin: right 35px;">
            <?php $tanggal = ($penerima['created_at']);
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
     echo "Madusari, "  . $dayList[$day], "", date('d-m-Y', strtotime($penerima['created_at'])); ?> </p>

            <p style="text-align: left; line-height: 1px;">Nomor &emsp; &emsp;: &emsp;&emsp;/&emsp;&emsp;/&emsp;&emsp;/</p>
            <p style="text-align: left;">Lampiran &emsp;:</p>
            <p style="text-align: left;">Perihal &emsp; &emsp;: <?= $penerima['judul']; ?></p>
            <p style="text-align: right; margin: right 130px;">DI - TEMPAT</p>
            <br>
            <br>
            <p style="margin: left 100px;"><?= $penerima['pengumuman']; ?></p>

<p style="margin-top: 200px; text-align: right; margin-right: 30px;">KEPALA DESA MADUSARI</p>
<p style="margin-top: 70px; text-align: right; margin-right: 65px;"> <strong>SUKRAYATNO</strong></p>
            <!-- <table class="table table-striped mt-5" style="line-height: 40px;">
                <tr>
                    <th width="20px%" style="text-align: left;">Judul</th>
                    <td width="8%">:</td>
                    <td><?= $penerima['judul']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Pengumuman</th>
                    <td>:</td>
                    <td><?= $penerima['pengumuman']; ?></td>
                </tr>
                <tr>
                <th style="text-align: left;">Tanggal</th>
                    <td>:</td>
                <td> <?php $tanggal = ($penerima['created_at']);
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
     echo " "  . $dayList[$day], ", ", date('d-m-Y', strtotime($penerima['created_at'])); ?>
                </tr>
            </table> -->
            
        </div>
    </div>
</div>

</div>
</div>
</div>
