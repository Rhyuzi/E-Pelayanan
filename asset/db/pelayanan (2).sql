-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2019 pada 04.55
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `no_reg` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jam` time NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `tempat_nikah` varchar(255) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `no_buku` varchar(255) NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`no_reg`, `tgl_lahir`, `jam`, `tempat_lahir`, `jk`, `nama_anak`, `nama_ibu`, `alamat`, `nama_ayah`, `tempat_nikah`, `tgl_nikah`, `no_buku`, `dibuat_pada`) VALUES
(2, '2019-02-08', '03:28:00', 'Bandung', 'Laki-laki', 'abc', 'def', 'sjakdhskahja', 'ghi', 'kota', '2011-07-14', '321/sdoako/3e0', '2019-09-08 17:00:00'),
(3, '2019-05-23', '04:21:00', 'Kota', 'Laki-laki', 'Anak', 'Ibu', 'Jl. Karepwelah No. 098', 'Ayah', 'Kota', '2014-01-09', '238/i/14', '2019-09-09 22:53:37'),
(4, '2010-12-08', '15:09:00', 'Kota', 'Perempuan', 'Neng', 'Ema', 'Jl. Depan Rumah No. 3', 'Din', 'Koa', '2004-07-13', '13/VII/04', '2019-09-23 01:29:36'),
(5, '1989-04-22', '01:01:00', 'Bandung', 'Laki-laki', 'enur', 'anor', 'jlkepatihan', 'udin', 'bandung', '2020-04-05', '2020', '2019-09-23 05:28:18'),
(6, '2019-02-09', '23:03:00', 'Kota', 'Perempuan', 'Anak', 'Ibu', 'Jl. Manaja No. 238', 'Ayah', 'Kota', '2009-08-31', '3209/viii/2009', '2019-09-29 04:04:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `no_reg` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `alamat` text NOT NULL,
  `rt` tinyint(3) NOT NULL,
  `rw` tinyint(3) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `tgl_wafat` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `sebab` varchar(255) NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`no_reg`, `nama`, `umur`, `jk`, `alamat`, `rt`, `rw`, `nik`, `kk`, `tgl_wafat`, `tempat`, `sebab`, `dibuat_pada`) VALUES
(1, 'Neng', 42, 'Perempuan', 'Gg. Sakkaratul Maut No. 9548', 3, 8, '0987654321098765', '0098765432109876', '2019-09-01', 'Bandung', 'Waktunya', '2019-09-09 14:00:57'),
(2, 'Nama', 43, 'Laki-laki', 'Jl. Kematian no. 2309', 2, 3, '1234567890123456', '1234567890123456', '2019-09-07', 'Kota', 'Sakit', '2019-09-09 22:56:47'),
(3, 'Jang', 98, 'Laki-laki', 'Jl. Rumah Dalam No. 45', 9, 12, '1234567890123456', '0987654321234567', '2019-09-20', 'Kota', 'Lanjut Usia', '2019-09-23 01:53:06'),
(4, 'Nama', 93, 'Perempuan', 'Gg. Nyumput No. 437', 2, 1, '1234567890123456', '1234567890123456', '2019-02-28', 'Kota', 'Kolot', '2019-09-29 04:42:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kremasi`
--

CREATE TABLE `kremasi` (
  `no_reg` int(11) NOT NULL,
  `pemohon` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `alm` varchar(255) NOT NULL,
  `tempat_lhr` varchar(255) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `agama_alm` varchar(10) NOT NULL,
  `alamat_alm` text NOT NULL,
  `tgl_wafat` date NOT NULL,
  `krematorium` varchar(255) NOT NULL,
  `tgl_kremasi` date NOT NULL,
  `rs` varchar(255) NOT NULL,
  `rt` tinyint(3) NOT NULL,
  `rw` tinyint(3) NOT NULL,
  `reg_rw` varchar(255) NOT NULL,
  `tgl_reg` date NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kremasi`
--

INSERT INTO `kremasi` (`no_reg`, `pemohon`, `nik`, `kk`, `jk`, `tempat_lahir`, `tgl_lahir`, `kewarganegaraan`, `status`, `pekerjaan`, `agama`, `alamat`, `alm`, `tempat_lhr`, `tgl_lhr`, `agama_alm`, `alamat_alm`, `tgl_wafat`, `krematorium`, `tgl_kremasi`, `rs`, `rt`, `rw`, `reg_rw`, `tgl_reg`, `dibuat_pada`) VALUES
(1, 'Jangan Pemohon', '1234567890987654', '0987654321234567', 'Laki-laki', 'Kotanya', '1987-03-23', 'Indonesia', 'Kawin', 'Karyawan Swasta', 'Hindu', 'Jl. Yang Ada Aja No. 98/4G', 'Almarhumah', 'Kota Juga', '1952-02-14', 'Hindu', 'Jl. Yang Ada Aja No. 99/4G', '2019-09-27', 'Mana Aja Sih', '2019-09-30', 'Udah Ga Ada', 5, 8, '328/m/05-08/ix-19', '2019-09-30', '2019-09-29 17:38:55'),
(2, 'Nama', '1234567890123456', '0987654321234567', 'Perempuan', 'Kota', '1958-04-09', 'Indonesia', 'Kawin', 'Mengurus Rumah Tangga', 'Kristen', 'Jl. Ga Bisa Keluar No. 87', 'Alam', 'Tempat', '1947-04-05', 'Kristen', 'Jl. Udah Bisa Keluar No. 763', '2019-09-27', 'Setempat', '2019-09-30', 'Pada Sakit', 6, 2, '83/km-06/02/ix-19', '2019-09-30', '2019-09-30 02:48:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbb`
--

CREATE TABLE `pbb` (
  `no_reg` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `tempat_lhr` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_sppt` varchar(20) NOT NULL,
  `rt` tinyint(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `reg_rw` varchar(255) NOT NULL,
  `tgl_reg` date NOT NULL,
  `karena` varchar(255) NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pbb`
--

INSERT INTO `pbb` (`no_reg`, `nama`, `nik`, `kk`, `jk`, `tempat_lhr`, `tgl_lahir`, `kewarganegaraan`, `status`, `pekerjaan`, `agama`, `alamat`, `no_sppt`, `rt`, `rw`, `reg_rw`, `tgl_reg`, `karena`, `dibuat_pada`) VALUES
(1, 'Bla Bla Bla', '1234567890987654', '0987654321234567', 'Laki-laki', 'Kota', '1974-09-30', 'Indonesia', 'Belum Kawin', 'Pedagang', 'Islam', 'Gg. Bapa Urang No. 164', '32.73.006.215-1125.0', 6, '1', '102/hkj/06/01/ix/19', '2019-09-27', 'Lanjut Usia', '2019-09-27 12:06:58'),
(2, 'Nama', '1234567890123456', '1234567890123456', 'Laki-laki', 'Kota', '1931-11-04', 'Indonesia', 'Kawin', 'Pedagang', 'Buddha', 'Jl. Sukangamuk Gg. Sukamarah No. 109/11C', '32.73.006.123.123-45', 2, '1', '12/gfh/02/01/ix/19', '2019-09-28', 'Sudah Tidak Bekerja', '2019-09-28 00:58:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rs`
--

CREATE TABLE `rs` (
  `no_reg` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `rt` tinyint(3) NOT NULL,
  `rw` tinyint(3) NOT NULL,
  `reg_rw` varchar(255) NOT NULL,
  `tgl_reg` date NOT NULL,
  `rs` varchar(255) NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rs`
--

INSERT INTO `rs` (`no_reg`, `nama`, `nik`, `kk`, `jk`, `tempat_lahir`, `tgl_lahir`, `kewarganegaraan`, `status`, `pekerjaan`, `agama`, `alamat`, `rt`, `rw`, `reg_rw`, `tgl_reg`, `rs`, `dibuat_pada`) VALUES
(1, 'Nama', '1234567890987654', '0987654321234567', 'Perempuan', 'Kota', '1968-09-19', 'Indonesia', 'Kawin', 'Mengurus Rumah Tangga', 'Islam', 'Gg. Dalem Jalan No. 789', 5, 1, '12/sk/05/01/ix/19', '2019-09-28', 'Sebrang Pengkolan', '2019-09-28 07:04:19'),
(2, 'Nama', '1234567890123456', '1234567890123456', 'Perempuan', 'Kota', '1983-08-09', 'Indonesia', 'Kawin', 'PNS', 'Islam', 'Jl. mana aja no. 823', 12, 1, '209/sk/12-01/ix/19', '2019-09-28', 'Belakang Pekarangan', '2019-09-28 08:49:31'),
(3, 'Amel', '1234567890123456', '1234567890123456', 'Perempuan', 'Dimana Welah', '2003-09-17', 'Indonesia', 'Belum Kawin', 'Pelajar', 'Islam', 'Jl. Di atas Tanah', 7, 4, '657/rs/07.04/ix-19', '2019-09-29', 'Belum Sembuh', '2019-09-29 14:30:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `no_reg` int(11) NOT NULL,
  `pemohon` varchar(255) NOT NULL,
  `tempat_lhr` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kk` varchar(16) NOT NULL,
  `anak` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `rt` tinyint(3) NOT NULL,
  `rw` tinyint(3) NOT NULL,
  `reg_rw` varchar(255) NOT NULL,
  `tgl_reg` date NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`no_reg`, `pemohon`, `tempat_lhr`, `tgl_lahir`, `pekerjaan`, `alamat`, `kk`, `anak`, `tempat_lahir`, `tanggal_lahir`, `sekolah`, `rt`, `rw`, `reg_rw`, `tgl_reg`, `dibuat_pada`) VALUES
(1, 'Nama Pemohon', 'Kota', '1983-03-18', 'Wiraswasta', 'Jl. Samping Gang No. 379', '0987654321234567', 'Anaknya', 'Kota', '2011-02-08', 'SDN Sekitar Rumah 1', 4, 2, '42/SKTM/04/02/ix/19', '2019-09-28', '2019-09-28 01:37:46'),
(2, 'Orangtua', 'Kota', '1984-08-20', 'Buruh', 'Jl. Luar Rumah No. 79', '1234567890123456', 'Anak', 'Kota', '2011-03-21', 'SDN Depan Gerbang 2', 3, 1, '23/sktm/03/01/ix/19', '2019-09-28', '2019-09-28 06:09:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `serbaguna`
--

CREATE TABLE `serbaguna` (
  `no_reg` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `rt` tinyint(3) NOT NULL,
  `rw` tinyint(3) NOT NULL,
  `reg_rw` varchar(255) NOT NULL,
  `tgl_reg` date NOT NULL,
  `ket` text NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kk` varchar(16) NOT NULL,
  `untuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `serbaguna`
--

INSERT INTO `serbaguna` (`no_reg`, `nama`, `nik`, `jk`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `status_perkawinan`, `pekerjaan`, `agama`, `alamat`, `rt`, `rw`, `reg_rw`, `tgl_reg`, `ket`, `dibuat_pada`, `kk`, `untuk`) VALUES
(1, 'Bangbung', '1234567890987654', 'Perempuan', 'Kota', '1998-03-12', 'Indonesia', 'Belum', 'Karyawan Swasta', 'Islam', 'Jl. Belakang Rumah No. 3', 9, 14, '123/skh/disao/014/19', '2019-09-20', 'Menerangkan bahwa orang ersebut belum pernah kawin dan tercatat di di Kantor Urusan Agama Kota Ini lah.', '2019-09-20 03:31:19', '0987654321234567', 'lamar kerja'),
(2, 'Nama', '1234567890123456', 'Laki-laki', 'Kota', '2003-02-27', 'Indonesia', 'Belum Kawin', 'Pelajar', 'Islam', 'Jl. Jalan No. 7893/9D', 1, 12, '32/skt/01/12/ix/19', '2019-09-29', 'Nama tersebut di atas lahir dari seorang ibu bernama Buuuuu, dan bapak Pasadasd', '2019-09-29 10:18:36', '0987654321098765', 'Membuat akta kelahiran di Disdukcapil Kota Ini'),
(3, 'Baru', '1234567890123456', 'Laki-laki', 'Kota Ini', '2009-03-04', 'Indonesia', 'Belum Kawin', 'Pelajar', 'Islam', 'Jl. Jalan Yu...', 9, 1, '239/kjds/01.1/ix/19', '2019-09-29', 'Nama tersebut di atas lahir dari seorang ibu bernama nama dan bapak bapak', '2019-09-29 10:27:20', '1234567890123456', 'Membuat akta kelahiran di Disdukcapil Kota Ini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skck`
--

CREATE TABLE `skck` (
  `no_reg` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `rt` tinyint(3) NOT NULL,
  `rw` tinyint(3) NOT NULL,
  `no_pengantar` varchar(255) NOT NULL,
  `tgl_pengantar` date NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skck`
--

INSERT INTO `skck` (`no_reg`, `nama`, `nik`, `kk`, `jk`, `tempat_lahir`, `tgl_lahir`, `status`, `pekerjaan`, `agama`, `alamat`, `rt`, `rw`, `no_pengantar`, `tgl_pengantar`, `dibuat_pada`) VALUES
(1, 'Andi', '3273161511010001', '1234567890123456', 'Laki-laki', 'Bandung', '2001-11-15', 'Belum Kawin', 'Mahasiswa', 'Islam', 'Jl. Sangkuriang', 4, 20, '421/SKCK/020/IX/2019', '2019-09-04', '2019-09-03 17:00:00'),
(2, 'Nama', '1234567890123456', '1234567890123456', 'Laki-laki', 'Kota', '1983-04-12', 'Kawin', 'Karyawan Swasta', 'Islam', 'Jl. mana aja no. 53456', 2, 1, '312/sk/02-01/ix-19', '2019-09-28', '2019-09-28 08:45:52'),
(3, 'bang', '1234567890123456', '1234567890123456', 'Perempuan', 'Bandung', '1992-07-22', 'Kawin', 'Pelajar', 'Islam', 'Jl. Luar Rumah No. 90/7E', 2, 1, '12/fee/32/19', '2019-09-09', '2019-09-09 13:48:00'),
(4, 'Nama', '1234567890123456', '0987654321234567', 'Perempuan', 'Kota', '1993-02-24', 'Belum Kawin', 'Magang', 'Islam', 'Jl. Apalagi No. 238/2A', 9, 5, '78/kb/09/05/ix/19', '2019-09-29', '2019-09-29 11:30:15'),
(5, 'Nandang', '1234567890123456', '1234567890123456', 'Laki-laki', 'Bandung', '1995-09-27', 'Belum Kawin', 'Pelajar', 'Islam', 'Jl. Jalan Gg. Gang No. 23', 2, 5, '32/02/05/ix/19', '2019-09-08', '2019-09-07 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sku`
--

CREATE TABLE `sku` (
  `no_reg` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `tempat_lhr` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `kerja` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `rt` tinyint(3) NOT NULL,
  `rw` tinyint(3) NOT NULL,
  `no_pengantar` varchar(255) NOT NULL,
  `tgl_pengantar` date NOT NULL,
  `usaha` varchar(255) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `untuk` varchar(255) NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sku`
--

INSERT INTO `sku` (`no_reg`, `nama`, `nik`, `jk`, `tempat_lhr`, `tgl_lahir`, `kewarganegaraan`, `kerja`, `agama`, `alamat`, `rt`, `rw`, `no_pengantar`, `tgl_pengantar`, `usaha`, `alamat_usaha`, `untuk`, `dibuat_pada`) VALUES
(1, 'Andika', '1234567890987654', 'Laki-laki', 'Kota', '1998-03-06', 'Indonesia', 'Pelajar', 'Islam', 'Jl. Rumah No. 1', 23, 9, '19/sku/09/ix/19', '2019-09-16', 'Pisang Hijau', 'Jl. Rumah No. 4', 'Ke bank', '2019-09-16 04:21:38'),
(2, 'Nama', '1234567890123456', 'Perempuan', 'Kota', '1993-07-08', 'Indonesia', 'Wiraswasta', 'Islam', 'Jl. Bisnis Anda No. 92 Blk', 3, 7, '28/ku/03-07/ix-19', '2019-09-29', 'Jualan Makanan', 'Jl. Isi Daging No. 87', 'Pinjaman Ke Bank', '2019-09-29 12:49:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `kremasi`
--
ALTER TABLE `kremasi`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `pbb`
--
ALTER TABLE `pbb`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `serbaguna`
--
ALTER TABLE `serbaguna`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `skck`
--
ALTER TABLE `skck`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `sku`
--
ALTER TABLE `sku`
  ADD PRIMARY KEY (`no_reg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
