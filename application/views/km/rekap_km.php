            <ul class="ul2" style="margin-bottom: 15px;">
                <li class="col-sm-2 li2"><a href="<?php echo site_url('skck/rekap');?>">SKCK</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('kelahiran/rekap');?>">Kelahiran</a></li>
                <li class="col-sm-2 li2"><a class="aktif" href="<?php echo site_url('kematian/rekap');?>">Kematian</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('sku/rekap');?>">SKU</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('serbaguna/rekap');?>">SG</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('sktm/index');?>">SKTM</a></li>
            </ul>

            <table id="example" class="table table-striped table-bordered">
                <thead style="background-color: #ff9933; color: #000033;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th style="width: 4%;">No</th>
                        <th style="width: 17%;">Nomor Surat</th>
                        <th style="width: 13%;">Tanggal</th>
                        <th style="width: 22%;">Nama Almarhum</th>
                        <th style="width: 24%;">Alamat</th>
                        <th style="width: 5%;">RT</th>
                        <th style="width: 5%;">RW</th>
                        <th style="width: 10%;">Pilihan</th>
                    </tr>
                </thead>
                <tbody style="font-size: 14px;">
                    <?php $no=1; foreach ($km as $m){ ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $m['no_reg'] ?>/KET/<?= bulan_aja($m['dibuat_pada']) ?>/<?= tahun_aja($m['dibuat_pada']) ?></td>
                            <td><?= date($m['dibuat_pada']) ?></td>
                            <td><?= $m['nama'] ?></td>
                            <td><?= $m['alamat'] ?></td>
                            <td><?= $m['rt'] ?></td>
                            <td><?= $m['rw'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>kematian/reprint/<?= $m['no_reg']; ?>"><i class="fas fa-print"></i></a>
                                <a href="<?= base_url(); ?>kematian/edit/<?= $m['no_reg']; ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Hapus data yang dipilih?');" href="<?= base_url(); ?>kematian/hapus/<?= $m['no_reg']; ?>"><i class="fas fa-eraser"></i></a>
                            </td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
                <tfoot style="background-color: #337fe5; color: #efefef;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th colspan="10" style="color: #FFF;">
                            Kematian
                            <div class="custom-pagination">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </th>
                    </tr>
                </tfoot>
            </table>
            <table id="example" class="table table-striped table-bordered">
                <thead style="background-color: #ff9933; color: #000033;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th style="width: 2%;">No</th>
                        <th style="width: 4%;">Nomor Surat</th>
                        <th style="width: 15%;">Tanggal</th>
                        <th style="width: 20%;">Nama Pemohon</th>
                        <th style="width: 20%;">Nama Almarhum</th>
                        <th style="width: 23%;">Alamat</th>
                        <th style="width: 4%;">RT</th>
                        <th style="width: 4%;">RW</th>
                        <th style="width: 10%;">Pilihan</th>
                    </tr>
                </thead>
                <tbody style="font-size: 14px;">
                    <?php $no=1; foreach ($kremasi as $kr){ ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $kr['no_reg'] ?>/KET/<?= bulan_aja($m['dibuat_pada']) ?>/<?= tahun_aja($m['dibuat_pada']) ?></td>
                            <td><?= date($kr['dibuat_pada']) ?></td>
                            <td><?= $kr['pemohon'] ?></td>
                            <td><?= $kr['alm'] ?></td>
                            <td><?= $kr['alamat_alm'] ?></td>
                            <td><?= $kr['rt'] ?></td>
                            <td><?= $kr['rw'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>kremasi/reprint/<?= $m['no_reg']; ?>"><i class="fas fa-print"></i></a>
                                <a href="<?= base_url(); ?>kremasi/edit/<?= $m['no_reg']; ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Hapus data yang dipilih?');" href="<?= base_url(); ?>kremasi/hapus/<?= $m['no_reg']; ?>"><i class="fas fa-eraser"></i></a>
                            </td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
                <tfoot style="background-color: #337fe5; color: #efefef;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th colspan="10" style="color: #FFF;">
                            Kremasi
                            <div class="custom-pagination">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </th>
                    </tr>
                </tfoot>
            </table>