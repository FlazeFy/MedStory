-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2021 pada 13.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medstory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokterpraktik`
--

CREATE TABLE `dokterpraktik` (
  `id_dokter` int(6) NOT NULL,
  `namaDokter` varchar(35) NOT NULL,
  `spesialis` varchar(35) NOT NULL,
  `jamMulai` time NOT NULL,
  `jamSelesai` time NOT NULL,
  `hariPraktik` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokterpraktik`
--

INSERT INTO `dokterpraktik` (`id_dokter`, `namaDokter`, `spesialis`, `jamMulai`, `jamSelesai`, `hariPraktik`, `lokasi`, `image`) VALUES
(1, 'Dr. Usman Yousaf, Sp.M', 'Mata', '17:00:00', '20:00:00', 'Su,Mo,Tu,We,Th', 'Apotik Kimia Farma', ''),
(2, 'Drg. Beatrix Beargen', 'Gigi', '15:00:00', '22:00:00', 'Mo,Tu,We,Fr', 'Apotik Kimia Farma', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(6) NOT NULL,
  `kodeBooking` varchar(6) NOT NULL,
  `namaPengguna` varchar(35) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `namaDokter` varchar(35) NOT NULL,
  `lokasi` varchar(40) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `kodeBooking`, `namaPengguna`, `spesialis`, `namaDokter`, `lokasi`, `jam`, `tanggal`) VALUES
(1, 'MUYF01', 'flazefy', 'Mata', 'Dr. Usman Yousaf, Sp.M', 'Apotik Kimia Farma', '16:30:00', '2022-01-04'),
(2, 'GAFF01', 'flazefy', 'Gigi', 'Drg. Albert Flick', 'Apotik Kimia Farma', '19:00:00', '2022-01-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginuser`
--

CREATE TABLE `loginuser` (
  `id_login` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loginuser`
--

INSERT INTO `loginuser` (`id_login`, `username`, `password`) VALUES
(49, 'richardKyle', 'tester'),
(50, 'FlazeFy', 'leo8801'),
(51, 'FlazeFy', 'nopass123'),
(52, 'FlazeFy', 'tester'),
(53, 'FlazeFy', 'tester'),
(54, 'FlazeFy', 'nopass123'),
(55, 'richardKyle', 'ricahrd'),
(56, 'FlazeFy', 'nopass123'),
(57, 'FlazeFy', 'leo8801'),
(58, 'FlazeFy', 'leo8801'),
(59, 'richardKyle', 'kyle123'),
(60, 'flazefy', 'leo8801'),
(61, 'flazefy', 'leo8801'),
(62, 'vasilyKash', 'icyman'),
(63, 'FlazeFy', 'leo8801'),
(64, 'vasilyKash', 'icyman'),
(65, 'flazefy', 'leo8801'),
(66, 'vasilykash', 'icyman'),
(67, 'vasilyKash', 'icyman'),
(68, 'flazefy', 'leo8801'),
(69, 'flazefy', 'leo8801'),
(70, 'vasilyKash', 'icyman'),
(71, 'flazefy', 'leo8801'),
(72, 'flazefy', 'leo8801');

-- --------------------------------------------------------

--
-- Struktur dari tabel `newsfeed`
--

CREATE TABLE `newsfeed` (
  `idBerita` int(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `newsfeed`
--

INSERT INTO `newsfeed` (`idBerita`, `title`, `tanggal`) VALUES
(1, 'Resmi! Kasus Aktif Covid-19 di Indonesia Kalahkan India', '2021-05-10'),
(2, 'Menkes: Vaksin Moderna untuk Nakes karena Stok Terbatas', '2021-05-12'),
(3, 'Susul Moderna, Vaksin Pfizer Sebentar Lagi Dapat Izin di RI', '2021-05-13'),
(4, 'Vaksinasi Tahap 3 Dimulai, Sasar Anak Usia 12-17 Tahun', '2021-05-17'),
(5, 'Cara menghindari diabetes sejak dini', '2021-05-19'),
(6, 'Cara mengatasi penyakit maag agar tidak kambuh lagi', '2021-05-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_darah`
--

CREATE TABLE `pemeriksaan_darah` (
  `id_pemeriksaanD` int(6) NOT NULL,
  `namaPengguna` varchar(35) NOT NULL,
  `namaDokter` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `j_Leukosit` varchar(16) NOT NULL,
  `j_Eritrosit` varchar(16) NOT NULL,
  `j_Trombosit` varchar(16) NOT NULL,
  `j_Hemoglobin` varchar(16) NOT NULL,
  `j_Hematrokit` varchar(16) NOT NULL,
  `j_Glukosa` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemeriksaan_darah`
--

INSERT INTO `pemeriksaan_darah` (`id_pemeriksaanD`, `namaPengguna`, `namaDokter`, `tanggal`, `jam`, `lokasi`, `j_Leukosit`, `j_Eritrosit`, `j_Trombosit`, `j_Hemoglobin`, `j_Hematrokit`, `j_Glukosa`) VALUES
(1, 'flazefy', 'Dr. Josef Mengele', '2021-12-01', '18:25:00', 'Apotik Medika', '11,0 / 5,0-10,0', '4,4 / 4,5-5,5', '- / -', '- / -', '- / -', '130 / <140');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_penyakit`
--

CREATE TABLE `pemeriksaan_penyakit` (
  `id_pemeriksaanP` int(6) NOT NULL,
  `namaPengguna` varchar(35) NOT NULL,
  `namaDokter` varchar(40) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `hasil` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemeriksaan_penyakit`
--

INSERT INTO `pemeriksaan_penyakit` (`id_pemeriksaanP`, `namaPengguna`, `namaDokter`, `jenis`, `hasil`, `tanggal`, `jam`, `lokasi`) VALUES
(1, 'flazefy', 'Dr. Josef Mengele', 'Covid (PCR)', 'negatif', '2021-12-18', '09:30:00', 'RS Provita Jayapura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(7) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempatLahir` varchar(25) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `tinggiBadan` int(3) NOT NULL,
  `beratBadan` int(3) NOT NULL,
  `jKelamin` varchar(10) NOT NULL,
  `namaLengkap` varchar(35) NOT NULL,
  `namaPengguna` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `nomorPonsel` varchar(14) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nik`, `tempatLahir`, `tanggalLahir`, `alamat`, `pekerjaan`, `tinggiBadan`, `beratBadan`, `jKelamin`, `namaLengkap`, `namaPengguna`, `email`, `nomorPonsel`, `password`) VALUES
(1, '1234567891234567', 'Berlin', '1996-08-09', 'Jl. Telekomunikasi No.1', 'Mahasiswa', 182, 70, 'Pria', 'Leonardho Rante Sitanggang', 'flazefy', 'flazen.edu@gmail.com', '08114882001', 'leo8801'),
(2, '1231231231231235', 'Montreal', '1997-11-07', '3551 Willison Street', 'Wiraswasta', 185, 73, 'Pria', 'Kyle Richard', 'richardKyle', 'kylerich8181@gmail.com', '081248857133', 'kyle123'),
(5, '1231231231231240', 'Moscow', '1980-04-20', 'Pochtovaya, bld. 28, appt. 11', 'Teknisi Nuklir', 170, 86, '', 'Vasili Kashimir', 'vasilyKash', 'vasiliKashimir156@gmail.com', '0811488901', 'icyman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayatkesehatan`
--

CREATE TABLE `riwayatkesehatan` (
  `idRiwayat` int(6) NOT NULL,
  `namaPengguna` varchar(30) NOT NULL,
  `namaDokter` varchar(30) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `sejak` varchar(15) NOT NULL,
  `keluhan` varchar(200) NOT NULL,
  `diagnosa` varchar(200) NOT NULL,
  `solusi` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `penyakit` varchar(20) NOT NULL,
  `kontak` varchar(14) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayatkesehatan`
--

INSERT INTO `riwayatkesehatan` (`idRiwayat`, `namaPengguna`, `namaDokter`, `spesialis`, `sejak`, `keluhan`, `diagnosa`, `solusi`, `tanggal`, `lokasi`, `penyakit`, `kontak`, `alamat`) VALUES
(1, 'flazefy', 'Dr. Braidy Rose', 'Penyakit Dalam', '1 Minggu', 'Dada sakit setelah makan, Terkadang mual & muntah, Terkadang berak darah, Perut melilit jika lapar, Sering bersendawa', 'Tekanan darah 100/70, BB 63 Kg & Asam lambung tinggi', 'Obat Promaag 2 kali/sehari, Metrodinazole 1 kali/sehari, Istirahat yang cukup, Kurangi kafein, makanan pedas, dan asam', '2008-07-04', 'RS Dian Harapan', 'Maag Kronis', '967572123', 'Jl. Teruna Bakti Yabansai Waena,  Yabansai, Heram'),
(2, 'flazefy', 'Drg. Albert Flick', 'Gigi', '2 Minggu', 'Gigi sebelah kanan ngilu', 'Gigi geraham impaksi', 'Obat Ibuprofen 2 kali/sehari, Dexamethasone 2 kali/sehari, Asam mefenamat 1 kali/sehari, Istirahat yang cukup, hindari makanan/minuman panas dan pedas untuk 1 minggu, jangan berkumur terlalu kencang', '2009-04-07', 'Apotik Kimia Farma', 'Cabut Gigi', '1240074314', 'Jl. Raya Waena Sentani, Waena,  Heram'),
(3, 'flazefy', 'Dr. Usman Yousaf, Sp.M', 'Mata', '10 tahun', 'Penglihatan kabur dan mudah pusing', 'Rabun Jauh -5 dan -6', 'Operasi lasik', '2021-08-09', 'Apotik Kimia Farma', 'Rabun Jauh', '1240074314', 'Jl. Raya Waena Sentani, Waena,  Heram');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokterpraktik`
--
ALTER TABLE `dokterpraktik`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indeks untuk tabel `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indeks untuk tabel `pemeriksaan_darah`
--
ALTER TABLE `pemeriksaan_darah`
  ADD PRIMARY KEY (`id_pemeriksaanD`);

--
-- Indeks untuk tabel `pemeriksaan_penyakit`
--
ALTER TABLE `pemeriksaan_penyakit`
  ADD PRIMARY KEY (`id_pemeriksaanP`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `riwayatkesehatan`
--
ALTER TABLE `riwayatkesehatan`
  ADD PRIMARY KEY (`idRiwayat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokterpraktik`
--
ALTER TABLE `dokterpraktik`
  MODIFY `id_dokter` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id_login` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `newsfeed`
--
ALTER TABLE `newsfeed`
  MODIFY `idBerita` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_darah`
--
ALTER TABLE `pemeriksaan_darah`
  MODIFY `id_pemeriksaanD` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_penyakit`
--
ALTER TABLE `pemeriksaan_penyakit`
  MODIFY `id_pemeriksaanP` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `riwayatkesehatan`
--
ALTER TABLE `riwayatkesehatan`
  MODIFY `idRiwayat` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
