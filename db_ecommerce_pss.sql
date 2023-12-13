-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 04.39
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce_pss`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `actor`
--

CREATE TABLE `actor` (
  `actor_id` decimal(10,0) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `melihat`
--

CREATE TABLE `melihat` (
  `tb_penjual_id_penjual` int(11) NOT NULL,
  `tb_produk_id_produk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mencari`
--

CREATE TABLE `mencari` (
  `tb_pembeli_id_pembeli` int(10) NOT NULL,
  `tb_produk_id_produk1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengelola`
--

CREATE TABLE `mengelola` (
  `tb_produk_id_produk` int(10) NOT NULL,
  `tb_admin_id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengisi`
--

CREATE TABLE `mengisi` (
  `tb_produk_id_produk` int(10) NOT NULL,
  `tb_keranjang_id_keranjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menyimpan`
--

CREATE TABLE `menyimpan` (
  `tb_transaksi_id_transaksi` int(10) NOT NULL,
  `tb_produk_id_produk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admi@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alamat`
--

CREATE TABLE `tb_alamat` (
  `id_alamat` int(10) NOT NULL,
  `negara` varchar(60) NOT NULL,
  `provinsi` varchar(60) NOT NULL,
  `kabupaten` varchar(60) NOT NULL,
  `kecamatan` varchar(60) NOT NULL,
  `jalan` varchar(150) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `id_pembeli` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_alamat`
--

INSERT INTO `tb_alamat` (`id_alamat`, `negara`, `provinsi`, `kabupaten`, `kecamatan`, `jalan`, `kode_pos`, `id_pembeli`) VALUES
(1, 'indonesia', 'bali', 'badung', 'kuta selatan', 'jl pepaya', '08361', 1),
(2, 'indonesia', 'jakarta', 'jakarta selatan', 'kelapa gading', 'jl mangga', '04985', 2),
(3, 'indonesia', 'bali', 'denpasar', 'denpasar selatan', 'jl salak', '096954', 3),
(4, 'Indonesia', '1', '17', '17', 'Jl Kamboja', '80362', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(10) NOT NULL,
  `id_pembeli` int(10) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_keranjang`, `id_pembeli`, `id_penjual`, `id_produk`, `jumlah`) VALUES
(1, 1, 1, 1, 2),
(2, 1, 2, 2, 1),
(3, 3, 3, 3, 1),
(16, 1, 1, 1, NULL),
(34, 15, 2, 2, NULL),
(68, 12, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembatalan`
--

CREATE TABLE `tb_pembatalan` (
  `id_pembatalan` int(11) NOT NULL,
  `tgl_pembatalan` date NOT NULL,
  `alasan` text DEFAULT NULL,
  `id_pembeli` int(10) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_pembatalan`
--

INSERT INTO `tb_pembatalan` (`id_pembatalan`, `tgl_pembatalan`, `alasan`, `id_pembeli`, `id_penjual`, `id_produk`) VALUES
(1, '2023-10-08', 'saya ingin batalkan pesanan', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `tgl_pembayaran` datetime NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL,
  `id_tagihan` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `tgl_pembayaran`, `bukti_pembayaran`, `id_tagihan`, `status`) VALUES
(6, '2023-12-07 09:56:00', '6.png', 37, 'sedang diproses'),
(7, '2023-12-11 15:58:00', 'png te.png', 45, 'Pembayaran Sukses'),
(8, '2023-12-13 11:32:00', 'te.png', 46, 'sedang diproses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pembeli`, `name`, `email`, `password`, `gender`, `tgl_lahir`, `no_hp`) VALUES
(1, 'haidar', 'haidar@gmail.com', 'haidar', 'male', '2014-10-01', '0844444444'),
(2, 'duta', 'duta@gmail.com', 'duta', 'male', '2014-10-01', '0844444445'),
(3, 'wijaya', 'wijaya@gmail.com', 'wijaya', 'female', '2014-10-01', '0844444446'),
(12, 'aaa', 'aaa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'male', '0000-00-00', '894915'),
(15, 'bbb', 'bbb@gmail.com', '08f8e0260c64418510cefb2b06eee5cd', 'male', '0000-00-00', '45641651'),
(16, 'ccc', 'ccc@gmail.com', '9df62e693988eb4e1e1444ece0578579', 'male', '0000-00-00', '5698413489'),
(29, 'testdbbs', 'testdbbs@gmail.com', 'testdbbs', 'male', '0000-00-00', '555555567'),
(31, 'testdb', 'testdb', 'testdb', 'male', '0000-00-00', '5555555'),
(32, 'testdbk', 'testdbk', 'testdbk', 'male', '0000-00-00', '55555559'),
(33, 'lukisan pantai', 'testdbo', 'testdbo', 'male', '0000-00-00', '55555553'),
(36, 'Janu', 'janu@gmail.com', '2d62b0cd5dd2cd79a437dc7475139e4c', 'male', '0000-00-00', '08123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nomor_resi` varchar(45) NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `id_transaksi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_pengiriman`
--

INSERT INTO `tb_pengiriman` (`id_pengiriman`, `nomor_resi`, `tgl_pengiriman`, `id_transaksi`) VALUES
(1, '123456', '2023-10-09', 1),
(2, '123456', '2023-10-18', 2),
(3, '123456', '2023-10-19', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjual`
--

CREATE TABLE `tb_penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `nama_bank` varchar(40) NOT NULL,
  `no_rekening` varchar(45) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_penjual`
--

INSERT INTO `tb_penjual` (`id_penjual`, `nama_toko`, `email`, `password`, `no_hp`, `nama_bank`, `no_rekening`, `alamat`) VALUES
(1, 'toko lukisan', 'tokolukisan@gmail.com', 'tokolukisan', '0891111111111', 'bca', '123456789', 'jl. bulu kucing'),
(2, 'toko patung', 'patung@gmail.com', 'toko patung', '089111111112', 'bca', '123456782', 'jl. semangka'),
(3, 'toko baju', 'baju@gmail.com', 'toko baju', '089111111113', 'bca', '123456781', 'jl. magenta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(200) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `foto_produk`, `harga`, `stok`, `id_penjual`) VALUES
(1, 'lukisan pantai', 'ini adalah lukisan pantai', 'lukisan_pantai.jpg', 500000, 5, 1),
(2, 'patung gwk', 'ini patung garuda wisno kencana', 'patung_gwk.png', 1000000, 2, 2),
(3, 'baju barong', 'ini baju barong', 'baju_barong.jpg', 50000, 10, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `tgl_tagihan` datetime NOT NULL,
  `jumlah_tagihan` int(11) NOT NULL,
  `id_pembeli` int(10) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_tagihan`, `tgl_tagihan`, `jumlah_tagihan`, `id_pembeli`, `id_penjual`, `id_produk`) VALUES
(37, '2023-12-07 00:00:00', 2100000, 12, 2, 2),
(44, '2023-12-11 00:00:00', 2036000, 12, 2, 2),
(45, '2023-12-11 00:00:00', 2036000, 12, 2, 2),
(46, '2023-12-12 00:00:00', 2044000, 12, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `status` enum('pending','selesai') NOT NULL,
  `id_pembeli` int(10) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `tgl_transaksi`, `status`, `id_pembeli`, `id_penjual`, `id_produk`) VALUES
(1, '2023-10-25 04:05:11', 'pending', 1, 1, 1),
(2, '2023-10-17 04:05:11', 'selesai', 2, 2, 2),
(3, '2023-10-18 04:05:11', 'pending', 3, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ulasan`
--

CREATE TABLE `tb_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `tgl_ulasan` date NOT NULL,
  `id_produk` int(10) NOT NULL,
  `id_pembeli` int(10) NOT NULL,
  `id_penjual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_ulasan`
--

INSERT INTO `tb_ulasan` (`id_ulasan`, `ulasan`, `tgl_ulasan`, `id_produk`, `id_pembeli`, `id_penjual`) VALUES
(1, 'barang real pict', '2023-10-16', 1, 1, 1),
(2, 'barang keren', '2023-10-19', 2, 2, 2),
(3, 'barang b aja', '2023-10-20', 3, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`actor_id`),
  ADD KEY `idx_actor_last_name` (`last_name`);

--
-- Indeks untuk tabel `melihat`
--
ALTER TABLE `melihat`
  ADD PRIMARY KEY (`tb_penjual_id_penjual`,`tb_produk_id_produk`),
  ADD KEY `fk_tb_penjual_has_tb_produk_tb_produk1_idx` (`tb_produk_id_produk`),
  ADD KEY `fk_tb_penjual_has_tb_produk_tb_penjual1_idx` (`tb_penjual_id_penjual`);

--
-- Indeks untuk tabel `mencari`
--
ALTER TABLE `mencari`
  ADD PRIMARY KEY (`tb_pembeli_id_pembeli`),
  ADD KEY `fk_tb_produk_has_tb_pembeli_tb_pembeli1_idx` (`tb_pembeli_id_pembeli`),
  ADD KEY `fk_mencari_tb_produk1_idx` (`tb_produk_id_produk1`);

--
-- Indeks untuk tabel `mengelola`
--
ALTER TABLE `mengelola`
  ADD PRIMARY KEY (`tb_produk_id_produk`,`tb_admin_id_admin`),
  ADD KEY `fk_tb_produk_has_tb_admin_tb_admin1_idx` (`tb_admin_id_admin`),
  ADD KEY `fk_tb_produk_has_tb_admin_tb_produk1_idx` (`tb_produk_id_produk`);

--
-- Indeks untuk tabel `mengisi`
--
ALTER TABLE `mengisi`
  ADD PRIMARY KEY (`tb_produk_id_produk`,`tb_keranjang_id_keranjang`),
  ADD KEY `fk_tb_produk_has_tb_keranjang_tb_keranjang1_idx` (`tb_keranjang_id_keranjang`),
  ADD KEY `fk_tb_produk_has_tb_keranjang_tb_produk1_idx` (`tb_produk_id_produk`);

--
-- Indeks untuk tabel `menyimpan`
--
ALTER TABLE `menyimpan`
  ADD PRIMARY KEY (`tb_transaksi_id_transaksi`,`tb_produk_id_produk`),
  ADD KEY `fk_tb_transaksi_has_tb_produk_tb_produk1_idx` (`tb_produk_id_produk`),
  ADD KEY `fk_tb_transaksi_has_tb_produk_tb_transaksi1_idx` (`tb_transaksi_id_transaksi`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indeks untuk tabel `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD PRIMARY KEY (`id_alamat`),
  ADD KEY `fk_tb_alamat_tb_pembeli1_idx` (`id_pembeli`);

--
-- Indeks untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `fk_tb_keranjang_tb_pembeli1_idx` (`id_pembeli`),
  ADD KEY `fk_tb_keranjang_tb_penjual1_idx` (`id_penjual`),
  ADD KEY `fk_tb_keranjang_tb_produk1_idx` (`id_produk`);

--
-- Indeks untuk tabel `tb_pembatalan`
--
ALTER TABLE `tb_pembatalan`
  ADD PRIMARY KEY (`id_pembatalan`),
  ADD KEY `fk_tb_pembatalan_tb_pembeli1_idx` (`id_pembeli`),
  ADD KEY `fk_tb_pembatalan_tb_penjual1_idx` (`id_penjual`),
  ADD KEY `fk_tb_pembatalan_tb_produk1_idx` (`id_produk`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`,`id_tagihan`),
  ADD KEY `fk_tb_pembayaran_tb_tagihan1_idx` (`id_tagihan`);

--
-- Indeks untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`),
  ADD UNIQUE KEY `no_telepon_UNIQUE` (`no_hp`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indeks untuk tabel `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `fk_tb_pengiriman_tb_transaksi1_idx` (`id_transaksi`);

--
-- Indeks untuk tabel `tb_penjual`
--
ALTER TABLE `tb_penjual`
  ADD PRIMARY KEY (`id_penjual`),
  ADD UNIQUE KEY `nama_toko_UNIQUE` (`nama_toko`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `no_hp_UNIQUE` (`no_hp`),
  ADD UNIQUE KEY `no_rekening_UNIQUE` (`no_rekening`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_tb_produk_tb_penjual1_idx` (`id_penjual`);

--
-- Indeks untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `fk_tb_tagihan_tb_pembeli1_idx` (`id_pembeli`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_tb_transaksi_tb_pembeli1_idx` (`id_pembeli`),
  ADD KEY `fk_tb_transaksi_tb_penjual1_idx` (`id_penjual`),
  ADD KEY `fk_tb_transaksi_tb_produk1_idx` (`id_produk`);

--
-- Indeks untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `fk_tb_ulasan_tb_produk1_idx` (`id_produk`),
  ADD KEY `fk_tb_ulasan_tb_pembeli1_idx` (`id_pembeli`),
  ADD KEY `fk_tb_ulasan_tb_penjual1_idx` (`id_penjual`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_alamat`
--
ALTER TABLE `tb_alamat`
  MODIFY `id_alamat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `tb_pembatalan`
--
ALTER TABLE `tb_pembatalan`
  MODIFY `id_pembatalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `id_pembeli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `melihat`
--
ALTER TABLE `melihat`
  ADD CONSTRAINT `fk_tb_penjual_has_tb_produk_tb_penjual1` FOREIGN KEY (`tb_penjual_id_penjual`) REFERENCES `tb_penjual` (`id_penjual`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_penjual_has_tb_produk_tb_produk1` FOREIGN KEY (`tb_produk_id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mencari`
--
ALTER TABLE `mencari`
  ADD CONSTRAINT `fk_mencari_tb_produk1` FOREIGN KEY (`tb_produk_id_produk1`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_produk_has_tb_pembeli_tb_pembeli1` FOREIGN KEY (`tb_pembeli_id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mengelola`
--
ALTER TABLE `mengelola`
  ADD CONSTRAINT `fk_tb_produk_has_tb_admin_tb_admin1` FOREIGN KEY (`tb_admin_id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_produk_has_tb_admin_tb_produk1` FOREIGN KEY (`tb_produk_id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mengisi`
--
ALTER TABLE `mengisi`
  ADD CONSTRAINT `fk_tb_produk_has_tb_keranjang_tb_keranjang1` FOREIGN KEY (`tb_keranjang_id_keranjang`) REFERENCES `tb_keranjang` (`id_keranjang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_produk_has_tb_keranjang_tb_produk1` FOREIGN KEY (`tb_produk_id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `menyimpan`
--
ALTER TABLE `menyimpan`
  ADD CONSTRAINT `fk_tb_transaksi_has_tb_produk_tb_produk1` FOREIGN KEY (`tb_produk_id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_transaksi_has_tb_produk_tb_transaksi1` FOREIGN KEY (`tb_transaksi_id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD CONSTRAINT `fk_tb_alamat_tb_pembeli1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `fk_tb_keranjang_tb_pembeli1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_keranjang_tb_penjual1` FOREIGN KEY (`id_penjual`) REFERENCES `tb_penjual` (`id_penjual`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_keranjang_tb_produk1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_pembatalan`
--
ALTER TABLE `tb_pembatalan`
  ADD CONSTRAINT `fk_tb_pembatalan_tb_pembeli1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_pembatalan_tb_penjual1` FOREIGN KEY (`id_penjual`) REFERENCES `tb_penjual` (`id_penjual`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_pembatalan_tb_produk1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `fk_tb_pembayaran_tb_tagihan1` FOREIGN KEY (`id_tagihan`) REFERENCES `tb_tagihan` (`id_tagihan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD CONSTRAINT `fk_tb_pengiriman_tb_transaksi1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `fk_tb_produk_tb_penjual1` FOREIGN KEY (`id_penjual`) REFERENCES `tb_penjual` (`id_penjual`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD CONSTRAINT `fk_tb_tagihan_tb_pembeli1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_tagihan_tb_penjual1` FOREIGN KEY (`id_penjual`) REFERENCES `tb_penjual` (`id_penjual`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_tagihan_tb_produk1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `fk_tb_transaksi_tb_pembeli1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_transaksi_tb_penjual1` FOREIGN KEY (`id_penjual`) REFERENCES `tb_penjual` (`id_penjual`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_transaksi_tb_produk1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD CONSTRAINT `fk_tb_ulasan_tb_pembeli1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_ulasan_tb_penjual1` FOREIGN KEY (`id_penjual`) REFERENCES `tb_penjual` (`id_penjual`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_ulasan_tb_produk1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
