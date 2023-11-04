-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2023 pada 15.09
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `kode_dosen` varchar(11) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`kode_dosen`, `nama_dosen`, `alamat`, `no_hp`, `foto`) VALUES
('0811068602', 'Aris Sudianto, M.Kom', 'Selong', '083864728390', 'anime_wallpaper_4k.jpg'),
('0809088502', 'Baiq Andriska Candra Permana, M.Kom', 'Pancor', '082264783896', 'ania.jpg'),
('0815117301', 'H. Muhammad Djamaluddin, BE, M.Kom', 'Pancor', '083366478578', 'anime_wallpaper_4k.jpg'),
('0808018204', 'Hamzan Ahmadi, M.Kom', 'Desa Pendem', '081267438654', 'anime_wallpaper_4k.jpg'),
('0827019003', 'Harianto, M.Kom', 'Siwi', '081268475839', 'anime_wallpaper_4k.jpg'),
('0811028502', 'Imam Fathrrahman, M.Kom', 'Mataram', '081364668379', 'anime_wallpaper_4k.jpg'),
('0825058402', 'Indra Gunawan, ST.,M.Pd.,M.Kom', 'Sakra', '081364668379', 'anime_wallpaper_4k.jpg'),
('0831128124', 'Lalu Kerta Wijaya, M.Pd', 'Padamara', '081266552233', 'anime_wallpaper_4k.jpg'),
('0831127329', 'Mahpuz, SE.,M.Kom', 'Sukarema', '083475638475', 'anime_wallpaper_4k.jpg'),
('0817048101', 'Moh. Farid wajdi.,M.Kom', 'Pancor', '083475638475', 'anime_wallpaper_4k.jpg'),
('0820117101', 'Muhamad Sadali, SE.,M.Kom', 'Pancor', '081364668379', 'anime_wallpaper_4k.jpg'),
('0821097201', 'Muhammad Wasil, SE.,M.Kom', 'Pringgasela', '081364668379', 'anime_wallpaper_4k.jpg'),
('0831127921', 'Suhartini, SE.,M.Kom', 'Krongkong', '081266552233', 'ania.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(50) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `jumlah_sks` varchar(100) NOT NULL,
  `kode_dosen` varchar(19) NOT NULL,
  `nim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `khs`
--

CREATE TABLE `khs` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `kode_mk` int(11) NOT NULL,
  `thn_akademik` year(4) NOT NULL,
  `semester` char(2) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `khs`
--

INSERT INTO `khs` (`id`, `nim`, `kode_mk`, `thn_akademik`, `semester`, `nilai`) VALUES
(0, 2375987, 11111, 2020, '1', 100),
(2, 1111111, 222222, 2022, '1', 99),
(3, 20050803, 222222, 2022, '5', 88);

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `kode_mk` varchar(11) NOT NULL,
  `kode_dosen` varchar(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `thn_akademik` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `nama_lengkap`, `password`, `level`) VALUES
(20, 'haruhi', 'nama_lengkap', '40a7f2fa93964cc81253c05598c46955', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `tgl_lahir`, `alamat`, `no_telp`, `foto`) VALUES
('210602001', 'AAN MUTASHIM', '2003-08-13', 'Jakarta, Kuningan, patra kuningan 15', '084573746782', 'anime_wallpaper_4k.jpg'),
('210602003', 'AKHMAD FAJRUL', '2002-01-04', 'BATU BELEK', '084736748398', 'anime_wallpaper_4k.jpg'),
('210602005', 'AZRIL MIQRAJI', '2003-01-17', 'DALEM LAUQ', '083445837453', 'anime_wallpaper_4k.jpg'),
('210602007', 'DIDIK RAHMAN', '2003-02-02', 'JONTAK', '084437483767', 'anime_wallpaper_4k.jpg'),
('210602009', 'HANDAYANI', '2003-01-05', 'PEKAT DOMPU', '081254637823', 'ania.jpg'),
('210602011', 'IRA AYU SEKAR DADU', '2003-04-27', 'SURALAGA', '083445837453', 'ania.jpg'),
('210602013', 'LALU SUHENDRI SAPUTRA', '2002-04-29', 'WANASABA', '082163748953', 'anime_wallpaper_4k.jpg'),
('210602015', 'M. WAHYUDI RAHMATUL QODRI', '2004-03-21', 'PENGADANGAN', '085748577448', 'anime_wallpaper_4k.jpg'),
('210602017', 'MUH. BADRUN', '2003-03-10', 'PERMATAN', '085833366775', 'anime_wallpaper_4k.jpg'),
('210602019', 'MUHAMMAD HARY RAMDHANI', '1999-08-01', 'LENDANG BEDURIK', '085833745898', 'anime_wallpaper_4k.jpg'),
('210602021', 'MULIANA SAFITRI', '2003-04-07', 'SELONG', '085733418849', 'ania.jpg'),
('210602023', 'NURIL AENI', '2002-11-09', 'DASAN TAPEN', '085754837408', 'ania.jpg'),
('210602025', 'RIKI GUSNADI', '2003-04-02', 'ORONG BUKAL', '085267750089', 'anime_wallpaper_4k.jpg'),
('210602027', 'SAPPATIN', '2001-07-10', 'GUNUNG AMPEN', '08374673839', 'ania.jpg'),
('210602029', 'TINA SORAYA', '2002-10-10', 'TIBU BUNUT\r\n', '082163748953', 'ania.jpg'),
('210602031', 'ZAINUL FIKRI', '2003-07-27', 'GUBUK TENGAK', '082226473987', 'anime_wallpaper_4k.jpg'),
('210602002', 'ADITYA PRANATA', '2002-10-10', 'BENTENG', '0847387483838', 'anime_wallpaper_4k.jpg'),
('210602004', 'ANISA EBI ABADI', '2000-10-24', 'GEGASIR', '084738478274', 'anime_wallpaper_4k.jpg'),
('210602006', 'BAIQ RASMILA SAPUTRI', '2003-07-07', 'SELAPARANG', '084734783782', 'anime_wallpaper_4k.jpg'),
('210602008', 'FEBRIANTO ANGGER WIJAYA', '2004-12-31', 'PANCOR', '083475839403', 'anime_wallpaper_4k.jpg'),
('210602010', 'HIDAYAT NUR WAHID', '2001-04-23', 'LOMBOK TIMUR', '084573746782', 'anime_wallpaper_4k.jpg'),
('210602012', 'LAELATUL JANNAH', '2002-07-21', 'TEBABAN', '08374837468', 'ania.jpg'),
('210602014', 'M. ALFIN ISWANDI', '2003-11-21', 'SELONG', '084863748399', 'anime_wallpaper_4k.jpg'),
('210602016', 'MARISA UTAMA', '1999-10-10', 'MONTONG GADUNG', '083354673892', 'anime_wallpaper_4k.jpg'),
('210602018', 'MUHAEDI ULUL AZMI', '2002-10-18', 'KEKALEK\r\n', '088147337899', 'anime_wallpaper_4k.jpg'),
('210602020', 'MUHAMMAD NASIR SUMAR', '2002-10-30', 'GETAP', '088164837478', 'anime_wallpaper_4k.jpg'),
('210602022', 'NANDA LIAN BESTARI', '2003-04-25', 'DASAN LIAN', '084938475938', 'ania.jpg'),
('210602024', 'PRAMANDANE SETYA YUDHA', '2002-02-22', 'LOMBOK TIMUR\r\n', '088885467388', 'anime_wallpaper_4k.jpg'),
('210602026', 'ROFIQUL WALIDAIN', '1999-09-09', 'AMPENAN', '081374890843', 'anime_wallpaper_4k.jpg'),
('210602028', 'SITI QUTHROTUNNADA', '2003-04-01', 'PANCOR', '0847384782987', 'ania.jpg'),
('210602030', 'YENI WIDYA KARTIKA', '2002-04-03', 'RUMBUK', '081273848928', 'ania.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(11) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `kode_dosen` varchar(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id`, `kode_mk`, `nama_mk`, `kode_dosen`, `sks`) VALUES
(8, 'TI6101', 'Matematika Dasar', '0811068602', 2),
(9, 'TI6102', 'Matematika Distrik', '0811068602', 3),
(10, 'TI6103', 'Pancasila', '0809088502', 2),
(11, 'TI6104', 'Kewarganegaraan', '0815117301', 2),
(12, 'TI6105', 'Bahasa Indonesia', '0808018204', 2),
(13, 'TI6106', 'Bahasa Inggris 1', '0827019003', 2),
(14, 'TI6107', 'Pendidikan Agama', '0811028502', 2),
(15, 'TI6108', 'Literasi Digital', '0825058402', 2),
(16, 'TI6109', 'Pengantar Teknologi Informasi', '0831128124', 3),
(17, 'TI6201', 'Kalkulus', '0831127329', 3),
(18, 'TI6202', 'Bahasa Inggris 2', '0831127329', 2),
(19, 'TI6203', 'Aljabar Linear', '0817048101', 3),
(20, 'TI6204', 'Algoritma 1', '0820117101', 3),
(21, 'TI6205', 'Dasar Permrograman', '0820117101', 3),
(22, 'TI6206', 'Jaringan Komputer', '0821097201', 3),
(23, 'TI6207', 'Organsasi & Arsitektur komputer', '0831127921', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Pegawai','Operator','Administrator','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`id`, `username`, `nama_lengkap`, `password`, `level`) VALUES
(1, 'admin', 'Muhammad Hafid', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(2, 'operator', 'Muhammad Uwais', '4b583376b2767b923c3e1da60d10de59', 'Operator'),
(3, 'pegawai', 'Indrianti', '047aeeb234644b9e2d4138ed3bc7976a', 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `khs`
--
ALTER TABLE `khs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
