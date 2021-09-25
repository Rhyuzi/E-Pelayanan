<?php

//buat dokumen baru
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);

// set default header data
$pdf->SetHeaderData('lambang_kota_bandung.png', 30, ' ', ' ', ' ', array(0,0,0), array(0,0,0));
//$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 12));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// remove default header/footer
//$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set margins
$pdf->SetMargins(25, 0, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(25);
$pdf->SetFooterMargin(10);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 25);

// Set font
$pdf->SetFont('times', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// Set some content to print
$pdf->Image('lambang_kota_bandung.png', 25, 17, 30, 30);
$html=' <h3 align="center" cellspacing="0"><br><br><br>PEMERINTAH KOTA BANDUNG<br>
            KECAMATAN ANDIR<br>
            KELURAHAN KEBON JERUK</h3>
        <p cellspacing="0" align="center">Jl. Babatan No. 2 Kota Bandung 40181 Telp. (022) 20512072</p>
        <h4 align="center"><u>SURAT KETERANGAN USAHA</u></h4>
        ';
        foreach ($hasil as $h) {
$html.= '
        <p align="center">Nomor: '.$h['no_reg'].'/SKCK-KBJ/'.bulan_aja($h['dibuat_pada']).'/'.tahun_aja($h['dibuat_pada']).'</p>
            
        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Lurah Kebon Jeruk Kecamatan Andir Kota Bandung  dengan ini menerangkan bahwa:</p>
        <table cellspacing="1" bgcolor="#fff" cellpadding="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <tr bgcolor="#ffffff">
                <td width="30%">Nama</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['nama'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">No. KTP</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['nik'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Jenis Kelamin</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['jk'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Tempat/Tanggal Lahir</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['tempat_lhr'].', '.date_indo($h['tgl_lahir']).'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Kewarganegaraan</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['kewarganegaraan'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Pekerjaan</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['kerja'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Agama</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['agama'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Alamat</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['alamat'].'</td>
            </tr>
        </table>
            <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Surat Keterangan dari  RT '.$h['rt'].' RW '.$h['rw'].' 
                Nomor  '.$h['no_pengantar'].' tanggal '.date_indo($h['tgl_pengantar']).' 
                bahwa orang yang bersangkuan di atas adalah benar mempunyai usaha di bidang:<b> '.$h['usaha'].' </b>yang berlokasi di 
                <b>'.$h['alamat_usaha'].' </b>Kelurahan Kebon Jeruk Kecamatan Andir.</p>
            <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat Keterangan ini diperlukan untuk : '.$h['untuk'].'<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat Keterangan ini berlaku selama : 1 (Satu) kali keperluan</p>
            <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat Keterangan dinyatakan tidak berlaku apabila terjadi pelanggaran 
                peraturan Perundang-undangan dan Perda Kota Bandung serta apabila terdapat kekeliruan/kesalahan dalam pembuatannya, 
                pemohon/pemegang bersedia mempertanggungjawabkan secara hukum tanpa melibatkan pihak manapun.</p>
            <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat
                dipergunakan sebagaimana mestinya.</p>
            
            <p align="right">Bandung,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.bulan_lengkap($h['dibuat_pada']).' '.tahun_aja($h['dibuat_pada']).'<br>LURAH KEBON JERUK   </p>
            ';}
$html.= '
        <p> </p><br>
        <p align="right"><b>. . . . . . . . . . . . . . . . . . . . . .</b></p>
';

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('SKU.pdf', 'I');