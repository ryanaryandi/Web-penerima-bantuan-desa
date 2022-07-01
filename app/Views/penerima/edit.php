<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<script src="https://use.fontawesome.com/4de1630ec9.js"></script>
<div class="container">
    <div class="col-10">
        <h2 class="my-4">Form Ubah Data Penerima Bantuan</h2>

        <form action="/penerimabantuan/update/<?= $penerima['id']; ?>/<?= $penerima['nik']; ?>" method="POST" class="row gy-2 gx-3 align-items-center">
            <?= csrf_field(); ?>

            <input type="hidden" value="<?= $penerima['id']; ?>" name="id">

            <table class="table table-striped table-middle">
                <?= csrf_field(); ?>

                <tr>
                    <th width="20%">NIK</th>
                    <td width="1%">:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" name="nik" autofocus value="<?= (old('nik')) ? old('nik') : $penerima['nik'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('nik'); ?></p>
                    </td>
                </tr>

                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" value="<?= (old('nama')) ? old('nama') : $penerima['nama'] ?>" readonly='readonly'>
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
                                <input type="text" class="form-control datepicker input-md <?= ($validation->hasError('tanggallahir')) ? 'is-invalid' : ''; ?>" name="tanggallahir" size="20" value="<?= (old('tanggallahir')) ? old('tanggallahir') : $penerima['tanggal_bulan_lahir'] ?>" readonly='readonly' />
                            </div>
                            <span class="help-block">
                            </span>
                            <p style="color:red;"> <?= $validation->getError('tanggallahir'); ?></p>
                        </div>



                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('tempatlahir')) ? 'is-invalid' : ''; ?>" name="tempatlahir" value="<?= (old('tempatlahir')) ? old('tempatlahir') : $penerima['tempat_lahir'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('tempatlahir'); ?></p>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('jeniskelamin')) ? 'is-invalid' : ''; ?>" name="jeniskelamin" value="<?= (old('jeniskelamin')) ? old('jeniskelamin') : $penerima['jenis_kelamin'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('jeniskelamin'); ?></p>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" name="status" value="<?= (old('status')) ? old('status') : $penerima['status'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('status'); ?></p>
                </tr>

                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>" name="agama" value="<?= (old('agama')) ? old('agama') : $penerima['agama'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('agama'); ?></p>
                </tr>

                <tr>
                    <th>Pekerjaan</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" name="pekerjaan" value="<?= (old('pekerjaan')) ? old('pekerjaan') : $penerima['pekerjaan'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('pekerjaan'); ?></p>
                </tr>

                <tr>
                    <th>Pendidikan</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('pendidikan')) ? 'is-invalid' : ''; ?>" name="pendidikan" value="<?= (old('pendidikan')) ? old('pendidikan') : $penerima['pendidikan'] ?>" readonly='readonly'>
                        <p style=" color:red;"><?= $validation->getError('pendidikan'); ?></p>
                </tr>

                <tr>
                    <th>Status Ekonomi</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('statusekonomi')) ? 'is-invalid' : ''; ?>" name="statusekonomi" value="<?= (old('statusekonomi')) ? old('statusekonomi') : $penerima['status_ekonomi'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('statusekonomi'); ?></p>
                </tr>

                <tr>
                    <th>Luas Lantai Bangunan</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('luaslantaibangunan')) ? 'is-invalid' : ''; ?>" name="luaslantaibangunan" value="<?= (old('luaslantaibangunan')) ? old('luaslantaibangunan') : $penerima['luas_lantai_bangunan'] ?>" readonly='readonly'>
                       
                </tr>

                <tr>
                    <th>Jenis Lantai Bangunan</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('jenislantaibangunan')) ? 'is-invalid' : ''; ?>" name="jenislantaibangunan" value="<?= (old('jenislantaibangunan')) ? old('jenislantaibangunan') : $penerima['jenis_lantai_bangunan'] ?>" readonly='readonly'>
                       
                </tr>

                <tr>
                    <th>Jenis Dinding Bangunan</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('jenisdindingbangunan')) ? 'is-invalid' : ''; ?>" name="jenisdindingbangunan" value="<?= (old('jenisdindingbangunan')) ? old('jenisdindingbangunan') : $penerima['jenis_dinding_bangunan'] ?>" readonly='readonly'>
                       
                </tr>

                <tr>
                    <th>WC</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('wc')) ? 'is-invalid' : ''; ?>" name="wc" value="<?= (old('wc')) ? old('wc') : $penerima['wc'] ?>" readonly='readonly'>
                       
                </tr>

                <tr>
                    <th>Sumber Penerangan</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('sumberpenerangan')) ? 'is-invalid' : ''; ?>" name="sumberpenerangan" value="<?= (old('sumberpenerangan')) ? old('sumberpenerangan') : $penerima['sumber_penerangan'] ?>" readonly='readonly'>
                     
                </tr>

                <tr>
                    <th>Sumber Air</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('sumberair')) ? 'is-invalid' : ''; ?>" name="sumberair" value="<?= (old('sumberair')) ? old('sumberair') : $penerima['sumber_air'] ?>" readonly='readonly'>
                      
                </tr>

                <tr>
                    <th>Bahan Bakar</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('bahanbakar')) ? 'is-invalid' : ''; ?>" name="bahanbakar" value="<?= (old('bahanbakar')) ? old('bahanbakar') : $penerima['bahan_bakar'] ?>" readonly='readonly'>
                        
                </tr>

                <tr>
                    <th>Konsumsi Gizi</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('konsumsigizi')) ? 'is-invalid' : ''; ?>" name="konsumsigizi" value="<?= (old('konsumsigizi')) ? old('konsumsigizi') : $penerima['konsumsi_gizi'] ?>" readonly='readonly'>
                       
                </tr>

                <tr>
                    <th>Pakaian</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('pakaian')) ? 'is-invalid' : ''; ?>" name="pakaian" value="<?= (old('pakaian')) ? old('pakaian') : $penerima['pakaian'] ?>" readonly='readonly'>
                       
                </tr>

                <tr>
                    <th>Makan</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('makan')) ? 'is-invalid' : ''; ?>" name="makan" value="<?= (old('makan')) ? old('makan') : $penerima['makan'] ?>" readonly='readonly'>
                       
                </tr>

                <tr>
                    <th>Pengobatan</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('pengobatan')) ? 'is-invalid' : ''; ?>" name="pengobatan" value="<?= (old('pengobatan')) ? old('pengobatan') : $penerima['pengobatan'] ?>" readonly='readonly'>
                       
                </tr>

                <tr>
                    <th>Barang Berharga</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('barangberharga')) ? 'is-invalid' : ''; ?>" name="barangberharga" value="<?= (old('barangberharga')) ? old('barangberharga') : $penerima['barang_berharga'] ?>" readonly='readonly'>
                       
                </tr>

                <tr>
                    <th>RT</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" name="rt" value="<?= (old('rt')) ? old('rt') : $penerima['rt'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('rt'); ?></p>
                </tr>

                <tr>
                    <th>RW</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" name="rw" value="<?= (old('rw')) ? old('rw') : $penerima['rw'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('rw'); ?></p>
                </tr>

                <tr>
                    <th>Dusun</th>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control <?= ($validation->hasError('dusun')) ? 'is-invalid' : ''; ?>" name="dusun" value="<?= (old('dusun')) ? old('dusun') : $penerima['dusun'] ?>" readonly='readonly'>
                        <p style="color:red;"> <?= $validation->getError('dusun'); ?></p>
                </tr>

                <tr>
                    <th>Jadwal Pengambilan</th>
                    <td>:</td>
                    <td>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                  
                                </span>
                                <input type="date" class="form-control datepicker input-md <?= ($validation->hasError('pengambilan')) ? 'is-invalid' : ''; ?>" name="pengambilan" size="20" value="<?= (old('pengambilan')) ? old('pengambilan') : $penerima['waktu_pengambilan'] ?>" />
                            </div>
                            <span class="help-block">
                            </span>
                            <p style="color:red;"> <?= $validation->getError('pengambilan'); ?></p>
                        </div>
                </tr>

                <tr>
                    <th>Jenis Bantuan</th>
                    <td>:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('jenisbantuan')) ? 'is-invalid' : ''; ?>" name="jenisbantuan" value="<?= (old('jenisbantuan')) ? old('jenisbantuan') : $penerima['jenis_bantuan'] ?>">
                        <p style="color:red;"> <?= $validation->getError('jenisbantuan'); ?></p>
                </tr>

                <tr>
                    <th>Keterangan</th>
                    <td>:</td>
                    <td><input type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" name="keterangan" value="<?= (old('keterangan')) ? old('keterangan') : $penerima['keterangan'] ?>">
                       
                </tr>
                
            </table>

            <button type="submit" class="btn btn-success mb-5"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
            <a onclick="history.back()" class="btn btn btn-danger mb-5 ml-3" disabled> <i class="fa fa-times" aria-hidden="true"></i> Batal</a>
        </form>
    </div>
</div>


<?= $this->endSection(); ?>