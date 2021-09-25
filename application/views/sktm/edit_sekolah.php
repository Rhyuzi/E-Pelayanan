<ul class="ul2">
    <li class="col-sm-3 li2"><a href="<?php echo site_url('sekolah');?>">Persyaratan</a></li>
    <li class="col-sm-3 li2"><a href="<?php echo site_url('sekolah');?>">Isian</a></li>
    <li class="col-sm-3 li2"><a href="<?php echo site_url('sekolah');?>">Print Preview</a></li>
    <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('sekolah');?>">Ubah</a></li>
</ul>
<div class="isian">
    <?php echo form_open('sekolah/edit/'.$data_lama['no_reg']); ?>
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
                <label for="pemohon" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                <div class="col-sm-10">
                    <input type="text" name="pemohon" class="form-control" id="pemohon" value="<?= $data_lama['pemohon']; ?>">
                    <?php echo form_error('pemohon', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-row">
                <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                <div class="col-sm-5 mb-3">
                    <input type="text" class="form-control" id="tempat_lhr" name="tempat_lhr" value="<?= $data_lama['tempat_lhr']; ?>">
                    <?php echo form_error('tempat_lhr', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="col-sm-5 mb-3">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"  value="<?= $data_lama['tgl_lahir']; ?>">
                    <?php echo form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>') ?>
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
                <label for="kk" class="col-sm-2 col-form-label">No. KK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kk" name="kk" value="<?= $data_lama['kk']; ?>">
                    <?php echo form_error('kk', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="anak" class="col-sm-2 col-form-label">Nama Anak</label>
                <div class="col-sm-10">
                    <input type="text" name="anak" class="form-control" id="anak" value="<?= $data_lama['anak']; ?>">
                    <?php echo form_error('anak', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-row">
                <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                <div class="col-sm-5 mb-3">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $data_lama['tempat_lahir']; ?>">
                    <?php echo form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="col-sm-5 mb-3">
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  value="<?= $data_lama['tanggal_lahir']; ?>">
                    <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="sekolah" class="col-sm-2 col-form-label">Sekolah</label>
                <div class="col-sm-10">
                    <input type="text" name="sekolah" class="form-control" id="sekolah" value="<?= $data_lama['sekolah']; ?>">
                    <?php echo form_error('sekolah', '<small class="text-danger pl-3">', '</small>') ?>
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