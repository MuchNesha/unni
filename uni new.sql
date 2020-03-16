-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 08.42
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `active`) VALUES
(1, 'admin', 'admin', 1),
(2, 'aji', 'jancok', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(5) NOT NULL,
  `id_pelanggan` int(5) DEFAULT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `provinsi` varchar(5) DEFAULT NULL,
  `kabupaten` varchar(5) DEFAULT NULL,
  `kecamatan` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `ukuran` varchar(4) NOT NULL,
  `stok` int(255) NOT NULL,
  `deskripsi_barang` text DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `harga_barang` decimal(10,0) DEFAULT NULL,
  `grosir_barang` decimal(10,0) DEFAULT NULL,
  `per` int(100) NOT NULL,
  `diskon_barang` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_jenis`, `nama_barang`, `ukuran`, `stok`, `deskripsi_barang`, `gambar`, `harga_barang`, `grosir_barang`, `per`, `diskon_barang`) VALUES
(42, 2, 'AzaraOrens 3', 'M', 20, 'Matt : Silk Velvet\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-12_at_20_25_42.jpeg', '30000', '29000', 1, '0'),
(43, 2, 'OsakaRed 2', 'M', 15, 'Matt : Pollycotton\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-12_at_20_25_59.jpeg', '25000', '24000', 1, '0'),
(44, 2, 'AzaraCoklat 5', 'M', 21, 'Matt : silk velvet\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-12_at_20_25_51.jpeg', '30000', '29000', 1, '0'),
(45, 2, 'AzaraStripe 4', 'M', 10, 'Matt : Pollycotton\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-13_at_14_26_58.jpeg', '25000', '24000', 1, '0'),
(46, 2, 'AzaraFlower 9', 'M', 20, 'Matt : Silk Velvet\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-12_at_20_25_41.jpeg', '30000', '29000', 1, '0'),
(47, 2, 'AzaraBlue 6', 'M', 25, 'Matt : Silk Velvet\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-13_at_14_27_04.jpeg', '30000', '29000', 1, '0'),
(48, 2, 'OsakaRed 1', 'M', 15, 'Matt : Pollycotton\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-12_at_20_25_54.jpeg', '25000', '24000', 1, '0'),
(49, 2, 'AzaraStripes 10', 'M', 14, 'Matt : Silk Velvet\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-13_at_14_27_01_(2).jpeg', '30000', '29000', 1, '0'),
(50, 2, 'AzaraPink 12', 'M', 10, 'Matt : Pollycotton\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-12_at_20_25_39.jpeg', '25000', '24000', 1, '0'),
(51, 2, 'AzaraRed 11', 'M', 16, 'Matt : silk velvet\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-13_at_14_27_00.jpeg', '30000', '29000', 1, '0'),
(52, 2, 'AzaraBox 8', 'M', 20, 'Matt : Silk Velvet\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-13_at_14_27_02_(1).jpeg', '30000', '29000', 1, '0'),
(53, 2, 'AzaraLeaves 7', 'M', 15, 'Matt : Silk Velvet\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-13_at_14_27_03.jpeg', '30000', '29000', 1, '0'),
(54, 2, 'AzaraMix 11', 'M', 11, 'Matt : silk velvet\r\nUk. 110x110 cm\r\n', 'WhatsApp_Image_2020-01-13_at_14_27_01.jpeg', '30000', '29000', 1, '0'),
(56, 1, 'baju muslim', 'M', 10, 'ini baju', 'Azarared11.png', '10000', '5000', 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Hijab Instan'),
(2, 'Hijab Segiempat '),
(3, 'Baju Muslim'),
(4, 'Aksesoris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(10) NOT NULL,
  `id_pesanan` int(10) DEFAULT NULL,
  `id_pelanggan` int(5) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `jumlah_bayar` decimal(10,0) DEFAULT NULL,
  `metode_pembayaran` varchar(2) DEFAULT NULL,
  `dari_bank` varchar(2) DEFAULT NULL,
  `nama_pemilik_rekening` varchar(30) DEFAULT NULL,
  `gambar_bukti` varchar(500) DEFAULT NULL,
  `dikonfirmasi` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_pesanan`, `id_pelanggan`, `tgl_bayar`, `jumlah_bayar`, `metode_pembayaran`, `dari_bank`, `nama_pemilik_rekening`, `gambar_bukti`, `dikonfirmasi`) VALUES
(1, 12, 1, '2020-01-06', '100000', 'tr', 'br', 'asu', 'asu.JPG', '1'),
(2, 11, 2, '2020-01-15', '20000000', 'br', 'bc', 'tumikem', '1.jpg', 'n'),
(3, 13, NULL, '2020-01-16', '465', 'tr', 'as', 'anu', NULL, NULL),
(5, 123, NULL, '2020-01-24', '9000', 'tr', 'br', 'anu', NULL, NULL),
(6, 0, NULL, '2020-01-14', '10000', 'tr', 'an', 'isss', NULL, NULL),
(7, 1100, NULL, '2020-01-14', '1', 'tr', 'iy', 'aji', NULL, NULL),
(8, 14, NULL, '2020-01-14', '45000', 'tr', 'BR', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(5) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `no_hp_pelanggan` varchar(12) DEFAULT NULL,
  `email_pelanggan` varchar(30) DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_hp_pelanggan`, `email_pelanggan`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `kode_pos`) VALUES
(1, 'pantek', '082913890', 'asu@gmail.com', 'di rumah aja ', 'jatim', 'serah', 'santuy', 63257),
(2, 'ade', '098190389', 'ioasjdsaj@JSABDJ', 'doly', 'asu', 'pantek', 'cok', 612723),
(3, '213', '1123213', '123', '', '123', 'qweqwe', '123', 123),
(4, 'ega', '080123446677', 'muchnesha@gmail.com', 'jl kehidupan', 'Jawa Timur', 'Jember', '66147', 66147);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `id_barang` int(10) DEFAULT NULL,
  `id_pelanggan` int(5) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(12) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_barang` int(10) DEFAULT NULL,
  `id_pelanggan` int(5) DEFAULT NULL,
  `harga_total` decimal(10,0) DEFAULT NULL,
  `catatan_pengiriman` text DEFAULT NULL,
  `status_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
