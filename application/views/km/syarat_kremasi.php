            <ul class="ul2">
                <li class="col-sm-3 li2"><a class="aktif" href="<?php echo site_url('kremasi');?>">Persyaratan</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kremasi');?>">Isian</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kremasi');?>">Print Preview</a></li>
                <li class="col-sm-3 li2"><a href="<?php echo site_url('kremasi');?>">Ubah</a></li>
            </ul>

            <div class="isian">
                <p style="font-size: 18px;">Berikut Persyaratan Pembuatan Surat Kremasi :</p><br><br>
                <?php echo form_open('kremasi'); ?>
                    <input type="checkbox" name="pengantar"> Surat Pengantar RT/RW <br><br>
                    <input type="checkbox" name="ktp"> Fotokopi KTP <br><br>
                    <input type="checkbox" name="kk"> Fotokopi Kartu Keluarga <br><br>
                    <input type="checkbox" name="rs"> Fotokopi Keterangan kremasi dari RS / Dokter <br><br>
                    <button type="submit" name="next" style="float: right;">Selanjutnya
                        <i class="fas fa-chevron-right"></i>
                    </button>
                <?php echo form_close(); ?>
            </div>