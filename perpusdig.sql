-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 08:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusdig`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `foto`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `deskripsi`) VALUES
(5, 1, 'uploads/kue.jpg', 'Resep Kue Tradisional', 'Dila', 'Gramedia', 2023, ''),
(22, 1, 'uploads/hujan.jpg', 'Hujan', 'Tere liye', 'Gramedia', 2013, 'ya'),
(23, 1, 'uploads/bumi.jpg', 'Bumi', 'Tere liye', 'Gramedia', 2017, 'yaa'),
(24, 6, 'uploads/Petualangan-Si-Kancil.jpg', 'Petualangan Si Kancil', 'Dila', 'Gramedia', 2002, 'apalah'),
(25, 1, 'uploads/the tree of life.jpg', 'the tree of life', 'anonym', 'anonym', 2023, '\"The Tree of Life\" adalah sebuah novel yang mengisahkan tentang perjalanan spiritual seorang tokoh utama yang menemukan sebuah pohon kehidupan legendaris. Dalam pencariannya, ia dihadapkan pada berbagai ujian dan petualangan yang membawanya melintasi duni'),
(27, 19, 'uploads/Filsafat-Pendidikan.jpg', 'Filsafat Pendidikan', 'Prof. Dr. A. Y. Soegeng Ysh., M. Pd.', 'Magnum Pustaka Utama', 2018, 'Suatu Pengembangan yang dapat dimaknai bukan hanya membicarakan materi tentang filsafat pendidikan, melainkan dalam beberapa hal dikembangkan sampai pada penerapannya di dalam praksis pendidikan.\r\nPada bab-bab awal memang berbicara tentang konsep-konsep d'),
(28, 19, 'uploads/Cover_DEVAR_Antariksa-1.jpg', 'Ensiklopedia 4D Junior: Antariksa Menakjubkan (Incredible Space)', 'Devar Entertainment', 'Gramedia Pustaka Utama', 2022, 'Tahukah kamu ada berapa planet yang ada di galaksi kita? Apa kamu tahu apa itu galaksi? Jika belum, ayo jelajahi antariksa yang sangat luas ini dan temukan rahasia menakjubkan dari planet, satelit, bintang, dan benda-benda antariksa lain. Dengan teknologi'),
(30, 1, 'uploads/9786024246945_Laut-Bercerita.png', 'Laut Bercerita', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', 2017, 'Buku ini terdiri atas dua bagian. Bagian pertama mengambil sudut pandang seorang mahasiswa aktivis bernama Laut, menceritakan bagaimana Laut dan kawan-kawannya menyusun rencana, berpindah-pindah dalam pelarian, hingga tertangkap oleh pasukan rahasia. Seda'),
(31, 1, 'uploads/bcekrdxnwcemqhgkreithj.jpg', 'Selena', 'Tere Liye', 'SABAKGRIP', 2023, '\"Selena\" dan \"Nebula\" adalah buku ke-8 dan ke-9 yang menceritakan siapa orangtua Raib dalam serial petualangan dunia paralel. Dua buku ini sebaiknya dibaca berurutan. Kedua buku ini juga bercerita tentang Akademi Bayangan Tingkat Tinggi, sekolah terbaik d'),
(32, 1, 'uploads/dnvtkacwfcyq3ds5g9lpqq.jpg', 'Komet', 'Tere liye', ' Sabak Grip Nusantara', 2023, 'Setelah \"musuh besar\" kami lolos, dunia paralel dalam situasi genting. Hanya soal waktu, kapan pun pertempuran besar akan terjadi. Bagaimana jika ribuan petarung yang bisa menghilang, mengeluarkan petir, termasuk teknologi maju lainnya muncul di permukaan'),
(33, 1, 'uploads/9786020623399_Komet_Minor_c.jpg', 'Komet Minor', 'Tere liye', 'Gramedia Pustaka Utama', 2019, 'Komet Minor sebagai novel keenam dari serial Bumi terbit pada tahun 2019, tak lama setelah Komet–novel sebelum ini–diterbitkan. Seperti yang sudah dijelaskan bahwa Komet Minor merupakan lanjutan dari novel sebelumnya, yakni Komet, tetapi dalam novel ini p'),
(34, 1, 'uploads/9786020648200_THE_DRAGON_REPUBLIC_DEPAN.jpg', 'Republik Naga (The Dragon Republic)', 'R.F. Kuang', 'Gramedia Pustaka Utama', 2020, 'Kisah Rin berlanjut dalam sekuel “Perang Opium” ini—fantasi epik yang menggabungkan sejarah Cina abad ke-20 dengan dunia dahsyat tempat para dewa dan monster. Tiga kali negara Nikan bertempur dalam Perang Opium yang bersimbah darah. Rin—sang syaman dan pe'),
(35, 1, 'uploads/9786020634951_the_poppy_war_cov (1).jpg', 'Perang Opium (The Poppy War)', 'R.F. Kuang', 'Gramedia Pustaka Utama', 2019, 'Kisah ini bercerita tokoh perempuan bernama Fang Runin, yang merupakan anak korban perang yatim piatu. Ia bekerja di toko yang sebenarnya melakukan jual beli opium illegal. Rin bertekad untuk menempuh ujian Keju dengan harapan dapat masuk ke dalam sekolah'),
(36, 18, 'uploads/9789792951035_Belajar-Sendi.jpg', 'Belajar Sendiri Pasti Bisa Javascript', 'Abdul Kadir', 'Andi Publisher', 2015, 'Kamu kepingin belajar Javascript tapi takut susah? Nggak tau harus mulai belajar Javascript dari mana? Jangan galau lagi fren, Javascript itu ternyata mudah untuk dipelajari dengan menggunakan buku Belajar Sendiri Pasti Bisa Javascript ini. Kamu bakal mem');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Novel'),
(4, 'komik'),
(6, 'ensiklopedia'),
(15, 'Romansa'),
(16, 'Sejarah'),
(17, 'Politik'),
(18, 'Pendidikan'),
(19, 'Pengetahuan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku_relasi`
--

CREATE TABLE `kategori_buku_relasi` (
  `id_katbuk` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koleksi_pribadi`
--

CREATE TABLE `koleksi_pribadi` (
  `id_koleksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_ulasan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `koleksi_pribadi`
--

INSERT INTO `koleksi_pribadi` (`id_koleksi`, `id_user`, `id_buku`, `id_kategori`, `id_ulasan`) VALUES
(7, 10, 5, 3, 3),
(8, 1, 23, 2, 2),
(10, 2, 22, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pinjam` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_buku`, `tgl_pinjam`, `tgl_pengembalian`, `status_pinjam`) VALUES
(6, 3, 22, '2024-03-06', '2024-03-07', 'dipinjam'),
(7, 11, 35, '2024-02-29', '2024-02-29', 'dikembalikan'),
(8, 3, 36, '2024-03-06', '2024-03-13', 'dikembalikan'),
(9, 11, 32, '2024-02-29', '2024-02-29', 'dikembalikan'),
(10, 16, 32, '2024-03-06', '2024-03-13', 'dipinjam'),
(11, 3, 30, '2024-03-17', '2024-03-21', 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan_buku`
--

CREATE TABLE `ulasan_buku` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan_buku`
--

INSERT INTO `ulasan_buku` (`id_ulasan`, `id_user`, `id_buku`, `ulasan`, `rating`) VALUES
(12, 3, 5, 'resepnya gampang', 4),
(29, 3, 25, '', 4),
(30, 3, 23, 'bagus', 5),
(31, 3, 22, 'dasdegvwef', 4),
(32, 11, 33, 'Novel ini menggambarkan karakter-karakter yang kuat dan memikat, plot yang menarik, serta penulisan yang indah dan mengalir. Dengan penggunaan bahasa yang kaya dan deskripsi yang detail, pembaca dihantarkan ke dalam dunia yang hidup dan berwarna. Kisah yang menggugah emosi ini menarik pembaca dari halaman pertama hingga akhir, meninggalkan kesan mendalam dan refleksi tentang kehidupan dan manusia.', 4),
(33, 16, 35, 'Novel ini menggambarkan karakter-karakter yang kuat dan memikat, plot yang menarik, serta penulisan yang indah dan mengalir. Dengan penggunaan bahasa yang kaya dan deskripsi yang detail, pembaca dihantarkan ke dalam dunia yang hidup dan berwarna. Kisah yang menggugah emosi ini menarik pembaca dari halaman pertama hingga akhir, meninggalkan kesan mendalam dan refleksi tentang kehidupan dan manusia.', 4),
(34, 16, 34, 'Novel ini menggambarkan karakter-karakter yang kuat dan memikat, plot yang menarik, serta penulisan yang indah dan mengalir. Dengan penggunaan bahasa yang kaya dan deskripsi yang detail, pembaca dihantarkan ke dalam dunia yang hidup dan berwarna. Kisah yang menggugah emosi ini menarik pembaca dari halaman pertama hingga akhir, meninggalkan kesan mendalam dan refleksi tentang kehidupan dan manusia.', 3),
(35, 11, 30, 'Novel ini menggambarkan karakter-karakter yang kuat dan memikat, plot yang menarik, serta penulisan yang indah dan mengalir. Dengan penggunaan bahasa yang kaya dan deskripsi yang detail, pembaca dihantarkan ke dalam dunia yang hidup dan berwarna. Kisah yang menggugah emosi ini menarik pembaca dari halaman pertama hingga akhir, meninggalkan kesan mendalam dan refleksi tentang kehidupan dan manusia.', 4),
(36, 11, 36, 'Novel ini menggambarkan karakter-karakter yang kuat dan memikat, plot yang menarik, serta penulisan yang indah dan mengalir. Dengan penggunaan bahasa yang kaya dan deskripsi yang detail, pembaca dihantarkan ke dalam dunia yang hidup dan berwarna. Kisah yang menggugah emosi ini menarik pembaca dari halaman pertama hingga akhir, meninggalkan kesan mendalam dan refleksi tentang kehidupan dan manusia.', 3),
(37, 3, 31, 'Novel ini menggambarkan karakter-karakter yang kuat dan memikat, plot yang menarik, serta penulisan yang indah dan mengalir. Dengan penggunaan bahasa yang kaya dan deskripsi yang detail, pembaca dihantarkan ke dalam dunia yang hidup dan berwarna. Kisah yang menggugah emosi ini menarik pembaca dari halaman pertama hingga akhir, meninggalkan kesan mendalam dan refleksi tentang kehidupan dan manusia.', 5),
(38, 10, 23, 'Novel ini menggambarkan karakter-karakter yang kuat dan memikat, plot yang menarik, serta penulisan yang indah dan mengalir. Dengan penggunaan bahasa yang kaya dan deskripsi yang detail, pembaca dihantarkan ke dalam dunia yang hidup dan berwarna. Kisah yang menggugah emosi ini menarik pembaca dari halaman pertama hingga akhir, meninggalkan kesan mendalam dan refleksi tentang kehidupan dan manusia.', 3),
(41, 12, 28, 'Novel ini menggambarkan karakter-karakter yang kuat dan memikat, plot yang menarik, serta penulisan yang indah dan mengalir. Dengan penggunaan bahasa yang kaya dan deskripsi yang detail, pembaca dihantarkan ke dalam dunia yang hidup dan berwarna. Kisah yang menggugah emosi ini menarik pembaca dari halaman pertama hingga akhir, meninggalkan kesan mendalam dan refleksi tentang kehidupan dan manusia.', 5),
(42, 3, 32, 'Novel ini menggambarkan karakter-karakter yang kuat dan memikat, plot yang menarik, serta penulisan yang indah dan mengalir. Dengan penggunaan bahasa yang kaya dan deskripsi yang detail, pembaca dihantarkan ke dalam dunia yang hidup dan berwarna. Kisah yang menggugah emosi ini menarik pembaca dari halaman pertama hingga akhir, meninggalkan kesan mendalam dan refleksi tentang kehidupan dan manusia.', 5),
(43, 12, 27, 'Buku ini merupakan panduan yang mendalam dan memikat tentang filsafat pendidikan, membahas berbagai konsep dan teori utama dalam disiplin ini dengan kejelasan dan kecerdasan yang luar biasa. Penulis berhasil menguraikan pemikiran filosofis yang kompleks menjadi bahasa yang dapat diakses, menjadikan buku ini sesuai untuk pembaca dari berbagai latar belakang pendidikan. Dengan analisis yang mendalam dan argumen yang kuat, buku ini menginspirasi pembaca untuk merenungkan dan mempertanyakan makna dan tujuan sejati dari pendidikan.', 4),
(44, 3, 27, 'Buku ini merupakan panduan yang mendalam dan memikat tentang filsafat pendidikan, membahas berbagai konsep dan teori utama dalam disiplin ini dengan kejelasan dan kecerdasan yang luar biasa. Penulis berhasil menguraikan pemikiran filosofis yang kompleks menjadi bahasa yang dapat diakses, menjadikan buku ini sesuai untuk pembaca dari berbagai latar belakang pendidikan. Dengan analisis yang mendalam dan argumen yang kuat, buku ini menginspirasi pembaca untuk merenungkan dan mempertanyakan makna dan tujuan sejati dari pendidikan.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `role` enum('admin','petugas','peminjam') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `telepon`) VALUES
(1, 'admin', 'admin', '123', 'email@gmail.com', 'alifia nadia ', 'apalah', 0),
(2, 'petugas', 'petugas', '123', 'apalah', 'alvaro', 'apalah', 62),
(3, 'peminjam', 'almira', '123', 'apalah@gmail.com', 'almira ridha b', 'lada 5', 2147483647),
(10, 'admin', 'varo', '', 'varo@gmail.com', 'Alvaro J.I', 'berau', 2147483647),
(11, 'peminjam', 'alif', '123', 'alif@gmail.com', 'Alifia Nadia', 'madurejo', 0),
(12, 'admin', 'nadia', '123', 'nadia@gmail.com', 'nadia alifia', 'madurejo', 962873264),
(16, 'peminjam', 'nana', '123', 'nabila@gmail.com', 'Nabila Noor Faijah', 'BAQA', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_buku_relasi`
--
ALTER TABLE `kategori_buku_relasi`
  ADD PRIMARY KEY (`id_katbuk`),
  ADD KEY `id_buku` (`id_buku`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  ADD PRIMARY KEY (`id_koleksi`),
  ADD KEY `id_user` (`id_user`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `nama_kategori` (`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_ulasan` (`id_ulasan`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `ulasan_buku`
--
ALTER TABLE `ulasan_buku`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_user` (`id_user`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategori_buku_relasi`
--
ALTER TABLE `kategori_buku_relasi`
  MODIFY `id_katbuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  MODIFY `id_koleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ulasan_buku`
--
ALTER TABLE `ulasan_buku`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori_buku_relasi`
--
ALTER TABLE `kategori_buku_relasi`
  ADD CONSTRAINT `kategori_buku_relasi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_buku_relasi_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_buku` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  ADD CONSTRAINT `koleksi_pribadi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `koleksi_pribadi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ulasan_buku`
--
ALTER TABLE `ulasan_buku`
  ADD CONSTRAINT `ulasan_buku_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ulasan_buku_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
