            <ul class="ul2">
                <li class="col-sm-3 li2"><a href="<?php echo site_url('serbaguna');?>">Persyaratan</a></li>
                <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('serbaguna');?>">Isian</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('serbaguna');?>">Print Preview</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('skck');?>">Ubah</a></li>
            </ul>
            <div class="isian">
                <?php echo form_open('serbaguna/form'); ?>
                    <!--nomor surat-->
                    <div class="form-row">
                        <div class="col-sm mb-3">
                            <label for="validationCustom01">No. Registrasi</label>
                            <input type="text" class="form-control" name="no_reg" placeholder="No. Reg">
                            <?php echo form_error('no_reg', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <!--utama-->
                    <div>
                        <div class="form-row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" id="mana" name="nama" placeholder="Nama">
                                <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="Nomor NIK atau KTP">
                                <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="kk" class="col-sm-3 col-form-label">No. KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="kk" class="form-control" id="kk" placeholder="Nomor Kartu Keluarga">
                                <?php echo form_error('kk', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki">
                                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan">
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                                <?php echo form_error('kelamin', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    
                        <div class="form-row">
                            <label for="ttl" class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
                            <div class="col-sm-5 mb-3">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                                <?php echo form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="Warga Negara">
                                <?php echo form_error('kewarganegaraan', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="status_perkawinan" name="status_perkawinan">
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Ceri Mati</option>
                                </select>
                                <?php echo form_error('status_perkawinan', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan">
                                <?php echo form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
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
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="status_perkawinan" name="alamat" rows="3"></textarea>
                                <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rt" class="col-sm-3 col-form-label">RT/RW</label>
                            <div class="col-sm-5">
                                <input type="text" name="rt" class="form-control" id="rt" placeholder="RT">
                                <?php echo form_error('rt', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="rw" class="form-control" id="rw" placeholder="RW">
                                <?php echo form_error('rw', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea class="form-control mb-3" id="keterangan" name="keterangan" rows="3"></textarea>
                                <?php echo form_error('keterangan', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="untuk" class="col-sm-3 col-form-label">Untuk</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="untuk" name="untuk" placeholder="Diperlukan Untuk">
                                <?php echo form_error('untuk', '<small class="text-danger pl-3">', '</small>') ?>
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