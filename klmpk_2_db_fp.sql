-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 03:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klmpk_2_db_fp`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `telepon_pelanggan` varchar(255) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pengambilan` int(11) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `estimasi_selesai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_karyawan`, `kode_transaksi`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`, `kuantitas`, `keterangan`, `status`, `pengambilan`, `tanggal_terima`, `estimasi_selesai`) VALUES
(1, 2, '2E6EE6998F', 'Acep Harto', '081234567364', 'Jl. Sesad No. 069', 3, 1, 0, 1, '2023-07-01', 4),
(2, 3, 'DE1FAE1245', 'Budi Setiawan', '081234567779', 'Jl. Contoh No. 456', 2, 0, 1, 0, '2023-07-02', 4),
(3, 4, '871AD10872', 'Citra Dewi', '081234567270', 'Jl. Contoh No. 789', 1, 1, 1, 0, '2023-07-03', 2),
(4, 5, '0BF3C6A68A', 'Dwi Prasetyo', '081234567785', 'Jl. Contoh No. 1011', 4, 0, 1, 1, '2023-07-04', 1),
(5, 6, '9074E59873', 'Eka Sari', '081234567940', 'Jl. Contoh No. 1213', 2, 1, 1, 0, '2023-07-05', 3),
(6, 7, '8D5D6074EE', 'Fajar Nugroho', '081234567677', 'Jl. Contoh No. 1415', 3, 0, 1, 1, '2023-07-06', 4),
(7, 8, '7CE5DB7DF9', 'Gita Putri', '081234567736', 'Jl. Contoh No. 1617', 2, 1, 1, 0, '2023-07-07', 2),
(8, 9, 'CA00343C43', 'Hendra Wijaya', '081234567566', 'Jl. Contoh No. 1819', 1, 0, 0, 1, '2023-07-08', 2),
(9, 10, '336E7FCBF0', 'Ibnu Kusuma', '081234567160', 'Jl. Contoh No. 2021', 4, 1, 0, 0, '2023-07-09', 3),
(10, 11, 'DEB7676C35', 'Joko Santoso', '081234567750', 'Jl. Contoh No. 2223', 3, 0, 1, 1, '2023-07-10', 1),
(11, 12, 'AA12245DDE', 'Kartika Putri', '081234567915', 'Jl. Contoh No. 2425', 2, 1, 1, 0, '2023-07-11', 1),
(12, 13, 'F2AB90EE66', 'Lukman Hakim', '081234567560', 'Jl. Contoh No. 2627', 3, 0, 0, 1, '2023-07-12', 4),
(13, 14, 'D1CD24576A', 'Mega Wati', '081234567569', 'Jl. Contoh No. 2829', 1, 1, 0, 0, '2023-07-13', 1),
(14, 15, '115F96EA6A', 'Nadia Permata', '081234567161', 'Jl. Contoh No. 3031', 4, 0, 1, 1, '2023-07-14', 3),
(15, 16, 'BF4EE65ABB', 'Oscar Pratama', '081234567621', 'Jl. Contoh No. 3233', 3, 1, 1, 0, '2023-07-15', 2),
(16, 17, 'B28F2D3302', 'Purnama Sari', '081234567222', 'Jl. Contoh No. 3435', 2, 0, 0, 1, '2023-07-16', 2),
(17, 18, '92C2F81A23', 'Qori Azizah', '081234567165', 'Jl. Contoh No. 3637', 3, 1, 0, 0, '2023-07-17', 4),
(18, 19, '136AA994B4', 'Rahmat Hidayat', '081234567280', 'Jl. Contoh No. 3839', 1, 0, 1, 1, '2023-07-18', 3),
(19, 20, '30573D3F77', 'Siska Rahayu', '081234567926', 'Jl. Contoh No. 4041', 4, 1, 1, 0, '2023-07-19', 1),
(20, 21, '878AF1049E', 'Taufik Hidayat', '081234567437', 'Jl. Contoh No. 4243', 3, 0, 0, 1, '2023-07-20', 3),
(21, 22, 'B562563B7E', 'Umi Kholifah', '081234567492', 'Jl. Contoh No. 4445', 2, 1, 1, 0, '2023-07-21', 1),
(22, 23, '5AF947697D', 'Vina Fitri', '081234567279', 'Jl. Contoh No. 4647', 3, 0, 1, 1, '2023-07-22', 4),
(23, 24, '4BE1DD3FAA', 'Wahyu Santoso', '081234567325', 'Jl. Contoh No. 4849', 1, 1, 0, 0, '2023-07-23', 1),
(24, 25, '2932D1C85C', 'Yuli Kartika', '081234567903', 'Jl. Contoh No. 5051', 4, 0, 0, 1, '2023-07-24', 2),
(25, 26, '4FF4FE5BA6', 'Zainal Abidin', '081234567353', 'Jl. Contoh No. 5253', 3, 1, 1, 0, '2023-07-25', 1),
(26, 27, 'FB2360217A', 'Adi Nugraha', '081234567476', 'Jl. Contoh No. 5455', 2, 0, 1, 1, '2023-07-26', 3),
(27, 28, 'A45E13999B', 'Bagus Wibowo', '081234567383', 'Jl. Contoh No. 5657', 3, 1, 0, 0, '2023-07-27', 4),
(28, 29, '372C915833', 'Cahaya Suci', '081234567250', 'Jl. Contoh No. 5859', 1, 0, 0, 1, '2023-07-28', 3),
(29, 30, '04E170C13B', 'Dina Puspita', '081234567932', 'Jl. Contoh No. 6061', 4, 1, 1, 0, '2023-07-29', 3),
(30, 31, '85E730E0AB', 'Edi Satria', '081234567465', 'Jl. Contoh No. 6263', 3, 0, 1, 1, '2023-07-30', 1),
(31, 32, 'BD1EFB81C3', 'Fauzi Ramadhan', '081234567744', 'Jl. Contoh No. 6465', 2, 1, 0, 0, '2023-07-31', 3),
(32, 33, '947C94F562', 'Gita Permata', '081234567379', 'Jl. Contoh No. 6667', 3, 0, 0, 1, '2023-08-01', 3),
(33, 34, 'CC06CCD0E3', 'Hendra Kurniawan', '081234567986', 'Jl. Contoh No. 6869', 1, 1, 1, 0, '2023-08-02', 1),
(34, 35, '57B700A2EC', 'Indah Fitriani', '081234567309', 'Jl. Contoh No. 7071', 4, 0, 1, 1, '2023-08-03', 1),
(35, 36, '804350FD13', 'Joko Pranowo', '081234567458', 'Jl. Contoh No. 6969', 3, 1, 0, 0, '2023-08-04', 4),
(36, 37, '5A4DDFA857', 'Kokom Surokom', '081234567856', 'Jl. Contoh No. 6969', 2, 0, 0, 1, '2023-08-05', 1),
(37, 38, '449C49346B', 'Lia Maulidia', '081234567739', 'Jl. Contoh No. 7273', 3, 1, 1, 0, '2023-08-06', 3),
(38, 39, '9927F8D8A0', 'Maman Suparman', '081234567185', 'Jl. Contoh No. 7475', 1, 0, 1, 1, '2023-08-07', 1),
(39, 40, 'FE4A3AB003', 'Nina Wulandari', '081234567734', 'Jl. Contoh No. 7677', 4, 1, 0, 0, '2023-08-08', 3),
(40, 41, 'FB6AD1FD46', 'Oscar Setiawan', '081234567205', 'Jl. Contoh No. 7879', 3, 0, 1, 1, '2023-08-09', 1),
(41, 42, '0B4560699C', 'Putri Damayanti', '081234567158', 'Jl. Contoh No. 8081', 2, 1, 1, 0, '2023-08-10', 4),
(42, 43, 'EA5D9350FC', 'Rudi Hartono', '081234567352', 'Jl. Contoh No. 8283', 3, 0, 0, 1, '2023-08-11', 2),
(43, 44, '5392C8B19A', 'Sinta Puspita', '081234567168', 'Jl. Contoh No. 8485', 1, 0, 1, 1, '2023-08-12', 3),
(44, 45, '44A5B227DE', 'Tono Santoso', '081234567977', 'Jl. Contoh No. 8687', 4, 1, 0, 0, '2023-08-13', 2),
(45, 46, '118AFF21C2', 'Vina Pratiwi', '081234567249', 'Jl. Contoh No. 8889', 3, 0, 0, 1, '2023-08-14', 2),
(46, 47, '27ABB7FA41', 'Wawan Kurniawan', '081234567362', 'Jl. Contoh No. 9091', 2, 1, 1, 0, '2023-08-15', 4),
(47, 48, '9FF2F8729C', 'Yulia Setyawati', '081234567599', 'Jl. Contoh No. 9293', 3, 0, 1, 1, '2023-08-16', 1),
(48, 49, '4355DF14EC', 'Abdul Rahman', '081234567272', 'Jl. Contoh No. 9697', 1, 1, 0, 0, '2023-08-17', 1),
(49, 50, '832D3742BD', 'Bunga Citra', '081234567256', 'Jl. Contoh No. 9899', 4, 0, 0, 1, '2023-08-18', 1),
(50, 51, '7AA2F98BC9', 'Citra Purnama', '081234567656', 'Jl. Contoh No. 100101', 3, 1, 1, 0, '2023-08-19', 2),
(51, 2, '7ECB5B2C14', 'Ajaib Pandu', '6144381434', 'jl. turunan terjal', 4, 1, 0, 2, '2023-07-11', 1),
(52, 2, '193467A056', 'agfawafawln', 'apgjewfa', 'gaewlgnlwe', 1651, 0, 0, 0, '2023-07-11', 1153);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `telepon`, `alamat`, `tipe`) VALUES
(1, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', '08123456789', 'Jalan In Aja Dulu', 2),
(2, 'Viole', 'arigaul', '6c54ba1abd37697b9aba98e2a973dc7f', '081339585537', 'Jalan Pondok Pangrango', 1),
(3, 'John Doe', 'johndoe', 'd763ec748433fb79a04f82bd46133d55', '081234567381', 'Jl. Contoh No. 123', 1),
(4, 'Jane Smith', 'janesmith', '20b7a083459d9d66005453db9e1e18ed', '081234567463', 'Jl. Contoh No. 456', 1),
(5, 'Michael Johnson', 'michaeljohnson', '3d2314614916885b7b7da25da7ff27af', '081234567164', 'Jl. Contoh No. 789', 1),
(6, 'Emily Davis', 'emilydavis', '7670857f57c178d9df2c23cd7639392f', '081234567654', 'Jl. Contoh No. 012', 1),
(7, 'Robert Brown', 'robertbrown', '080c8fc68c7f949d491bd3b96b4ed2c7', '081234567214', 'Jl. Contoh No. 345', 1),
(8, 'Jennifer Taylor', 'jennifertaylor', '0f08fd247ce46b5a1d26a9b3d9d3d136', '081234567137', 'Jl. Contoh No. 678', 1),
(9, 'Christopher Wilson', 'christopherwilson', '28e18123635ef983b56c581960625828', '081234567212', 'Jl. Contoh No. 901', 1),
(10, 'Jessica Anderson', 'jessicaanderson', '181d71387c5ed3814a359ef5d01184a2', '081234567586', 'Jl. Contoh No. 234', 1),
(11, 'Matthew Martinez', 'matthewmartinez', 'ec65efc459daacd41d6018a3a2e3b386', '081234567889', 'Jl. Contoh No. 567', 1),
(12, 'Sarah Thomas', 'sarahthomas', '4e79f1a37d020d47ec7e3db8efe81617', '081234567969', 'Jl. Contoh No. 890', 1),
(13, 'David Garcia', 'davidgarcia', '41615143f5ff90c74d6844688c06ce00', '081234567552', 'Jl. Contoh No. 123', 1),
(14, 'Amanda Robinson', 'amandarobinson', 'afa4f45f2630c081efd08f689d68e0f1', '081234567155', 'Jl. Contoh No. 456', 1),
(15, 'Daniel Clark', 'danielclark', 'ccdef2f387d4c12ae4ae8592cd5f7cbf', '081234567907', 'Jl. Contoh No. 789', 1),
(16, 'Melissa Lewis', 'melissalewis', '9ca9decdd20b71d341a2d6ef57854850', '081234567665', 'Jl. Contoh No. 012', 1),
(17, 'Andrew Lee', 'andrewlee', 'd4019aa2fdea76343c3087ab52f412e7', '081234567673', 'Jl. Contoh No. 345', 1),
(18, 'Olivia Walker', 'oliviawalker', '08ab1c988867f653a938aa0fb06e1e38', '081234567562', 'Jl. Contoh No. 678', 1),
(19, 'James Green', 'jamesgreen', '70d8fb06938b69842dc72cdc0eea8fce', '081234567220', 'Jl. Contoh No. 901', 1),
(20, 'Lauren Hall', 'laurenhall', '5d23ad41eb66afff3ed963da7ab3ddaa', '081234567980', 'Jl. Contoh No. 234', 1),
(21, 'Ryan Young', 'ryanyoung', '586415f7cd623518438540950723fc7a', '081234567230', 'Jl. Contoh No. 567', 1),
(22, 'Sophia Hernandez', 'sophiahernandez', 'bd5b7c2c62b3deffa281b21a943ce993', '081234567368', 'Jl. Contoh No. 890', 1),
(23, 'William Hill', 'williamhill', '43760987596583e68482627272b59407', '081234567315', 'Jl. Contoh No. 123', 1),
(24, 'Grace Turner', 'graceturner', '0690115e6d8ca891c154b691f5958350', '081234567204', 'Jl. Contoh No. 456', 1),
(25, 'Joseph Baker', 'josephbaker', 'f2a8fca08382abd03b85ebf42924f42d', '081234567266', 'Jl. Contoh No. 789', 1),
(26, 'Chloe Morris', 'chloemorris', 'a47bbfdac57d0cda3f81d0b93ce10a83', '081234567989', 'Jl. Contoh No. 012', 1),
(27, 'Benjamin Adams', 'benjaminadams', '7c5fa63c59568aa4877b665e25776a06', '081234567464', 'Jl. Contoh No. 345', 1),
(28, 'Lily Ward', 'lilyward', '838169cf79344fb5ca91ca701c9f68ab', '081234567772', 'Jl. Contoh No. 678', 1),
(29, 'Samuel Turner', 'samuelturner', '03a26b7f4728ef591029112de2b5cb74', '081234567544', 'Jl. Contoh No. 901', 1),
(30, 'Mia Collins', 'miacollins', 'fb9b6a041a178c9a85e52f8e5fe1530b', '081234567418', 'Jl. Contoh No. 234', 1),
(31, 'Daniel Hernandez', 'danielhernandez', 'df558cae94c9475bc550e139e457ba03', '081234567707', 'Jl. Contoh No. 567', 1),
(32, 'Sofia Butler', 'sofiabutler', '3170bee45c89a7ae324df2f733263b86', '081234567432', 'Jl. Contoh No. 890', 1),
(33, 'Ethan Davis', 'ethandavis', '0f68355cd082ba3bcafb4540864c8b1d', '081234567454', 'Jl. Contoh No. 123', 1),
(34, 'Avery Hill', 'averyhill', '9392f4dbd0c00069e921e615b137a233', '081234567920', 'Jl. Contoh No. 456', 1),
(35, 'Natalie Brown', 'nataliebrown', '4b7264a15e6e65efbf2eaa17f51b57d2', '081234567662', 'Jl. Contoh No. 789', 1),
(36, 'Jackson Allen', 'jacksonallen', '3ea5c165e71886ac5bf4f02c58402857', '081234567866', 'Jl. Contoh No. 012', 1),
(37, 'Grace Cooper', 'gracecooper', '69441677ab63d218ee2a8929510719f4', '081234567852', 'Jl. Contoh No. 345', 1),
(38, 'Lucas Green', 'lucasgreen', '746c798c07878c445effb423bd5780b0', '081234567958', 'Jl. Contoh No. 369', 1),
(39, 'Abigail Parker', 'abigailparker', 'aac2d7adb1d503c5d726c5d82f9b25d8', '081234567660', 'Jl. Contoh No. 234', 1),
(40, 'William Turner', 'williamturner', 'd1483012f1182a666118f3270674216c', '081234567749', 'Jl. Contoh No. 901', 1),
(41, 'Frank Coleman', 'frankcoleman', 'ab6c3c60b0d33315cafa232a239829ab', '081234567305', 'Jl. Contoh No. 789', 1),
(42, 'Henry Brooks', 'henrybrooks', '236032f95b6f24ab6e879a6cf34d4941', '081234567111', 'Jl. Contoh No. 234', 1),
(43, 'Ivan Howard', 'ivanhoward', 'b5a0de01ffa24d653be2b31580f552ef', '081234567697', 'Jl. Contoh No. 012', 1),
(44, 'Kevin Reed', 'kevinereed', 'e255e7c3e87fb468761cd017bcf33e95', '081234567905', 'Jl. Contoh No. 345', 1),
(45, 'Penelope Russell', 'peneloperussell', '6373b414579dacea8e5c3892d4a0a16c', '081234567973', 'Jl. Contoh No. 901', 1),
(46, 'Qard Bailey', 'qardbailey', 'e9f04955af0eba6ca0955fdda5973936', '081234567930', 'Jl. Contoh No. 678', 1),
(47, 'Thomas Myers', 'thomasmyers', '20e63737a915e84c14146a7fc41fcf98', '081234567972', 'Jl. Contoh No. 234', 1),
(48, 'Ummar Simmons', 'ummarsimmons', '59a770bb086ea3ec46b703184a821585', '081234567994', 'Jl. Contoh No. 567', 1),
(49, 'Xavier Foster', 'xavierfoster', '9d29d83f9ca73d0c5b5df79e37bd9935', '081234567884', 'Jl. Contoh No. 890', 1),
(50, 'Yuan Washington', 'yuanwashington', '72de50024877d95361c4c42b0e9c79ec', '081234567568', 'Jl. Contoh No. 123', 1),
(51, 'Zander Price', 'zanderprice', '8b425ac34dd20f1e3c031ab383611d5f', '081234567900', 'Jl. Contoh No. 456', 1),
(52, 'Test', 'test', 'cc03e747a6afbbcbf8be7668acfebee5', '61206169', 'Jl. Buntu', 1),
(53, 'Tast', 'tast', 'd9ac9eeb0323a58e715471ae879c319e', '64684204', 'jl buntu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
