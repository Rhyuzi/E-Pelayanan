            <ul class="ul2">
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kelahiran');?>">Persyaratan</a></li>
                <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('kelahiran');?>">Isian</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kelahiran');?>">Print Preview</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kematian');?>">Ubah</a></li>
            </ul>
            <div class="isian">
                <?php echo form_open('kematian/form'); ?>
                    <!--nomor surat-->
                    <div class="form-row">
                        <label  for="no_reg" class="col-sm-2 col-form-label">No. Registrasi</label>
                        <div class="col-md-10 mb-3">
                            <input type="text" class="form-control" name="no_reg" placeholder="No. Reg">
                            <?php echo form_error('no_reg', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <!--utama-->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                            <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="text" name="umur" class="form-control" id="umur" placeholder="Umur saat Kematian">
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
                        <label for="nik" class="col-sm-2 col-form-label">No. NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                            <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_kk" class="col-sm-2 col-form-label">No. KK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kk" name="kk" placeholder="No. Kartu Keluarga">
                            <?php echo form_error('kk', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Wafat</label>
                        <div class="col-sm-5 mb-3">
                            <input type="text" class="form-control" id="tempat_wafat" name="tempat_wafat" placeholder="Tempat">
                            <?php echo form_error('tempat_wafat', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-sm-5 mb-3">
                            <input type="date" class="form-control" id="tanggal_wafat" name="tanggal_wafat" placeholder="Tanggal Kematian">
                            <?php echo form_error('tanggal_wafat', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Sebab</label>
                        <div class="col-sm-10">
                            <input type="text" name="sebab" class="form-control" id="sebab" placeholder="Penyebab Kematian">
                            <?php echo form_error('sebab', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>

                    <button type="submit" style="float: right" name="mati">Cetak</button>
                <?php echo form_close(); ?>
            </div>