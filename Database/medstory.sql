-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2021 pada 16.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

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
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(16) NOT NULL,
  `namaberita` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `fotoberita` varchar(255) NOT NULL,
  `isiberita` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `namaberita`, `tanggal`, `fotoberita`, `isiberita`) VALUES
(18, 'Vaksinasi Covid Dosis Pertama di Bandung Capai 100 Persen', '2021-12-20', '1640013429-ilustrasi-virus-corona__0107.jpg', 'Penyuntikan vaksin Covid-19 dosis pertama di Kota Bandung sudah mencapai 100 persen sejak 19 Desember 2021. Penyuntikan dosis pertama vaksinasi bahkan telah melebihi target. \"Kita sudah melebihi target atau total sudah 100,20 persen. Untuk vaksin kedua sudah mencapai 88,70 persen,\" kata Ketua Harian Satgas Penanganan Covid-19 Kota Bandung Ema Sumarna, Senin (20/12). \r\n\r\nDiketahui, target vaksinasi dosis pertama di Kota Bandung adalah 1.952.358 orang atau 70 persen dari jumlah penduduk. Akan tetapi, penyuntikkan sudah dilakukan melebih target, yakni 1.956.190 orang. \r\n\r\nEma menjelaskan, capaian ini sudah sangat baik mengingat Pemerintah Kota (Pemkot) Bandung terus mengakselerasi agar target 100 persen vaksinasi tercapai pada Desember 2021. Sedangkan, untuk dosis kedua, masih terkendala mengingat ada masa jeda pemberian vaksin dan harus mencocokan terkait jadwal penyuntikan. \r\n\r\nPenyuntikan vaksin dosis kedua hingga saat ini sudah mencapai 1.732.031 orang. \"Vaksin tidak ada masalah, tapi mengenai penjadwalan orang yang mungkin pada saatnya vaksin bisa saja dalam waktu bersamaan punya agenda lain dan itu tidak mudah,\" ungkapnya. Dari laporan terbaru kondisi pandemi, Ema mengatakan kasus positif cenderung terkendali. Keterisian tempat tidur ada di kisaran 5 persen dan positivity rate sebesar 1,2. \r\n\r\nTerkait kasus varian baru Omicron, Ema mengungkapkan bawa saat ini belum ada temuan kasus. Meski begitu, dia mewanti-wanti agar warga Kota Bandung tak lengah dan mengabaikan protokol kesehatan. \"Hari ini belum ditemukan Omnicron dan mudah-mudahan selamanya tidak. Tapi yang paling utama itu tetap semua masyarakat harus prokes yang kuat dan disiplin tinggi,\" ujarnya.'),
(20, 'Populer Nasional: Sorong Diguncang Gempa Hingga Serbuan Vaksinasi Covid-19 di Bandung', '2021-12-20', '1640014867-TxB2z3Gdj4.jpg', 'Sorong: Gempa magnitudo 5,5 mengguncang Kota Sorong, Papua Barat, pada Minggu, 19 Desember 2021, pukul 01.26 WIB. Guncangan gempa mengakibatkan warga panik dan berhamburan keluar rumah. \r\n \r\nMengutip Media Indonesia, tidak ada korban jiwa dari guncangan gempa. Selain itu, disebut tidak ada korban dari kerusakan rumah. \r\n \r\nSementara itu, melansir laman Badan Meteorologi, Klimatologi, dan Geofisika (BMKG), lokasi gempa berada di titik koordinat 0.63 Lintang Selatan (LS) dan 131.49 Bujur Timur (BT). Pusat gempa berada di kedalaman 10 kilometer (km).\r\n\r\n\"Pusat gempa berada di laut 35 km Timur Laut Kota Sorong,\" tulis laman BMKG.\r\n \r\nGuncangan gempa dirasakan hingga skala Modified Mercalli Intensity (MMI): IV Sorong, IV Sorong Selatan, dan III Raja Ampat. Skala MMI IV artinya dirasakan oleh orang banyak di dalam rumah dan beberapa orang di luar rumah, gerabah pecah, jendela/pintu berderik, dan dinding berbunyi.\r\n \r\nSedangkan, MMI III artinya gempa dirasakan nyata di dalam rumah seperti seakan-akan ada truk berlalu. Sementara itu, gempa pun disebut tidak berpotensi tsunami. (MS).\r\n \r\nBerita terkait gempa di Sorong menjadi paling banyak dibaca di kanal Nasional Medcom.id. Berita lain yang juga tak kalah menarik pembaca terkait wacana edukasi protokol kesehatan (prokes).\r\n\r\nMenteri Pertahanan (Menhan) Prabowo Subianto mengusulkan edukasi prokes dilakukan dengan cara berbeda. Masyarakat perlu diberi pemahaman bahwa kepatuhan prokes sama dengan aksi bela negara.\r\n \r\n“Perlu juga menggunakan narasi-narasi yang patriotik dan bombastis,” kata juru bicara Menhan Dahnil Anzar Simanjuntak seperti dikutip dari YouTube pada Minggu, 19 Desember 2021.’\r\n\r\nDahnil menyebut narasi bisa berupa semangat nasionalisme melalui prokes. Sebab, masyarakat melindungi diri sendiri, orang lain, dan keselamatan bangsa dari covid-19.\r\n \r\n“Membangun kesadaran kolektif bela negara melalui tindakan pencegahan menjadi penting,” papar dia.\r\n \r\nMenurut Dahnil, kedisiplinan memakai masker, menjaga jarak, dan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_diskusi`
--

CREATE TABLE `forum_diskusi` (
  `id_forum` int(11) NOT NULL,
  `diskusi` varchar(200) NOT NULL,
  `tanggaldiskusi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `forum_diskusi`
--

INSERT INTO `forum_diskusi` (`id_forum`, `diskusi`, `tanggaldiskusi`) VALUES
(14, 'Apakah vaksin bisa untuk anak berumur dibawah 12 tahun?', '2021-12-20'),
(15, 'Apa bedanya vaksin sinova dengan pfizer?', '2021-12-20'),
(16, 'Apa efek samping setelah di vaksin?', '2021-12-20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `forum_diskusi`
--
ALTER TABLE `forum_diskusi`
  ADD PRIMARY KEY (`id_forum`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `forum_diskusi`
--
ALTER TABLE `forum_diskusi`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
