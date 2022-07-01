<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<script src="https://use.fontawesome.com/4de1630ec9.js"></script>
<div class="container">
    <div class="col-8">
        <h2 class="my-4">Form Ubah Pengumuman</h2>

        <form action="/pengumuman/update/<?= $penduduk['id']; ?>" method="POST" class="row gy-2 gx-3 align-items-center">
            <?= csrf_field(); ?>

            <input type="hidden" value="<?= $penduduk['id']; ?>" name="id">

            <table class="table table-striped table-middle">
                <?= csrf_field(); ?>

                <tr>
                    <th width="20%">Judul</th>
                    <td width="1%">:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $penduduk['judul'] ?>">
                        <p style="color:red;"> <?= $validation->getError('judul'); ?></p>
                    </td>
                </tr>

                <tr>
                    <th>Pengumuman</th>
                    <td>:</td>
                    <td>
                        <textarea type="text" class="form-control <?= ($validation->hasError('pengumuman')) ? 'is-invalid' : ''; ?>" name="pengumuman"><?= (old('pengumuman')) ? old('pengumuman') : $penduduk['pengumuman'] ?> </textarea>
                        <p style="color:red;"> <?= $validation->getError('pengumuman'); ?></p>
                </tr>

            </table>

            <button type="submit" class="btn btn-success mb-5"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
            <a href="/pengumuman" class="btn btn btn-danger mb-5 ml-3" disabled> <i class="fa fa-times" aria-hidden="true"></i> Batal</a>
        </form>

    </div>
</div>


<?= $this->endSection(); ?>