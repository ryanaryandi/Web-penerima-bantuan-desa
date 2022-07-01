<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<script src="https://use.fontawesome.com/4de1630ec9.js"></script>
<div class="container">
    <div class="col-8">

        <h2 class="my-4">Form Tambah Pengumuman</h2>

        <form action="/pengumuman/save" method="POST" class="row gy-2 gx-3 align-items-center">

            <?= csrf_field(); ?>

            <table class="table table-striped table-middle">

                <?= csrf_field(); ?>
                <tr>
                    <th width="20%">Judul</th>
                    <td width="1%">:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" autofocus value="<?= old('judul'); ?>">
                        <p style="color:red;"> <?= $validation->getError('judul'); ?></p>
                    </td>
                </tr>

                <tr>
                    <th>Pengumuman</th>
                    <td>:</td>
                    <td><textarea class="form-control <?= ($validation->hasError('pengumuman')) ? 'is-invalid' : ''; ?>" name="pengumuman"><?= old('pengumuman'); ?></textarea>
                        <p style="color:red;"> <?= $validation->getError('pengumuman'); ?></p>
                    </td>
                </tr>

            </table>

            <button type="submit" class="btn btn-success mb-5"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
            <a href="/pengumuman" class="btn btn-danger mb-5 ml-3" disabled><i class="fa fa-times" aria-hidden="true"></i> Batal</a>

            <!-- 
            <div class="row p-3">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" autofocus value="<?= old('nik'); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('nik'); ?>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row m-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row p-3">
                <label for="jeniskelamin" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <select class="form-select <?= ($validation->hasError('jeniskelamin')) ? 'is-invalid' : ''; ?>" id="jeniskelamin" name="jeniskelamin">
                        <option selected><?= old('jeniskelamin'); ?></option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('jeniskelamin'); ?>
                    </div>
                </div>
            </div> -->
            <!-- 
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-select <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" id="status" name="status">
                        <option selected><?= old('status'); ?></option>
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('status'); ?>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row mb-3">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <select class="form-select <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>" id="agama" name="agama">
                        <option selected><?= old('agama'); ?></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristem</option>
                        <option value="Budha">Budha</option>
                        <option value="Kongucu">Konghucu</option>
                        <option value="Katolik">Katolik</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('agama'); ?>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row mb-3">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <select class="form-select <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" id="pekerjaan" name="pekerjaan">
                        <option selected><?= old('pekerjaan'); ?></option>
                        <option value="Petani">Petani</option>
                        <option value="Buruh">Buruh</option>
                        <option value="PNS">PNS</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('pekerjaan'); ?>
                    </div>
                </div>
            </div> -->


            <!-- <div class="row mb-3">
                <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                <div class="col-sm-10">
                    <select class="form-select <?= ($validation->hasError('pendidikan')) ? 'is-invalid' : ''; ?>" id="pendidikan" name="pendidikan">
                        <option selected><?= old('pendidikan'); ?></option>
                        <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('pendidikan'); ?>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row mb-3">
                <label for="statusekonomi" class="col-sm-2 col-form-label">Status Ekonomi</label>
                <div class="col-sm-10">
                    <select class="form-select <?= ($validation->hasError('statusekonomi')) ? 'is-invalid' : ''; ?>" id="statusekonomi" name="statusekonomi">
                        <option selected><?= old('statusekonomi'); ?></option>
                        <option value="Mampu">Mampu</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Tidak Mampu">Tidak Mampu</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('statusekonomi'); ?>
                    </div>
                </div>
            </div> -->
            <!-- 
            <div class="row mb-3">
                <label for="rt" class="col-sm-2 col-form-label">RT</label>
                <div class="col-sm-10">
                    <select class="form-select <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" id="rt" name="rt">
                        <option selected><?= old('rt'); ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('rt'); ?>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row mb-3">
                <label for="rw" class="col-sm-2 col-form-label">RW</label>
                <div class="col-sm-10">
                    <select class="form-select <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" id="rw" name="rw">
                        <option selected><?= old('rw'); ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('rw'); ?>
                    </div>
                </div>
            </div> -->
            <!-- 
            <div class="row mb-3">
                <label for="dusun" class="col-sm-2 col-form-label">Dusun</label>
                <div class="col-sm-10">
                    <select class="form-select <?= ($validation->hasError('dusun')) ? 'is-invalid' : ''; ?>" id="dusun" name="dusun">
                        <option selected><?= old('dusun'); ?></option>
                        <option value="Cipicung">Cipicung</option>
                        <option value="Banjarwaru">Banjarwaru</option>
                        <option value="Ciupas">Ciupas</option>
                        <option value="Cimalati">Cimalati</option>
                    </select>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        <?= $validation->getError('dusun'); ?>
                    </div>
                </div>
            </div> -->

        </form>
    </div>
</div>


<?= $this->endSection(); ?>