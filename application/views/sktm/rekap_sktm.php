            <ul class="ul2" style="margin-bottom: 15px;">
                <li class="col-sm-2 li2"><a href="<?php echo site_url('skck/rekap');?>">SKCK</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('kelahiran/rekap');?>">Kelahiran</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('kematian/rekap');?>">Kematian</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('sku/rekap');?>">SKU</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('serbaguna/rekap');?>">SG</a></li>
                <li class="col-sm-2 li2"><a class="aktif" href="<?php echo site_url('sktm/index');?>">SKTM</a></li>
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
                    <?php $no=1; foreach ($pbb as $p){ ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $p['no_reg'] ?>/SKTM-PBB/<?= bulan_aja($p['dibuat_pada']) ?>/<?= tahun_aja($p['dibuat_pada']) ?></td>
                            <td><?= date($p['dibuat_pada']) ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['alamat'] ?></td>
                            <td><?= $p['rt'] ?></td>
                            <td><?= $p['rw'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>pbb/reprint/<?= $p['no_reg']; ?>"><i class="fas fa-print"></i></a>
                                <a href="<?= base_url(); ?>pbb/edit/<?= $p['no_reg']; ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Hapus data yang dipilih?');" href="<?= base_url(); ?>pbb/hapus/<?= $p['no_reg']; ?>"><i class="fas fa-eraser"></i></a>
                            </td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
                <tfoot style="background-color: #337fe5; color: #efefef;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th colspan="10" style="color: #FFF;">
                            SKTM-PBB
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
                        <th style="width: 3%;">No</th>
                        <th style="width: 15%;">Nomor Surat</th>
                        <th style="width: 11%;">Tanggal</th>
                        <th style="width: 19%;">Nama Anak</th>
                        <th style="width: 19%;">Nama Orang Tua</th>
                        <th style="width: 20%;">Alamat</th>
                        <th style="width: 3%;">RT</th>
                        <th style="width: 3%;">RW</th>
                        <th style="width: 8%;">Pilihan</th>
                    </tr>
                </thead>
                <tbody style="font-size: 14px;">
                    <?php $no=1; foreach ($sekolah as $s){ ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $s['no_reg'] ?>/SKTM/<?= bulan_aja($s['dibuat_pada']) ?>/<?= tahun_aja($s['dibuat_pada']) ?></td>
                            <td><?= date($s['dibuat_pada']) ?></td>
                            <td><?= $s['anak'] ?></td>
                            <td><?= $s['pemohon'] ?></td>
                            <td><?= $s['alamat'] ?></td>
                            <td><?= $s['rt'] ?></td>
                            <td><?= $s['rw'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>sekolah/reprint/<?= $s['no_reg']; ?>"><i class="fas fa-print"></i></a>
                                <a href="<?= base_url(); ?>sekolah/edit/<?= $s['no_reg']; ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Hapus data yang dipilih?');" href="<?= base_url(); ?>sekolah/hapus/<?= $s['no_reg']; ?>"><i class="fas fa-eraser"></i></a>
                            </td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
                <tfoot style="background-color: #337fe5; color: #efefef;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th colspan="10" style="color: #FFF;">
                            SKTM Sekolah
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
                        <th style="width: 3%;">No</th>
                        <th style="width: 15%;">Nomor Surat</th>
                        <th style="width: 11%;">Tanggal</th>
                        <th style="width: 19%;">Nama Pemohon</th>
                        <th style="width: 19%;">Rumah Sakit</th>
                        <th style="width: 20%;">Alamat</th>
                        <th style="width: 3%;">RT</th>
                        <th style="width: 3%;">RW</th>
                        <th style="width: 8%;">Pilihan</th>
                    </tr>
                </thead>
                <tbody style="font-size: 14px;">
                    <?php $no=1; foreach ($rs as $r){ ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $r['no_reg'] ?>/SKTM/<?= bulan_aja($r['dibuat_pada']) ?>/<?= tahun_aja($r['dibuat_pada']) ?></td>
                            <td><?= date($r['dibuat_pada']) ?></td>
                            <td><?= $r['nama'] ?></td>
                            <td><?= $r['rs'] ?></td>
                            <td><?= $r['alamat'] ?></td>
                            <td><?= $r['rt'] ?></td>
                            <td><?= $r['rw'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>rs/reprint/<?= $r['no_reg']; ?>"><i class="fas fa-print"></i></a>
                                <a href="<?= base_url(); ?>rs/edit/<?= $r['no_reg']; ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Hapus data yang dipilih?');" href="<?= base_url(); ?>rs/hapus/<?= $r['no_reg']; ?>"><i class="fas fa-eraser"></i></a>
                            </td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
                <tfoot style="background-color: #337fe5; color: #efefef;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th colspan="10" style="color: #FFF;">
                            SKTM-RS
                            <div class="custom-pagination">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </th>
                    </tr>
                </tfoot>
            </table>