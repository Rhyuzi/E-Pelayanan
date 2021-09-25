            <ul class="ul2">
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kelahiran');?>">Persyaratan</a></li>
                <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('kelahiran');?>">Isian</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kelahiran');?>">Print Preview</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kelahiran');?>">Ubah</a></li>
            </ul>
            <div class="isian">
                <?php echo form_open('kelahiran/form'); ?>
                    <!--nomor surat-->
                    <div class="form-row">
                        <div class="col-md mb-3">
                            <label for="validationCustom01">No. Registrasi</label>
                            <input type="text" class="form-control" name="no_reg" placeholder="No. Reg">
                            <?php echo form_error('no_reg', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <!--utama-->
                    <div>
                        <div class="form-row">
                            <label for="ttl" class="col-sm-3 col-form-label">Tempat / Tanggal Lahir</label>
                            <div class="col-sm-3 mb-3">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat">
                                <?php echo form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="col-sm-3 mb-3">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                <?php echo form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="col-sm-3 mb-3">
                                <input type="time" class="form-control" id="jam_lahir" name="jam_lahir" placeholder="Tanggal Lahir">
                                <?php echo form_error('jam_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
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
                            <label for="nama" class="col-sm-3 col-form-label">Nama Anak</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                                <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Lengkap">
                                <?php echo form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control mb-3" id="alamat" name="alamat" rows="3"></textarea>
                                <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Lengkap">
                                <?php echo form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="ttl" class="col-sm-3 col-form-label">Tempat / Tanggal Nikah</label>
                            <div class="col-sm-4 mb-3">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_nikah" placeholder="Tempat">
                                <?php echo form_error('tempat_nikah', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="col-sm-5 mb-3">
                                <input type="date" class="form-control" id="tanggal_nikah" name="tanggal_nikah" placeholder="Tanggal Nikah">
                                <?php echo form_error('tanggal_nikah', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik" class="col-sm-3 col-form-label">No. Buku Nikah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_buku" name="no_buku" placeholder="Nomor Buku / Surat Nikah">
                                <?php echo form_error('no_buku', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div>

                    <button type="submit"style="float: right" name="print">Cetak</button>
                <?php echo form_close(); ?>
            </div>