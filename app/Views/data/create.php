<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<script src="https://use.fontawesome.com/4de1630ec9.js"></script>
<div class="container">
    <div class="col-8">

        <h2 class="my-4">Form Tambah Data Penduduk</h2>

        <form action="/penduduk/save" method="POST" class="row gy-2 gx-3 align-items-center">

            <?= csrf_field(); ?>

            <table class="table table-striped table-middle">

                <?= csrf_field(); ?>

                <tr>
                    <th width="20%">NIK</th>
                    <td width="1%">:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" name="nik" autofocus value="<?= old('nik'); ?>">
                        <p style="color:red;"> <?= $validation->getError('nik'); ?></p>
                    </td>
                </tr>

                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" value="<?= old('nama'); ?>">
                        <p style="color:red;"> <?= $validation->getError('nama'); ?></p>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <input type="date" class="form-control datepicker input-md <?= ($validation->hasError('tanggallahir')) ? 'is-invalid' : ''; ?>" name="tanggallahir" size="20" value="<?= old('tanggallahir'); ?>" />
                            </div>
                            <span class="help-block">
                            </span>
                            <p style="color:red;"> <?= $validation->getError('tanggallahir'); ?></p>
                        </div>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('tempatlahir')) ? 'is-invalid' : ''; ?>" name="tempatlahir" value="<?= old('tempatlahir'); ?>">
                        <p style="color:red;"> <?= $validation->getError('tempatlahir'); ?></p>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('jeniskelamin')) ? 'is-invalid' : ''; ?>" name="jeniskelamin">
                            <option value="<?= old('jeniskelamin'); ?>"><?= old('jeniskelamin'); ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('jeniskelamin'); ?></p>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" name="status">
                            <option value="<?= old('status'); ?>"><?= old('status'); ?></option>
                            <option value="Lajang">Lajang</option>
                            <option value="Menikah">Menikah</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('status'); ?></p>
                </tr>

                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>" name="agama">
                            <option value="<?= old('agama'); ?>"><?= old('agama'); ?></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('agama'); ?></p>
                </tr>

                <tr>
                    <th>Pekerjaan</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" name="pekerjaan">
                            <option value="<?= old('pekerjaan'); ?>"><?= old('pekerjaan'); ?></option>
                            <option value="Petani">Petani</option>
                            <option value="PNS">PNS</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('pekerjaan'); ?></p>
                </tr>

                <tr>
                    <th>Pendidikan</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('pendidikan')) ? 'is-invalid' : ''; ?>" name="pendidikan">
                            <option value="<?= old('pendidikan'); ?>"><?= old('pendidikan'); ?></option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <OPtion value="S1">S1</OPtion>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                        <p style=" color:red;"><?= $validation->getError('pendidikan'); ?></p>
                </tr>

                <tr>
                    <th>Status Ekonomi</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('statusekonomi')) ? 'is-invalid' : ''; ?>" name="statusekonomi">
                            <option value="<?= old('statusekonomi'); ?>"><?= old('statusekonomi'); ?></option>
                            <option value="Tidak Mampu">Tidak Mampu</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Mampu">Mampu</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('statusekonomi'); ?></p>
                </tr>

                <tr>
                    <th>Luas Lantai Bangunan</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('luaslantaibangunan')) ? 'is-invalid' : ''; ?>" name="luaslantaibangunan">
                            <option value="<?= old('luaslantaibangunan'); ?>"><?= old('luaslantaibangunan'); ?></option>
                            <option value="Kurang Dari 8m Persegi">Kurang Dari 8m Persegi</option>
                            <option value="Lebih Dari 8m Persegi">Lebih Dari 8m Persegi</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('luaslantaibangunan'); ?></p>
                </tr>

                <tr>
                    <th>Jenis Lantai Bangunan</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('jenislantaibangunan')) ? 'is-invalid' : 'jenislantaibangunan'; ?>" name="jenislantaibangunan">
                            <option value="<?= old('jenislantaibangunan'); ?>"><?= old('jenislantaibangunan'); ?></option>
                            <option value="Tanah">Tanah</option>
                            <option value="Bambu">Bambu</option>
                            <option value="Kayu Murah">Kayu Murah</option>
                            <option value="Keramik">Keramik</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('jenislantaibangunan'); ?></p>
                </tr>

                <tr>
                    <th>Jenis Dinding Bangunan</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('jenisdindingbangunan')) ? 'is-invalid' : 'jenisdindingbangunan'; ?>" name="jenisdindingbangunan">
                            <option value="<?= old('jenisdindingbangunan'); ?>"><?= old('jenisdindingbangunan'); ?></option>
                            <option value="Bambu">Bambu</option>
                            <option value="Rumbia">Rumbia</option>
                            <option value="Kayu Murah">Kayu Murah</option>
                            <option value="Batu Bata">Batu Bata</option>
                            <option value="Tembok">Tembok</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('jenisdindingbangunan'); ?></p>
                </tr>

                <tr>
                    <th>WC</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('wc')) ? 'is-invalid' : 'wc'; ?>" name="wc">
                            <option value="<?= old('wc'); ?>"><?= old('wc'); ?></option>
                            <option value="Sendiri">Sendiri</option>
                            <option value="Bersama">Bersama</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('wc'); ?></p>
                </tr>

                <tr>
                    <th>Sumber Penerangan</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('sumberpenerangan')) ? 'is-invalid' : 'sumberpenerangan'; ?>" name="sumberpenerangan">
                            <option value="<?= old('sumberpenerangan'); ?>"><?= old('sumberpenerangan'); ?></option>
                            <option value="Listrik">Listrik</option>
                            <option value="Cempor">Cempor</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('sumberpenerangan'); ?></p>
                </tr>

                <tr>
                    <th>Sumber Air</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('sumberair')) ? 'is-invalid' : 'sumberair'; ?>" name="sumberair">
                            <option value="<?= old('sumberair'); ?>"><?= old('sumberair'); ?></option>
                            <option value="Sumur">Sumur</option>
                            <option value="Sungai">Sungai</option>
                            <option value="Air Hujan">Air Hujan</option>
                            <option value="PAM">PAM</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('sumberair'); ?></p>
                </tr>

                <tr>
                    <th>Bahan Bakar</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('bahanbakar')) ? 'is-invalid' : 'bahanbakar'; ?>" name="bahanbakar">
                            <option value="<?= old('bahanbakar'); ?>"><?= old('bahanbakar'); ?></option>
                            <option value="Kayu Bakar">Kayu Bakar</option>
                            <option value="Gas">Gas LPG</option>
                            <option value="Listrik">Listrik</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('bahanbakar'); ?></p>
                </tr>

                <tr>
                    <th>Konsumsi Gizi</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('konsumsigizi')) ? 'is-invalid' : 'konsumsigizi'; ?>" name="konsumsigizi">
                            <option value="<?= old('konsumsigizi'); ?>"><?= old('konsumsigizi'); ?></option>
                            <option value="Baik">Baik</option>
                            <option value="Seadanya">Seadanya</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('konsumsigizi'); ?></p>
                </tr>

                <tr>
                    <th>Pakaian</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('pakaian')) ? 'is-invalid' : 'pakaian'; ?>" name="pakaian">
                            <option value="<?= old('pakaian'); ?>"><?= old('pakaian'); ?></option>
                            <option value="Pembelian Kapan Saja">Pembelian Kapan Saja</option>
                            <option value="Pembelian Per 1 Tahun Sekali">Pembelian Per 1 Tahun Sekali</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('pakaian'); ?></p>
                </tr>

                <tr>
                    <th>Makan</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('makan')) ? 'is-invalid' : 'makan'; ?>" name="makan">
                            <option value="<?= old('makan'); ?>"><?= old('makan'); ?></option>
                            <option value="Terpenuhi">Terpenuhi</option>
                            <option value="Seadanya">Seadanya</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('makan'); ?></p>
                </tr>

                <tr>
                    <th>Pengobatan</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('pengobatan')) ? 'is-invalid' : 'pengobatan'; ?>" name="pengobatan">
                            <option value="<?= old('pengobatan'); ?>"><?= old('pengobatan'); ?></option>
                            <option value="Mampu Membayar ">Mampu Membayar</option>
                            <option value="Tidak Mampu Membayar">Tidak Mampu Membayar</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('pengobatan'); ?></p>
                </tr>

                <tr>
                    <th>Barang Berharga</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('barangberharga')) ? 'is-invalid' : 'barangberharga'; ?>" name="barangberharga">
                            <option value="<?= old('barangberharga'); ?>"><?= old('barangberharga'); ?></option>
                            <option value="Mempunyai">Mempunyai</option>
                            <option value="Tidak Punya">Tidak Punya</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('barangberharga'); ?></p>
                </tr>

                <tr>
                    <th>RT</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" name="rt">
                            <option value="<?= old('rt'); ?>"><?= old('rt'); ?></option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('rt'); ?></p>
                </tr>

                <tr>
                    <th>RW</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" name="rw">
                            <option value="<?= old('rw'); ?>"><?= old('rw'); ?></option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('rw'); ?></p>
                </tr>

                <tr>
                    <th>Dusun</th>
                    <td>:</td>
                    <td>
                        <select class="form-control selectpicker  <?= ($validation->hasError('dusun')) ? 'is-invalid' : ''; ?>" name="dusun">
                            <option value="<?= old('dusun'); ?>"><?= old('dusun'); ?></option>
                            <option value="Cimalati">Cimalati</option>
                            <option value="Ciupas">Ciupas</option>
                            <option value="Cipicung">Cipicung</option>
                            <option value="Banjarwaru">Banjarwaru</option>
                        </select>
                        <p style="color:red;"> <?= $validation->getError('dusun'); ?></p>
                </tr>

            </table>

            <button type="submit" class="btn btn-success mb-5"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
            <a href="/datapenduduk" class="btn btn-danger mb-5 ml-3" disabled><i class="fa fa-times" aria-hidden="true"></i> Batal</a>

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