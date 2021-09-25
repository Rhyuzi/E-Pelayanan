            <ul class="ul2">
                <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('serbaguna');?>">Persyaratan</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('serbaguna');?>">Isian</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('serbaguna');?>">Print Preview</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('serbaguna');?>">Ubah</a></li>
            </ul>

            <div class="isian">
                <p style="font-size: 18px;">Berikut Persyaratan Pembuatan Surat Keterangan Serbaguna :</p><br><br>
                <?php echo form_open('serbaguna'); ?>
                    <input type="checkbox" name="pengantar"> Surat Pengantar RT/RW <br><br>
                    <input type="checkbox" name="ktp"> Fotokopi KTP <br><br>
                    <input type="checkbox" name="kk"> Fotokopi Kartu Keluarga <br><br>
                    <input type="checkbox" name="lain"> Fotokopi Berkas Lainnya <br><br>
                    <button type="submit" name="next" style="float: right;">Selanjutnya
                        <i class="fas fa-chevron-right"></i>
                    </button>
                <?php echo form_close(); ?>
            </div>