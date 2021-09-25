            <ul class="ul2" style="margin-bottom: 15px;">
                <li class="col-sm-2 li2"><a href="<?php echo site_url('skck/rekap');?>">SKCK</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('kelahiran/rekap');?>">Kelahiran</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('kematian/rekap');?>">Kematian</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('sku/rekap');?>">SKU</a></li>
                <li class="col-sm-2 li2"><a class="aktif" href="<?php echo site_url('serbaguna/rekap');?>">SG</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('sktm/index');?>">SKTM</a></li>
            </ul>

            <table id="example" class="table table-striped table-bordered">
                <thead style="background-color: #ff9933; color: #000033;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th style="width: 4%;">No</th>
                        <th style="width: 17%;">Nomor Surat</th>
                        <th style="width: 13%;">Tanggal</th>
                        <th style="width: 22%;">Nama Pemohon</th>
                        <th style="width: 24%;">Alamat</th>
                        <th style="width: 5%;">RT</th>
                        <th style="width: 5%;">RW</th>
                        <th style="width: 10%;">Pilihan</th>
                    </tr>
                </thead>
                <tbody style="font-size: 14px;">
                    <?php $no=1; foreach ($sg as $s){ ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $s['no_reg'] ?>/KET/<?= bulan_aja($s['dibuat_pada']) ?>/<?= tahun_aja($s['dibuat_pada']) ?></td>
                            <td><?= date($s['dibuat_pada']) ?></td>
                            <td><?= $s['nama'] ?></td>
                            <td><?= $s['alamat'] ?></td>
                            <td><?= $s['rt'] ?></td>
                            <td><?= $s['rw'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>serbaguna/reprint/<?= $s['no_reg']; ?>"><i class="fas fa-print"></i></a>
                                <a href="<?= base_url(); ?>serbaguna/edit/<?= $s['no_reg']; ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Hapus data yang dipilih?');" href="<?= base_url(); ?>serbaguna/hapus/<?= $s['no_reg']; ?>"><i class="fas fa-eraser"></i></a>
                            </td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
                <tfoot style="background-color: #337fe5; color: #efefef;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th colspan="10" style="color: #FFF;">
                            <div class="custom-pagination">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </th>
                    </tr>
                </tfoot>
            </table>