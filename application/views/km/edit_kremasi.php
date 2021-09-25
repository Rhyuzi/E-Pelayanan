            <ul class="ul2">
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kremasi');?>">Persyaratan</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kremasi');?>">Isian</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kremasi');?>">Print Preview</a></li>
                <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('kremasi');?>">Ubah</a></li>
            </ul>
            <div class="isian">
                <?php echo form_open('kremasi/edit/'.$data_lama['no_reg']); ?>
                    <!--nomor surat-->
                    <div class="form-row">
                        <label  for="no_reg" class="col-sm-2 col-form-label">No. Registrasi</label>
                        <div class="col-md-10 mb-3">
                            <input type="text" class="form-control" name="no_reg" value="<?= $data_lama['no_reg']; ?>">
                            <?php echo form_error('no_reg', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <!--utama-->
                    <div class="form-group row">
                        <label for="pemohon" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="pemohon" class="form-control" id="pemohon" value="<?= $data_lama['pemohon']; ?>">
                            <?php echo form_error('pemohon', '<small class="text-danger pl-3">', '</small>') ?>
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
                    <div class="form-group row">
                        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki">
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            <?php echo form_error('jk', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                        <div class="col-sm-5 mb-3">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $data_lama['tempat_lahir']; ?>">
                            <?php echo form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-sm-5 mb-3">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $data_lama['tgl_lahir']; ?>">
                            <?php echo form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" value="<?= $data_lama['kewarganegaraan']; ?>">
                            <?php echo form_error('kewarganegaraan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="status" name="status">
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
                            <textarea class="form-control mb-3" id="alamat" name="alamat" rows="3"><?= $data_lama['alamat']; ?></textarea>
                            <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alm" class="col-sm-2 col-form-label">Nama Alm</label>
                        <div class="col-sm-10">
                            <input type="text" name="alm" class="form-control" id="alm" value="<?= $data_lama['alm']; ?>">
                            <?php echo form_error('alm', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                        <div class="col-sm-5 mb-3">
                            <input type="text" class="form-control" id="tempat_lhr" name="tempat_lhr" value="<?= $data_lama['tempat_lhr']; ?>">
                            <?php echo form_error('tempat_lhr', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-sm-5 mb-3">
                            <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr" value="<?= $data_lama['tgl_lhr']; ?>">
                            <?php echo form_error('tgl_lhr', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama_alm" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="agama_alm" name="agama_alm">
                                <option value="Islam">Islam</option>
                                <option  value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                            <?php echo form_error('agama_alm', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_alm" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control mb-3" id="alamat_alm" name="alamat_alm" rows="3"><?= $data_lama['alamat_alm']; ?></textarea>
                            <?php echo form_error('alamat_alm', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>

                    <!--pengantar-->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="rt">RT</label>
                            <input type="text" class="form-control" id="rt" name="rt" value="<?= $data_lama['rt']; ?>">
                            <?php echo form_error('rt', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="rw">RW</label>
                            <input type="text" class="form-control" id="rw" name="rw" value="<?= $data_lama['rw']; ?>">
                            <?php echo form_error('rw', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="reg_rw">No. Pengantar</label>
                            <input type="text" class="form-control" id="reg_rw" name="reg_rw" value="<?= $data_lama['reg_rw']; ?>">
                            <?php echo form_error('reg_rw', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Tanggal</label>
                            <input type="date" class="form-control" id="tgl_reg" name="tgl_reg" value="<?= $data_lama['tgl_reg']; ?>">
                            <?php echo form_error('tgl_reg', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Meninggal</label>
                        <div class="col-sm-5 mb-3">
                            <input type="text" class="form-control" id="rs" name="rs" value="<?= $data_lama['rs']; ?>">
                            <?php echo form_error('rs', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-sm-5 mb-3">
                            <input type="date" class="form-control" id="tgl_wafat" name="tgl_wafat" value="<?= $data_lama['tgl_wafat']; ?>">
                            <?php echo form_error('tgl_wafat', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat / Tanggal Kremasi</label>
                        <div class="col-sm-5 mb-3">
                            <input type="text" class="form-control" id="krematorium" name="krematorium" value="<?= $data_lama['krematorium']; ?>">
                            <?php echo form_error('krematorium', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-sm-5 mb-3">
                            <input type="date" class="form-control" id="tgl_kremasi" name="tgl_kremasi" value="<?= $data_lama['tgl_kremasi']; ?>">
                            <?php echo form_error('tgl_kremasi', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>

                    <button type="submit" style="float: right" name="mati">Cetak</button>
                <?php echo form_close(); ?>
            </div>