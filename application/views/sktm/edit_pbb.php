<ul class="ul2">
    <li class="col-sm-3 li2"><a href="<?php echo site_url('pbb');?>">Persyaratan</a></li>
    <li class="col-sm-3 li2"><a href="<?php echo site_url('pbb');?>">Isian</a></li>
    <li class="col-sm-3 li2"><a href="<?php echo site_url('pbb');?>">Print Preview</a></li>
    <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('pbb');?>">Ubah</a></li>
</ul>
<div class="isian">
    <?php echo form_open('pbb/edit/'.$data_lama['no_reg']); ?>
        <!--nomor surat-->
        <div class="form-row">
            <label  for="no_reg" class="col-sm-2 col-form-label">No. Registrasi</label>
            <div class="col-md-10 mb-3">
                <input type="text" class="form-control" name="no_reg" value="<?= $data_lama['no_reg']; ?>">
                <?php echo form_error('no_reg', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <!--utama-->
        <div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $data_lama['nama']; ?>">
                    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label">No. NIK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $data_lama['nik']; ?>">
                    <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_kk" class="col-sm-2 col-form-label">No. KK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kk" name="kk" value="<?= $data_lama['kk']; ?>">
                    <?php echo form_error('kk', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kelamin" id="laki-laki" value="Laki-laki">
                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                    <?php echo form_error('kelamin', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-row">
                <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                <div class="col-sm-5 mb-3">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $data_lama['tempat_lhr']; ?>">
                    <?php echo form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="col-sm-5 mb-3">
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  value="<?= $data_lama['tgl_lahir']; ?>">
                    <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                <div class="col-sm-10">
                    <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" value="<?= $data_lama['kewarganegaraan']; ?>">
                    <?php echo form_error('kewarganegaraan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="status_perkawinan" class="col-sm-2 col-form-label">Status Perkawinan</label>
                <div class="col-sm-10">
                    <select class="form-control" id="status_perkawinan" name="status_perkawinan"  value="<?= $data_lama['status']; ?>">
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Ceri Mati</option>
                    </select>
                    <?php echo form_error('status_perkawinan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?= $data_lama['pekerjaan']; ?>">
                    <?php echo form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <select class="form-control" id="agama" name="agama" value="<?= $data_lama['agama']; ?>">
                        <option value="Islam">Islam</option>
                        <option  value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                    </select>
                    <?php echo form_error('agama', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control mb-3" id="alamat" name="alamat" rows="3"  value="<?= $data_lama['alamat']; ?>"></textarea>
                    <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                    <!--pengantar-->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="rt" class="col-sm-2 col-form-label">RT</label>
                            <input type="text" class="form-control" id="rt" name="rt" value="<?= $data_lama['rt']; ?>">
                            <?php echo form_error('rt', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="rw" class="col-sm-2 col-form-label">RW</label>
                            <input type="text" class="form-control" id="rw" name="rw" value="<?= $data_lama['rw']; ?>">
                            <?php echo form_error('rw', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="sppt" class="col-sm-2 col-form-label">No. Objek Pajak</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sppt" name="sppt" value="<?= $data_lama['no_sppt']; ?>">
                    <?php echo form_error('sppt', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="karena" class="col-sm-2 col-form-label">Karena</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="karena" name="karena" value="<?= $data_lama['karena']; ?>">
                    <?php echo form_error('karena', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
        </div>

        <!--pengantar 2-->
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="reg_rw">No. Pengantar</label>
                <input type="text" class="form-control" id="reg_rw" name="reg_rw" value="<?= $data_lama['reg_rw']; ?>">
                <?php echo form_error('reg_rw', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom01">Tanggal</label>
                <input type="date" class="form-control" id="tgl_reg" name="tgl_reg" value="<?= $data_lama['tgl_reg']; ?>">
                <?php echo form_error('reg_rw', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
        </div>

        <button type="submit" name="print" style="float: right">Selesai</button>
    <?php echo form_close(); ?>
</div>