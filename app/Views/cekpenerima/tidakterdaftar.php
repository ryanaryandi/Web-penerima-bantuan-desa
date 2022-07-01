<?= $this->extend('layout/templateUser'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Data Penerima Bantuan</h1>
            <div class="cari">
                <form action="/cekpenerima/cekpenerima" method="POST">
                    <div class="input-group ml-3 mt-5" style="width:300px">
                        <input type="text" class="form-control" placeholder="Masukan NIK Anda" name="kunci">
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
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>


                    </tbody>
                </table>
            </div>



        </div>
    </div>
</div>

<?= $this->endSection(); ?>