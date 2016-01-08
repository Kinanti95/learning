-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2016 pada 08.51
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id_grup` int(4) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(4) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_assig` int(4) NOT NULL,
  PRIMARY KEY (`id_grup`),
  UNIQUE KEY `id_kelas` (`id_kelas`),
  UNIQUE KEY `id_user` (`id_user`,`id_assig`),
  KEY `id_assig` (`id_assig`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_admin` int(20) NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komen` int(4) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `id_assig` int(4) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id_komen`),
  UNIQUE KEY `id_user` (`id_user`),
  UNIQUE KEY `id_assig` (`id_assig`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(5) NOT NULL AUTO_INCREMENT,
  `id_admin` int(20) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `judul` text NOT NULL,
  `konten` text NOT NULL,
  PRIMARY KEY (`id_materi`),
  UNIQUE KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(4) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `id_assig` int(4) NOT NULL,
  `nilai` int(4) NOT NULL,
  PRIMARY KEY (`id_nilai`),
  UNIQUE KEY `id_assig` (`id_assig`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nis` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(3) NOT NULL COMMENT '0=siswa 1=guru',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `id_assig` int(4) NOT NULL AUTO_INCREMENT,
  `assigment` varchar(100) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_assig`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `turn_in`
--

CREATE TABLE IF NOT EXISTS `turn_in` (
  `id_turnin` int(10) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(10) NOT NULL,
  `file` varchar(20) NOT NULL,
  PRIMARY KEY (`id_turnin`),
  UNIQUE KEY `id_siswa` (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `group_ibfk_3` FOREIGN KEY (`id_assig`) REFERENCES `tugas` (`id_assig`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `siswa` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `siswa` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_assig`) REFERENCES `tugas` (`id_assig`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `siswa` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_assig`) REFERENCES `tugas` (`id_assig`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `siswa` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `turn_in` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `turn_in`
--
ALTER TABLE `turn_in`
  ADD CONSTRAINT `turn_in_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
