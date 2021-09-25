            <ul class="ul2" style="margin-bottom: 15px;">
                <li class="col-sm-2 li2"><a href="<?php echo site_url('skck/rekap');?>">SKCK</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('kelahiran/rekap');?>">Kelahiran</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('kematian/rekap');?>">Kematian</a></li>
                <li class="col-sm-2 li2"><a class="aktif" href="<?php echo site_url('sku/rekap');?>">SKU</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('serbaguna/rekap');?>">SG</a></li>
                <li class="col-sm-2 li2"><a href="<?php echo site_url('sktm/index');?>">SKTM</a></li>
            </ul>

            <table id="example" class="table table-striped table-bordered">
                <thead style="background-color: #ff9933; color: #000033;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th style="width: 5%;">No</th>
                        <th style="width: 15%;">Nomor Surat</th>
                        <th style="width: 10%;">Tanggal</th>
                        <th style="width: 20%;">Nama Pemohon</th>
                        <th style="width: 25%;">Alamat</th>
                        <th style="width: 5%;">RT</th>
                        <th style="width: 5%;">RW</th>
                        <th style="width: 20%;">Usaha</th>
                        <th style="width: 10%;">Pilihan</th>
                    </tr>
                </thead>
                <tbody style="font-size: 14px;">
                    <?php $no=1; foreach ($sku as $u){ ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $u['no_reg'] ?>/KET/<?= bulan_aja($u['dibuat_pada']) ?>/<?= tahun_aja($u['dibuat_pada']) ?></td>
                            <td><?= date($u['dibuat_pada']) ?></td>
                            <td><?= $u['nama'] ?></td>
                            <td><?= $u['alamat'] ?></td>
                            <td><?= $u['rt'] ?></td>
                            <td><?= $u['rw'] ?></td>
                            <td><?= $u['usaha'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>sku/reprint/<?= $u['no_reg']; ?>"><i class="fas fa-print"></i></a>
                                <a href="<?= base_url(); ?>sku/edit/<?= $u['no_reg']; ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Hapus data yang dipilih?');" href="<?= base_url(); ?>sku/hapus/<?= $u['no_reg']; ?>"><i class="fas fa-eraser"></i></a>
                            </td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
                <tfoot style="background-color: #337fe5; color: #efefef;">
                    <tr style="font-size: 16px; text-align: center;">
                        <th colspan="10" style="color: #FFF;">
                            <div class="custom-pagination"><?php echo $this->pagination->create_links(); ?></div>
                        </th>
                    </tr>
                </tfoot>
            </table>