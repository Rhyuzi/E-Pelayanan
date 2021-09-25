<ul class="ul2">
    <li class="col-sm-3 li2"><a href="<?php echo site_url('sekolah');?>">Persyaratan</a></li>
    <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('sekolah');?>">Isian</a></li>
    <li class="col-sm-3 li2"><a href="<?php echo site_url('sekolah');?>">Print Preview</a></li>
    <li class="col-sm-3 li2"><a href="<?php echo site_url('sekolah');?>">Ubah</a></li>
</ul>
<div class="isian">
    <?php echo form_open('sekolah/form'); ?>
        <!--nomor surat-->
        <div class="form-row">
            <label  for="no_reg" class="col-sm-2 col-form-label">No. Registrasi</label>
            <div class="col-md-10 mb-3">
                <input type="text" class="form-control" name="no_reg" placeholder="No. Reg">
                <?php echo form_error('no_reg', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>

        <!--utama-->
        <div>
            <div class="form-group row">
                <label for="pemohon" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                <div class="col-sm-10">
                    <input type="text" name="pemohon" class="form-control" id="pemohon" placeholder="Nama Lengkap">
                    <?php echo form_error('pemohon', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-row">
                <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                <div class="col-sm-5 mb-3">
                    <input type="text" class="form-control" id="tempat_lhr" name="tempat_lhr" placeholder="Tempat">
                    <?php echo form_error('tempat_lhr', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="col-sm-5 mb-3">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                    <?php echo form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
                    <?php echo form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control mb-3" id="alamat" name="alamat" rows="3"></textarea>
                    <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                    <!--pengantar-->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="rt" name="rt" placeholder="RT">
                            <?php echo form_error('rt', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="rw" name="rw" placeholder="RW">
                            <?php echo form_error('rw', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="kk" class="col-sm-2 col-form-label">No. KK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kk" name="kk" placeholder="No. Kartu Keluarga">
                    <?php echo form_error('kk', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="anak" class="col-sm-2 col-form-label">Nama Anak</label>
                <div class="col-sm-10">
                    <input type="text" name="anak" class="form-control" id="anak" placeholder="Nama Lengkap">
                    <?php echo form_error('anak', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-row">
                <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                <div class="col-sm-5 mb-3">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat">
                    <?php echo form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="col-sm-5 mb-3">
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                    <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="sekolah" class="col-sm-2 col-form-label">Sekolah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="Sekolah">
                    <?php echo form_error('sekolah', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
            </div>
        </div>

        <!--pengantar 2-->
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="reg_rw">No. Pengantar</label>
                <input type="text" class="form-control" id="reg_rw" name="reg_rw" placeholder="No. Surat Pengantar">
                <?php echo form_error('reg_rw', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom01">Tanggal</label>
                <input type="date" class="form-control" id="tgl_reg" name="tgl_reg" placeholder="Tanggal Surat Pengantar">
                <?php echo form_error('tgl_reg', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
        </div>

        <button type="submit" name="print" style="float: right">Cetak</button>
    <?php echo form_close(); ?>
</div>