-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2014 pada 07.05
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `pinguin`
--
CREATE DATABASE IF NOT EXISTS `pinguin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pinguin`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_comments`
--

CREATE TABLE IF NOT EXISTS `blog_comments` (
  `comment_ID` bigint(20) NOT NULL,
  `comment_post_ID` bigint(20) NOT NULL,
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL,
  `comment_author_url` varchar(255) NOT NULL,
  `comment_author_IP` varchar(255) NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment_content` text NOT NULL,
  `comment_approved` int(11) NOT NULL,
  KEY `comment_post_ID` (`comment_post_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) NOT NULL,
  `post_date` datetime NOT NULL,
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_status` varchar(255) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `post_modified` datetime NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `comment_count` bigint(20) NOT NULL,
  `post_view` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(50) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_registered` datetime NOT NULL,
  `user_last_login` datetime DEFAULT NULL,
  `user_level` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `user_level` (`user_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID`, `user_login`, `user_pass`, `user_email`, `user_registered`, `user_last_login`, `user_level`) VALUES
(1, 'squhart', '831fff05cae77b6ca89a4d9807da881265570e8a', 'squhart@gmail.com', '2014-08-13 21:57:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(50) NOT NULL,
  `create_user` int(11) NOT NULL,
  `blog_post` int(11) NOT NULL,
  `thread_post` int(11) NOT NULL,
  `edit_blog` int(11) NOT NULL,
  `delete_blog` int(11) NOT NULL,
  `delete_thread` int(11) NOT NULL,
  `ban_user` int(11) NOT NULL,
  `delete_user` int(11) NOT NULL,
  `create_user_level` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`ID`, `level_name`, `create_user`, `blog_post`, `thread_post`, `edit_blog`, `delete_blog`, `delete_thread`, `ban_user`, `delete_user`, `create_user_level`) VALUES
(1, 'superadmin', 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_ibfk_1` FOREIGN KEY (`comment_post_ID`) REFERENCES `blog_posts` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`post_author`) REFERENCES `users` (`ID`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_level`) REFERENCES `user_level` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
