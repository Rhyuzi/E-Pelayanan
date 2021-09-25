<ul class="ul2">
    <li class="col-sm-3 li2"><a href="<?php echo site_url('kematian');?>">Persyaratan</a></li>
    <li class="col-sm-3 li2"><a href="<?php echo site_url('kematian');?>">Isian</a></li>
    <li class="col-sm-3 li2"><a href="<?php echo site_url('kematian');?>">Print Preview</a></li>
    <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('kematian');?>">Ubah</a></li>
</ul>
<div class="isian">
    <?php echo form_open('kematian/edit/'.$data_lama['no_reg']); ?>
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
                <label for="pekerjaan" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="text" name="umur" class="form-control" id="umur" value="<?= $data_lama['umur']; ?>">
                    <?php echo form_error('umur', '<small class="text-danger pl-3">', '</small>') ?>
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
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control mb-3" id="alamat" name="alamat" rows="3"><?= $data_lama['alamat']; ?></textarea>
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
                <label for="nik" class="col-sm-2 col-form-label">No. NIK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $data_lama['nik']; ?>">
                    <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="kk" class="col-sm-2 col-form-label">No. KK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kk" name="kk" value="<?= $data_lama['kk']; ?>">
                    <?php echo form_error('kk', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-row">
                <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Meninggal</label>
                <div class="col-sm-5 mb-3">
                    <input type="text" class="form-control" id="tempat_wafat" name="tempat_wafat" value="<?= $data_lama['tempat']; ?>">
                    <?php echo form_error('tempat_wafat', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="col-sm-5 mb-3">
                    <input type="date" class="form-control" id="tanggal_wafat" name="tanggal_wafat"  value="<?= $data_lama['tgl_wafat']; ?>">
                    <?php echo form_error('tanggal_wafat', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="sebab" class="col-sm-2 col-form-label">Penyebab</label>
                <div class="col-sm-10">
                    <input type="text" name="sebab" class="form-control" id="sebab" value="<?= $data_lama['sebab']; ?>">
                    <?php echo form_error('sebab', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
        </div>
        <button type="submit" name="print" style="float: right">Selesai</button>
    <?php echo form_close(); ?>
</div>