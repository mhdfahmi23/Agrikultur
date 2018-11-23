-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 03:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_a` int(11) NOT NULL,
  `judul_a` varchar(100) NOT NULL,
  `deskripsi_a` text NOT NULL,
  `date_a` date NOT NULL,
  `foto_a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'kijul', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `id_ebook` int(11) NOT NULL,
  `judul_e` varchar(100) NOT NULL,
  `file_e` varchar(200) NOT NULL,
  `foto_e` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id_ebook`, `judul_e`, `file_e`, `foto_e`) VALUES
(2, 'Wik memenangkan', 'krs13116130_4.pdf', 'Al Faatihah.docx');

-- --------------------------------------------------------

--
-- Table structure for table `inovator`
--

CREATE TABLE `inovator` (
  `id_inovator` int(11) NOT NULL,
  `judul_inovator` varchar(100) NOT NULL,
  `foto_inovator` varchar(100) NOT NULL,
  `date_i` date NOT NULL,
  `isi_i` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inovator`
--

INSERT INTO `inovator` (`id_inovator`, `judul_inovator`, `foto_inovator`, `date_i`, `isi_i`) VALUES
(4, 'a', 'BAHAN.png', '2018-11-10', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsul` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email_k` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsul`, `nama`, `email_k`, `perihal`, `pertanyaan`) VALUES
(3, 'Rizki', 'rizki.juliansyah.a.m@gmail.com', 'tips', 'sssssssssssssssssssssss'),
(4, 'Lusi', 'L@gmail.com', 'keluhan', 'Tanaman cabe saya terkena bakteri\r\n'),
(5, 'Rizki', 'rizki.juliansyah.a.m@gmail.com', 'tips', 'Tanaman harus diberikan pupuk'),
(6, 'Rizki', 'rizki.juliansyah.a.m@gmail.com', 'tips', 'Tanaman harus diberikan pupuk');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_wawasan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wawasan`
--

CREATE TABLE `wawasan` (
  `id_w` int(11) NOT NULL,
  `judul_w` varchar(100) NOT NULL,
  `foto_w` varchar(100) NOT NULL,
  `date_w` date NOT NULL,
  `isi_w` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wawasan`
--

INSERT INTO `wawasan` (`id_w`, `judul_w`, `foto_w`, `date_w`, `isi_w`) VALUES
(1, '6 Cara Menanam Cabe Sendiri di Rumah dengan Mudah dan Pasti Berbuah', '3.png', '2018-11-14', ' Cabe merupakan bumbu yang selalu ada hampir di semua masakan Indonesia. Sebabnya orang Indonesia adalah pecinta pedas sehingga ketika harga cabe naik, pastilah timbul kehebohan di tengah masyarakat.\r\n\r\nSelain cabe rawit dan cabe merah besar, ada beberapa jenis cabe yakni cabe kathur, cabe keriting, cabe Jalapeno, cabe gendot, dan paprika.Namun cabe yang menjadi primadona di Indonesia adalah jenis cabe rawit dan cabe merah.\r\nHarga cabe sendiri sering mengalami fluktuasi atau naik turun. Hal ini dikarenakan cuaca ataupun industri hotel, restoran, kafe lebih dulu memesan cabe hingga cabe yang beredar di masyarakat menjadi langka. Ketika terjadi kelangkaan cabe, maka tentu saja harganya pun menjadi melesat jauh.\r\n\r\nJika Anda merupakan penggemar cabe, daripada harus membeli alangkah baiknya jika Anda hanya tinggal memetik saja di halaman Anda. Tidak usah khawatir, cara menanam cabe mudah kok. Anda juga tidak perlu membutuhkan lahan yang luas. Berikut adalah caranya seperti yang dirangkum Liputan6.com (6/6).'),
(2, '9 Cara Menanam Bawang Merah di Pot atau Polybag (#Teknik Mudah)', '2.png', '2018-11-15', 'Bawang merah adalah salah satu bumbu dapur yang sangat penting. Karena hampir semua masakan  dibuat menggunakan bawang merah sebagai bahan pelengkapnya. Tidak heran kebutuhan bawang merah semakin meningkat setiap harinya dan menjadikan harga bawang merah pun terkadang lebih mahal jika dibandingkan dengan bawang putih dan sayuran lain.\r\n\r\nads\r\n\r\nBawang merah atau dikenal juga dengan nama latin Allium cepa var ascalonicum (L) back merupakan tanaman yang berasal dari Iran, Pakistan dan daerah disekitarnya ini merupakan tanaman yang paling terkenal di dunia. Karena selain digunakan sebagai bumbu masak, bawang merah juga ternyata bisa di konsumsi dengan cara yang lain. Seperti misalnya dijadikan bawang goreng, acar sebagai pelengkap sebuah masakan, ataupun di makan mentah.\r\n\r\nNamun tidak hanya digunakan untuk konsumsi, bawang merah juga biasa digunakan untuk pengobatan tradisonal. Seperti misalnya dijadikan bahan untuk pengobatan â€˜kerikâ€™ jika anda masuk angin. Tidak hanya itu, bawang merah juga diyakini memiliki khasiat lain dalam menyembuhkan beberapa penyakit seperti:\r\n\r\nMengobati maag,\r\nmenurunkan kolesterol,\r\nmenurunkan kadar gula dalam darah,\r\nmengobati penyakit kencing manis atau Diabetes mellitus, dan penyakit lainnya.\r\nBeragamnya fungsi bawang merah diatas  adalah  karena bawang merah memiliki banyak kandungan yang berguna untuk kesehatan tubuh. Seperti misalnya kandungan kalium dan serat. Tidak hanya itu, bawang merah juga memiliki kandungan vitamin C , asam folat, kalsium dan juga zat besi yang sangat berguna untuk kesehatan dan kebugaran tubuh.\r\n\r\nDi Indonesia sendiri, ada beberapa daerah yang menjadikan bawang merah sebagai komoditas utama pertaniannya. Seperti misalnya kabupaten Brebes di Jawa Tengah dan juga kabupaten Cirebon yang ada di Jawa Barat.\r\n\r\n1. Memilih wadah tanam\r\n\r\nTernyata bawang merah merupakan tanaman yang cukup unik dan berbeda dengan kebanyakan tanaman lainnya. Karena menanam bawang merah, anda tidak memerlukan lahan yang luas. Anda bisa menanam di pekarangan rumah dengan menggunakan pot. Dan beberapa cara memilih pot untuk budidaya bawang merah adalah:\r\n\r\nPilih pot yang berlubang\r\nLubang pada pot merupakan hal yang sangat vital. Tidak perlu khawatir tanah yang anda letakan di dalam pot akan keluar dari lubang yang ada dibawahnya. Fungsi dari lubang ini adalah sebagai sirkulasi air sehingga setiap kali tanaman yang kita tanam disiram, tanah didalam pot itu tidak mengandung air yang berlebihan yang berpotensi merusak tanaman.\r\n\r\nJenis pot\r\nAda dua buah jenis pot. Ada yang diletakan di lantai dan ada pula yang digantung. Jika anda memilih pot gantung, yang harus diperhatikan adalah berat dari pot tersebut. Terlebih pada saat pot baru saja disiram. Air akan menambah berat dari pot. Dan jika pot tidak kuat, pot bisa jebol karena tidak kuat menahan berat.\r\n\r\nAda beberapa bahan yang biasa digunakan untuk membuat pot dengan fungsi yang berbeda-beda. Seperti misalnya pot yang terbuat dari plastik yang merupakan pot yang cukup murah dalam segi harga. Namun terkadang pot dari plastik bersifat menkilat dan cukup menyilaukan mata jika terkena sinar matahari langsung.\r\n\r\nSelain itu juga ada pot yang terbuat dari keramik dan beton yang bisa mempertahankan kelembapan tanah bagi tanaman yang memerlukan kelembapan tinggi. Lalu ada juga pot dengan bahan dasar kayu dan tanah liat yang cocok digunakan pada saat musim hujan karena dapat menjaga kelembapan tanah yang ada didalamnya. Namun kekurangan pot yang terbuat dari kayu dan tanah liat ini adalah mudah rusak.\r\n\r\nHal terakhir yang harus diperhatikan adalah ukuran. Ukuran pot harus menyesuaikan tanaman dan luas tempat yang ada. Jika anda ingin menanam bawang, pot yang digunakan tidak perlu terlalu besar. Bahkan jika memang sudah ada yang besar, anda bisa menanam 2-3 bibit dalam satu pot untuk mengefisiensikan tempat.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_a`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id_ebook`);

--
-- Indexes for table `inovator`
--
ALTER TABLE `inovator`
  ADD PRIMARY KEY (`id_inovator`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsul`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_wawasan`);

--
-- Indexes for table `wawasan`
--
ALTER TABLE `wawasan`
  ADD PRIMARY KEY (`id_w`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id_ebook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inovator`
--
ALTER TABLE `inovator`
  MODIFY `id_inovator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_wawasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wawasan`
--
ALTER TABLE `wawasan`
  MODIFY `id_w` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
