            <ul class="ul2">
                <li class="col-sm-3 li2"><a href="<?php echo site_url('sku');?>">Persyaratan</a></li>
                <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('sku');?>">Isian</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('sku');?>">Print Preview</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('sku');?>">Ubah</a></li>
            </ul>
            <div class="isian">
                <?php echo form_open('sku/form'); ?>
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
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                                <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
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
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat">
                                <?php echo form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="col-sm-5 mb-3">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-10">
                                <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="Kewarganegaraan">
                                <?php echo form_error('kewarganegaraan', '<small class="text-danger pl-3">', '</small>') ?>
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
                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="agama" name="agama">
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
                            <?php echo form_error('reg_rw', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>

                    <!--usaha-->
                    <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Usaha</label>
                        <div class="col-sm-10">
                            <input type="text" name="usaha" class="form-control" id="usaha" placeholder="Bidang Usaha">
                            <?php echo form_error('usaha', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat Usaha</label>
                        <div class="col-sm-10">
                            <textarea class="form-control mb-3" id="alamat" name="alamat_usaha" rows="3"></textarea>
                            <?php echo form_error('alamat_usaha', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Diperlukan untuk</label>
                        <div class="col-sm-10">
                            <input type="text" name="untuk" class="form-control" id="untuk" placeholder="Untuk keperluan">
                            <?php echo form_error('untuk', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>

                    <button type="submit" name="print" style="float: right">Cetak</button>
                <?php echo form_close(); ?>
            </div>