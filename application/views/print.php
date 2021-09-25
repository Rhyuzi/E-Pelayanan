<?php
//include master file
require('fpdf.php');

    //instantisasi objek
    $pdf=new pdf();

    //Mulai dokumen
    $pdf->AddPage('P', 'A5');
    //meletakkan gambar
    $pdf->letak('image/Logo_Kota_Bandung.png');
    //meletakkan judul disamping logo diatas
    $pdf->judul('PEMERINTAH KOTA PAGAR ALAM', 'DINAS PENDIDIKAN','SEKOLAH MENENGAH ATAS NEGERI 4','Jambat Balo Pagar Alam Selatan Kota Pagar Alam Telp. (0730)622442', 'Website: http://sman4pagaralam.sch.id | E-Mail: smanegeri4pagaralam@gmail.com');
    //membuat garis ganda tebal dan tipis
    $pdf->garis();

    $pdf->Output('hasilunsman4pga.pdf','I');