<?php

//buat dokumen baru
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);

// set default header data
$pdf->SetHeaderData('lambang_kota_bandung.png', 30, ' ', ' ', ' ', array(0,0,0), array(0,0,0));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 12));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// remove default header/footer
//$pdf->setPrintHeader(false);
//$pdf->setPrintFooter(false);

// set margins
$pdf->SetMargins(25, 0, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(25);
$pdf->SetFooterMargin(0);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 25);

// Set font
$pdf->SetFont('times', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// Set some content to print
$pdf->Image('images/Logo_Kota_Bandung.png', 25, 17, 30, 30);
$html=' <h3 align="center" cellspacing="0"><br><br><br>PEMERINTAH KOTA BANDUNG<br>
            KECAMATAN ANDIR<br>
            KELURAHAN KEBON JERUK</h3>
        <p cellspacing="0" align="center">Jl. Babatan No. 2 Kota Bandung 40181 Telp. (022) 20512072</p>
        <h4 align="center"><u>SURAT KETERANGAN</u></h4>
        ';
        foreach ($hasil as $h) {
$html.= '
        <p align="center">Nomor: '.$h['no_reg'].'/KET-KBJ/'.bulan_aja($h['dibuat_pada']).'/'.tahun_aja($h['dibuat_pada']).'</p>
            
        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Lurah Kebon Jeruk Kecamatan Andir 
            Kota Bandung dengan ini menerangkan bahwa:</p>
        <table cellspacing="1" bgcolor="#fff" cellpadding="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <tr bgcolor="#ffffff">
                <td width="30%">Nama</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['pemohon'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">NIK</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['nik'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">No. KK</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['kk'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Jenis Kelamin</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['jk'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Tempat/Tanggal Lahir</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['tempat_lahir'].', '.date_indo($h['tgl_lahir']).'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Kewarganegaraan</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['kewarganegaraan'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Status Perkawinan</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['status'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Pekerjaan</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['pekerjaan'].'</td>
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
        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat Keterangan ini diperlukan untuk memenuhi salah satu persyaratan 
            Administrasi Kremasi atas nama:</p>
        <table cellspacing="1" bgcolor="#fff" cellpadding="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <tr bgcolor="#ffffff">   
                <td width="30%">Nama</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['alm'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Tempat/Tanggal Lahir</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['tempat_lhr'].', '.date_indo($h['tgl_lhr']).'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Agama</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['agama_alm'].'</td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="30%">Alamat</td>
                <td width="5%">:</td>
                <td width="66%">'.$h['alamat_alm'].'</td>
            </tr>
        </table>
            <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telah meninggal dunia pada tanggal '.date_indo($h['tgl_wafat']).' 
                dan akan dikremasi di Krematorium<b> '.$h['krematorium'].' </b>
                Kota Bandung tanggal '.date_indo($h['tgl_kremasi']).' 
                dan berdasarkan pengakuan Rumah Sakit<b> '.$h['rs'].' </b>
                serta berdasarkan surat pengantar RT '.$h['rt'].' 
                RW '.$h['rw'].' 
                No. Reg '.$h['reg_rw'].' 
                tanggal '.date_indo($h['tgl_reg']).' 
                Nama tersebut di atas bersedia menanggung akibat hukum yang timbul apabila keterangan yang disampaikan kepada 
                aparat Kelurahan tidak benar.</p>
            <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat 
                dipergunakan dengan sebagaimana mestinya.</p>
            <p align="right">Bandung,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.bulan_lengkap($h['dibuat_pada']).' 
                '.tahun_aja($h['dibuat_pada']).'<br>LURAH KEBON JERUK   <br><br></p>
            ';}

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Kremasi.pdf', 'I');