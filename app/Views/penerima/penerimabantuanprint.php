<style>
    .garis>table>tbody>tr>* {
        text-align: center;
        background-color: aqua;
    }

    .garis,
    table,
    thead,
    tr,
    th {
        text-align: center;
    }

    h4 {
        font-family: sans-serif;
    }

    table {
        font-family: Arial, Helvetica, sans-serif;
        color: #000000;
        text-shadow: 1px 1px 0px #fff;
        border: 1px solid;
        border-color: #000000;
    }

    table th {
        padding: 8px 8px;
        border-left: 1px solid #000000;
        border-bottom: 1px solid #000000;
    }


    table tr {
        text-align: center;
        padding-left: 20px;
    }

    table td:first-child {
        text-align: left;
        padding-left: 20px;
        border-left: 0;
    }

    table td {
        padding: 8px 8px;
        border-bottom: 1px solid #000000;
        border-left: 1px solid #000000;

    }
</style>


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
            <p style="text-align: center;font-size: 15px;">DATA PENERIMA BANTUAN MASYARAKAT</p>
    <div class="garis">
        <table class="table table-striped" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">L/P</th>
                    <th scope="col">Status</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Status Ekonomi</th>
                    <th scope="col">RT</th>
                    <th scope="col">RW</th>
                    <th scope="col">Dusun</th>
                    <th scope="col">Ambil</th>
                    <th scope="col">Bantuan</th>
                    <th scope="col">Ket</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($penerima as $p) : ?>
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
                        <td><?= $p['rt']; ?></td>
                        <td><?= $p['rw']; ?></td>
                        <td><?= $p['dusun']; ?></td>
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

</div>
</div>
</div>