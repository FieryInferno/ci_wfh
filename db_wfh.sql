-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2021 pada 08.28
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wfh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alokasi_pekerjaan`
--

CREATE TABLE `alokasi_pekerjaan` (
  `id_bekerja` varchar(20) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `regional_pekerjaan` varchar(100) NOT NULL,
  `status` enum('Selesai','Menunggu Verifikasi','Belum Selesai','') NOT NULL,
  `catatan` text NOT NULL,
  `tanggal` date NOT NULL,
  `hasil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alokasi_pekerjaan`
--

INSERT INTO `alokasi_pekerjaan` (`id_bekerja`, `nama_pekerjaan`, `nama_pegawai`, `dari`, `bagian`, `regional_pekerjaan`, `status`, `catatan`, `tanggal`, `hasil`) VALUES
('BK-0001', 'HD (Harga Perdesaan)', 'Sopia Maola Zein', 'Adi Wijaya', 'Kepala Seksi Distribusi', 'Subang', 'Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-03-01', ''),
('BK-0005 ', 'HD (Harga Perdesaan)', 'Sopia Maola Zein', 'Adi Wijaya ', ' Kepala Seksi Distribusi', 'Subang', 'Belum Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-04-01', ''),
('BK-0006 ', 'HPS (Harga Produsen)', 'Adhi Candra', 'Adi Wijaya ', ' Kepala Seksi Distribusi', 'Binong', 'Belum Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-04-01', ''),
('BK-0007 ', 'HPG (Harga Produsen Gabah)', 'Adhi Candra', 'Adi Wijaya ', ' Kepala Seksi Distribusi', 'Subang', 'Belum Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-04-01', ''),
('BK-0008 ', 'HPG (Harga Produsen Gabah)', 'Sopia Maola Zein', 'Adi Wijaya ', ' Kepala Seksi Distribusi', 'Binong', 'Belum Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-04-01', ''),
('BK-0009 ', 'HD (Harga Perdesaan)', 'Pani Sri Mulyani', 'Adi Wijaya ', ' Kepala Seksi Distribusi', 'Binong', 'Belum Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-04-01', ''),
('BK-0010 ', 'HD (Harga Perdesaan)', 'Adhi Candra', 'Adi Wijaya ', ' Kepala Seksi Distribusi', 'Binong', 'Belum Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-04-01', ''),
('BK-0011 ', 'HD (Harga Perdesaan)', 'Sopia Maola Zein', 'Adi Wijaya ', ' Kepala Seksi Distribusi', 'Binong', 'Belum Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-04-01', ''),
('BK-0012 ', 'HD (Harga Perdesaan)', 'Pani Sri Mulyani', 'Adi Wijaya ', ' Kepala Seksi Distribusi', 'Binong', 'Belum Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-04-12', ''),
('BK-0013 ', 'HD (Harga Perdesaan)', 'Pani Sri Mulyani', 'Adi Wijaya ', ' Kepala Seksi Distribusi', 'Subang', 'Belum Selesai', ' Pastikan pendataan dilakukan dengan baik', '2021-04-12', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat_user`
--

CREATE TABLE `chat_user` (
  `user_id` int(11) NOT NULL,
  `login_oauth_uid` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat_user`
--

INSERT INTO `chat_user` (`user_id`, `login_oauth_uid`, `first_name`, `last_name`, `email_address`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, '101008716593013668399', 'Pani', 'sri mulyani', 'panisrimulyani22@gmail.com', 'https://lh3.googleusercontent.com/-sqPRMhbdBMI/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucncY7hJjuupSrJHJsjkgnUwd', '2021-01-03 10:18:04', '2021-01-08 05:51:57'),
(2, '108124365036363610099', 'Dika', 'Maulana', 'mdika8140@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GjJXyDDk7KcEPHIoK-4ID9DI3QUls8Kju-QoFhx=s96-c', '2021-01-03 10:18:41', '2021-01-05 04:23:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pekerjaan`
--

CREATE TABLE `detail_pekerjaan` (
  `id_kegiatan` int(100) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `id_pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pekerjaan`
--

INSERT INTO `detail_pekerjaan` (`id_kegiatan`, `nama_kegiatan`, `id_pekerjaan`) VALUES
(3, 'Melakukan Survey Pasar', 'PK-0001'),
(4, 'Mendata harga sayuran', 'PK-0001'),
(5, 'Melakukan Kegiatan Mensurvey', 'PK-0003 '),
(6, 'Melakukan Survey Pasar', 'PK-0002'),
(7, 'nsnzmn', 'PK-0001'),
(8, ' zmmz x', 'PK-0005 '),
(9, ' zmmz x', 'PK-0005 '),
(10, 'jnmxznx', 'PK-0001'),
(11, 'Pembuatan miniatur candi borobudur', 'PK-0001'),
(12, 'Pembuatan miniatur candi borobudur', 'PK-0001'),
(13, 'Melakukan Survey Pasar ke desa', 'PK-0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id` int(20) NOT NULL,
  `golongan` varchar(15) NOT NULL,
  `pangkat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id`, `golongan`, `pangkat`) VALUES
(1, 'I', 'I/A (Juru Muda) '),
(2, 'I', 'I/B (Juru Muda Tingkat I)'),
(5, 'I', 'I/C (Juru)'),
(6, 'I', 'I/D (Juru Tingkat I)'),
(7, 'II', 'II/A (Pengatur Muda)'),
(8, 'II', 'II/B (Pengatur Muda Tingkat I)'),
(9, 'II', 'II/C (Pengatur)'),
(10, 'II', 'II/D (Pengatur Tingkat I)'),
(11, 'III', 'III/A (Penata Muda)'),
(12, 'III', 'III/B (Penata Muda Tingkat I)'),
(13, 'III', 'III/C (Penata)'),
(14, 'III', 'III/D (Penata Tingkat I)'),
(15, 'IV', 'IV/A (Pembina)'),
(16, 'IV', 'IV/B (Pembina Tingkat I)'),
(17, 'IV', 'IV/C (Pembina Utama Muda)'),
(18, 'IV', 'IV/DPembina Utama Madya)'),
(19, 'IV', 'IV/E (Pembina Utama)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(12) NOT NULL,
  `jabatan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(2, 'Kepala Sub Bagian Tata Usaha'),
(3, 'Koordinator Fungsi'),
(4, 'Fungsional Statistik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_pegawai` varchar(191) NOT NULL,
  `1` varchar(191) NOT NULL,
  `2` varchar(191) NOT NULL,
  `3` varchar(191) NOT NULL,
  `4` varchar(191) NOT NULL,
  `5` varchar(191) NOT NULL,
  `6` varchar(191) NOT NULL,
  `7` varchar(191) NOT NULL,
  `8` varchar(191) NOT NULL,
  `9` varchar(191) NOT NULL,
  `10` varchar(191) NOT NULL,
  `11` varchar(191) NOT NULL,
  `12` varchar(191) NOT NULL,
  `13` varchar(191) NOT NULL,
  `14` varchar(191) NOT NULL,
  `15` varchar(191) NOT NULL,
  `16` varchar(191) NOT NULL,
  `17` varchar(191) NOT NULL,
  `18` varchar(191) NOT NULL,
  `19` varchar(191) NOT NULL,
  `20` varchar(191) NOT NULL,
  `21` varchar(191) NOT NULL,
  `22` varchar(191) NOT NULL,
  `23` varchar(191) NOT NULL,
  `24` varchar(191) NOT NULL,
  `25` varchar(191) NOT NULL,
  `26` varchar(191) NOT NULL,
  `27` varchar(191) NOT NULL,
  `28` varchar(191) NOT NULL,
  `29` varchar(191) DEFAULT NULL,
  `30` varchar(191) DEFAULT NULL,
  `31` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_pegawai`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`) VALUES
(14, '1', 'wfh', 'wfo', 'libur', 'libur', 'wfh', 'wfo', 'wfh', 'wfo', 'wfh', 'libur', 'libur', 'wfo', 'wfh', 'wfo', 'wfh', 'wfo', 'libur', 'libur', 'wfh', 'wfo', 'wfh', 'wfo', 'wfh', 'libur', 'libur', 'wfo', 'wfh', 'wfo', 'wfh', 'wfo', NULL),
(15, '82', 'wfo', 'wfh', 'libur', 'libur', 'wfo', 'wfh', 'wfo', 'wfh', 'wfo', 'libur', 'libur', 'wfh', 'wfo', 'wfh', 'wfo', 'wfh', 'libur', 'libur', 'wfo', 'wfh', 'wfo', 'wfh', 'wfo', 'libur', 'libur', 'wfh', 'wfo', 'wfh', 'wfo', 'wfh', NULL),
(16, '83', 'wfh', 'wfo', 'libur', 'libur', 'wfh', 'wfo', 'wfh', 'wfo', 'wfh', 'libur', 'libur', 'wfo', 'wfh', 'wfo', 'wfh', 'wfo', 'libur', 'libur', 'wfh', 'wfo', 'wfh', 'wfo', 'wfh', 'libur', 'libur', 'wfo', 'wfh', 'wfo', 'wfh', 'wfo', NULL),
(17, '84', 'wfo', 'wfh', 'libur', 'libur', 'wfo', 'wfh', 'wfo', 'wfh', 'wfo', 'libur', 'libur', 'wfh', 'wfo', 'wfh', 'wfo', 'wfh', 'libur', 'libur', 'wfo', 'wfh', 'wfo', 'wfh', 'wfo', 'libur', 'libur', 'wfh', 'wfo', 'wfh', 'wfo', 'wfh', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_pekerjaan`
--

CREATE TABLE `laporan_pekerjaan` (
  `id_aktivitas` int(100) NOT NULL,
  `nama_aktivitas` varchar(100) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `volume` int(10) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `pemberi_kerja` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_pegawai` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_pekerjaan`
--

INSERT INTO `laporan_pekerjaan` (`id_aktivitas`, `nama_aktivitas`, `satuan`, `volume`, `durasi`, `pemberi_kerja`, `status`, `waktu`, `id_pegawai`) VALUES
(2, 'a', 'a', 0, 'a', 'a', 'terlambat', '2021-04-08 13:50:15', '82'),
(3, 'Membuka aplikasi absensi', 'aplikasi', 2, '30 menit', 'Kepala Sub Bagian Tata Usaha', 'terlambat', '2021-04-08 14:59:38', '82'),
(4, 'Membuka aplikasi absensi', 'aplikasi', 2, '30 menit', 'Kepala Sub Bagian Tata Usaha', 'tepat_waktu', '2021-04-09 01:41:23', '82');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `namagolongan` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `akses` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jenis_kelamin`, `alamat`, `tempatlahir`, `tanggallahir`, `jabatan`, `namagolongan`, `id`, `username`, `password`, `akses`, `foto`) VALUES
('7678', 'Pani Sri Mulyani', 'Perempuan', 'Blok Kaum, Kelurahan Cigadung Subang', 'Jakarta', '2021-04-01', 'Koordinator ', '1/B (Juru Muda Tingk', 1, 'panismy', 'pani1234', 'admin', 'pani.jpg'),
('7677', 'Sopia Maola Zein', 'Perempuan', 'Blok Dangdeur, Subang', 'Subang', '2021-04-10', 'Kepala BPS', '1/A (Juru Muda)', 82, 'sopia', 'sopiazein', 'pegawai', 'avatar51.png'),
('12111090', 'Adhi Candra', 'Laki-laki', 'Subang', 'Subang', '2021-04-07', 'KSK', 'I/A (Juru Muda) ', 83, 'admin01', 'zezen', 'tata_usaha', 'Daftar_Pekerjaan.png'),
('7678', 'Adi Wijaya', 'Perempuan', 'Subang', 'Subang', '2021-04-06', 'Kepala Seksi Distribusi', 'IV/C (Pembina Utama ', 84, 'kasi', 'kasi', 'Kepala Seksi', 'Daftar_Pekerjaan1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` varchar(20) NOT NULL,
  `nama_pekerjaan` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `jenis` enum('Tahunan','Bulanan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `bagian`, `jenis`) VALUES
('PK-0001', 'HD (Harga Perdesaan)', 'Kepala Seksi Distribusi', 'Bulanan'),
('PK-0002', 'HKG', 'Kepala Seksi Distribusi', 'Tahunan'),
('PK-0003 ', 'HPS (Harga Produsen)', 'Kepala Seksi Distribusi', 'Bulanan'),
('PK-0004 ', 'HPG (Harga Produsen Gabah)', 'Kepala Seksi Distribusi', 'Bulanan'),
('PK-0005 ', 'HPS (Harga Produsen)', 'Kepala Seksi Distribusi', 'Bulanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regional_pekerjaan`
--

CREATE TABLE `regional_pekerjaan` (
  `id_regional` varchar(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `regional_pekerjaan`
--

INSERT INTO `regional_pekerjaan` (`id_regional`, `lokasi`) VALUES
('1', 'Subang'),
('2', 'Binong');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alokasi_pekerjaan`
--
ALTER TABLE `alokasi_pekerjaan`
  ADD PRIMARY KEY (`id_bekerja`);

--
-- Indeks untuk tabel `chat_user`
--
ALTER TABLE `chat_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `detail_pekerjaan`
--
ALTER TABLE `detail_pekerjaan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `laporan_pekerjaan`
--
ALTER TABLE `laporan_pekerjaan`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat_user`
--
ALTER TABLE `chat_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_pekerjaan`
--
ALTER TABLE `detail_pekerjaan`
  MODIFY `id_kegiatan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `laporan_pekerjaan`
--
ALTER TABLE `laporan_pekerjaan`
  MODIFY `id_aktivitas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
