-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2023 pada 05.54
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskul`
--

CREATE TABLE `ekskul` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kuota` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `ekskul`
--

INSERT INTO `ekskul` (`id`, `nama`, `deskripsi`, `kuota`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Basket', 'Bola basket merupakan salah satu jenis olahraga yang menggunakan bola besar. bola dimainkan secara berkelompok yang terdiri dari dua tim yang masing-masing beranggotakan lima orang.', 15, '9WvT3WuFtgAyTomP6Cjb.JPG', '2023-07-12 04:01:01', '2023-07-30 01:46:07'),
(3, 'Bulu Tangkis', 'Cabang olahraga badminton menjadi salah satu di antara beberapa cabang olahraga lainnya yang cukup dikenal oleh banyak orang Indonesia dan juga dunia. Olahraga yang satu ini juga dikenal dengan istilah badminton. Kemudian, di Indonesia lebih familiar atau lebih dikenal banyak masyarakat Indonesia dengan istilah bulu tangkis.', 5, 'KNmTmDgCy0pWw2wsDDUJ.jpg', '2023-07-12 12:31:42', '2023-07-30 04:42:59'),
(4, 'Drumband', 'Drumben (bahasa Inggris: drumband, marching band) adalah sekelompok barisan orang yang memainkan satu atau beberapa lagu dengan menggunakan sejumlah kombinasi alat musik (tiup, perkusi, dan sejumlah instrumen pit) secara bersama-sama. Penampilan drumben merupakan kombinasi dari permainan musik (tiup, dan perkusi) serta aksi baris-berbaris dari pemainnya.', 5, 'bYkmPFADna5yZdHHEHYV.jpg', '2023-07-12 15:18:52', '2023-07-25 04:30:29'),
(5, 'English Club', 'English Club adalah Ekstrakurikuler Bahasa Inggris,dengan tujuan agar siswa yang ikut EC bisa meningkatkan speaking,dan supaya siswa bisa berbicara menggunakan Bahasa Inggris dengan benar.Untuk grammatical atau kosakata,siswa dapat mengikuti dengan sendirinya.Penting untuk siswa bisa berbicara dan tampil di depan umum.Dan ekstakurikuler ini,lebih fokus ke penggunaan bahasa Inggris,agar siswa lebih percaya diri berbicara di depan umum.', 5, 'aXvTuN7ty8JyglWaRakZ.PNG', '2023-07-12 15:19:39', '2023-07-25 04:43:39'),
(6, 'Karate', 'Karate merupakan olahraga bela diri yang sudah mendunia dan banyak diminati berbagai kalangan, dari anak-anak hingga orang dewasa. Olahraga karate diminati banyak orang untuk mempertahankan diri dari berbagai macam serangan berbahaya dan ancaman yang biasanya terjadi, terutama di jalanan serta untuk menjaga kesehatan.', 5, 'fW2XXzyOiB9gzYV9segk.JPG', '2023-07-12 15:24:35', '2023-07-25 04:35:06'),
(8, 'Rohis', 'Rohis adalah singkatan dari rohani Islam dan sering juga disebut sebagai Dewan Keluarga Masjid (DKM). Biasanya, rohis ada di tiap Sekolah Menengah Pertama (SMP) dan Sekolah Menengah Atas (SMA) dalam bentuk organisasi.', 5, 'oG3BT2U3QkGjNpdEKq9C.JPG', '2023-07-12 15:26:10', '2023-07-25 04:35:24'),
(9, 'Palang Merah Remaja (PMR)', 'Palang Merah Remaja atau PMR adalah suatu organisasi binaan dari Palang Merah Indonesia yang berpusat di sekolah-sekolah ataupun kelompok-kelompok masyarakat (sanggar, kelompok belajar, dll.) yang bertujuan membangun dan mengembangkan karakter Kepalangmerahan agar siap menjadi Relawan PMI pada masa depan.', 5, 'u1pM0rQlz6s3RblTWsOK.JPG', '2023-07-12 15:26:51', '2023-07-25 04:35:40'),
(10, 'Paskibraka', 'Paskibraka adalah singkatan dari Pasukan Pengibar Bendera Pusaka dengan tugas utamanya mengibarkan duplikat bendera pusaka dalam upacara peringatan proklamasi kemerdekaan Indonesia di 3 tempat, yakni tingkat Kabupaten/Kota (Kantor Bupati/Wali Kota), Provinsi (Kantor Gubernur), dan Nasional (Istana Merdeka). Anggotanya berasal dari pelajar SMA Sederajat kelas 1 atau 2. Penyeleksian anggotanya biasanya dilakukan sekitar bulan April untuk persiapan pengibaran pada 17 Agustus.', 5, 'hpVkPwAgANArqixixeCd.JPG', '2023-07-12 15:27:44', '2023-07-25 04:35:59'),
(11, 'Pasforta', 'PASFORTA adalah pasukan khusus SMA negeri 3 Ketapang hanya ada di Smanta Pasforta ini , Pasforta lahir dari Ekskul PASKIBRA, yg didlm nya adalah LKBB Dasar dan LKBB Variasi yang tidak biasa , ini lah yang membuat keren nya.', 5, 'wIKsGNjWlfiWtjXdsSvB.JPG', '2023-07-12 15:28:32', '2023-07-25 04:36:18'),
(15, 'Smanta Futsal', 'Futsal adalah salah satu olahraga paling populer di kalangan anak muda sekarang, karena olahraga ini adalah turunan dari sepak bola tapi dengan jumlah pemain yang lebih sedikit dan luas lapangan yang lebih kecil. Di SMA Negeri 12 Berau ekstrakurikuler futsal cukup digemari, tercatat lebih dari 20 siswa ikut serta dalam ekskul ini. Ekstrakurikuler futsal diadakan dengan tujuan menyediakan wadah untuk siswa menyalurkan hobinya dan menghadirkan corak positif kepada para siswa yaitu sifat-sifat sportifitas serta mencetak bibit-bibit baru olahragawan yang berprestasi di tingkat lokal, nasional maupun internasional.', 5, 'JWiI9mvg4WPTNz2guR7U.jpg', '2023-07-12 15:46:43', '2023-07-25 04:36:44'),
(16, 'Smanta Musik', 'Ekstrakurikuler seni musik adalah kegiatan yang diselenggarakan diluar jam pelajaran yang tercantum dalam susunan program sesuai dengan keadaan dan kebutuhan sekolah. Pembelajaran ekstrakurikuler yang digarap secara ensemble musik di SMA Negeri 3 Ketapang menjadi sarana edukasi yang memiliki banyak manfaat bagi siswa antara lain membantu peserta didik menjadi lebih disiplin, bertanggung jawab, dapat mengembangkan daya kreatifitas, melatih rasio dan emosi mempertajam konsentrasi, dan menjadi lebih percaya diri.', 5, 'rwcQNOpYLprpL0JEFGDG.JPG', '2023-07-12 15:47:26', '2023-07-25 04:37:02'),
(17, 'Smanta Tari', 'Seni tari adalah sebuah organisasi untuk memperdalam pengetahuan siswa siswi SMAN 3 Ketapang tentang tari tradisional yang ada di Indonesia. Seni tari di kemas dalam bentuk ekstrakurikuler khususnya di SMAN 3 Ketapang. Ekskul seni tari adalah wadah bagi siswa siswi yang memiliki kemampuan dalam menari. Sehingga mereka bisa mengembangkan dan mengekspresikan diri mereka melalui seni tari. Ekskul seni tari tentunya terbuka untuk semua siswa siswi SMAN 3 Ketapang baik yang sudah pandai menari maupun yang belum pandai menari.', 5, '3zqAvVVr6K8pm8wiI429.JPG', '2023-07-12 15:47:59', '2023-07-25 04:37:23'),
(18, 'Smanta Voli', 'Ekstrakurikuler bola voli merupakan media untuk mendorong prestasi non akademik, pertumbuhan fisik dan perkembangan psikis, meningkatkan kemampuan dan keterampilan dalam bermain bola voli supaya lebih baik. Selain itu, Ekstrakurikuler bola voli merupakan wadah untuk menyalurkan minat dan bakat serta hobi para siswa di bidang olahraga.', 5, 'pNgLyGm5LqxhrIxWzWvV.jpg', '2023-07-12 15:48:36', '2023-07-25 04:47:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kriteria_nama` varchar(255) NOT NULL,
  `kriteria_bobot` int(11) NOT NULL,
  `kriteria` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `kriteria_nama`, `kriteria_bobot`, `kriteria`, `created_at`, `updated_at`) VALUES
(1, 'Minat', 100, 1, '2023-07-11 14:22:01', '2023-07-11 14:22:01'),
(2, 'Bakat/Prestasi', 85, 2, '2023-07-11 16:40:48', '2023-07-11 16:40:48'),
(3, 'Jadwal Latihan', 80, 3, '2023-07-12 03:47:42', '2023-07-12 03:47:42'),
(4, 'Tujuan', 60, 4, '2023-07-12 03:48:07', '2023-07-12 03:48:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_aktifitas`
--

CREATE TABLE `log_aktifitas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `kriteria` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `log_aktifitas`
--

INSERT INTO `log_aktifitas` (`id`, `id_user`, `id_siswa`, `kriteria`, `created_at`, `updated_at`) VALUES
(1, 19, 19, 1, '2023-08-02 02:58:14', '2023-08-02 02:58:14'),
(2, 19, 19, 2, '2023-08-02 02:58:52', '2023-08-02 02:58:52'),
(3, 19, 19, 3, '2023-08-02 02:59:25', '2023-08-02 02:59:25'),
(4, 19, 19, 4, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(5, 20, 20, 1, '2023-08-02 03:02:55', '2023-08-02 03:02:55'),
(6, 20, 20, 2, '2023-08-02 03:03:30', '2023-08-02 03:03:30'),
(7, 20, 20, 3, '2023-08-02 03:04:01', '2023-08-02 03:04:01'),
(8, 20, 20, 4, '2023-08-02 03:04:33', '2023-08-02 03:04:33'),
(9, 25, 25, 1, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(10, 25, 25, 2, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(11, 25, 25, 3, '2023-08-02 03:06:48', '2023-08-02 03:06:48'),
(12, 25, 25, 4, '2023-08-02 03:07:19', '2023-08-02 03:07:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_ekskul` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `nilai_normalisasi` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `id_siswa`, `id_ekskul`, `id_kriteria`, `id_jawaban`, `nilai`, `nilai_normalisasi`, `created_at`, `updated_at`) VALUES
(1, 19, 2, 1, 1, 100, 30.77, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(2, 19, 3, 1, 3, 50, 15.385, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(3, 19, 4, 1, 4, 0, 0, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(4, 19, 5, 1, 4, 0, 0, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(5, 19, 6, 1, 4, 0, 0, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(6, 19, 8, 1, 4, 0, 0, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(7, 19, 9, 1, 4, 0, 0, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(8, 19, 10, 1, 3, 50, 15.385, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(9, 19, 11, 1, 4, 0, 0, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(10, 19, 15, 1, 4, 0, 0, '2023-08-02 02:58:15', '2023-08-02 02:58:15'),
(11, 19, 16, 1, 4, 0, 0, '2023-08-02 02:58:16', '2023-08-02 02:58:16'),
(12, 19, 17, 1, 4, 0, 0, '2023-08-02 02:58:16', '2023-08-02 02:58:16'),
(13, 19, 18, 1, 4, 0, 0, '2023-08-02 02:58:16', '2023-08-02 02:58:16'),
(14, 19, 2, 2, 5, 75, 19.6125, '2023-08-02 02:58:52', '2023-08-02 02:58:52'),
(15, 19, 3, 2, 7, 0, 0, '2023-08-02 02:58:52', '2023-08-02 02:58:52'),
(16, 19, 4, 2, 6, 50, 13.075, '2023-08-02 02:58:52', '2023-08-02 02:58:52'),
(17, 19, 5, 2, 7, 0, 0, '2023-08-02 02:58:52', '2023-08-02 02:58:52'),
(18, 19, 6, 2, 7, 0, 0, '2023-08-02 02:58:52', '2023-08-02 02:58:52'),
(19, 19, 8, 2, 7, 0, 0, '2023-08-02 02:58:52', '2023-08-02 02:58:52'),
(20, 19, 9, 2, 7, 0, 0, '2023-08-02 02:58:52', '2023-08-02 02:58:52'),
(21, 19, 10, 2, 6, 50, 13.075, '2023-08-02 02:58:53', '2023-08-02 02:58:53'),
(22, 19, 11, 2, 7, 0, 0, '2023-08-02 02:58:53', '2023-08-02 02:58:53'),
(23, 19, 15, 2, 7, 0, 0, '2023-08-02 02:58:53', '2023-08-02 02:58:53'),
(24, 19, 16, 2, 7, 0, 0, '2023-08-02 02:58:53', '2023-08-02 02:58:53'),
(25, 19, 17, 2, 7, 0, 0, '2023-08-02 02:58:53', '2023-08-02 02:58:53'),
(26, 19, 18, 2, 7, 0, 0, '2023-08-02 02:58:53', '2023-08-02 02:58:53'),
(27, 19, 2, 3, 9, 50, 12.31, '2023-08-02 02:59:25', '2023-08-02 02:59:25'),
(28, 19, 3, 3, 10, 0, 0, '2023-08-02 02:59:25', '2023-08-02 02:59:25'),
(29, 19, 4, 3, 10, 0, 0, '2023-08-02 02:59:25', '2023-08-02 02:59:25'),
(30, 19, 5, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(31, 19, 6, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(32, 19, 8, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(33, 19, 9, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(34, 19, 10, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(35, 19, 11, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(36, 19, 15, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(37, 19, 16, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(38, 19, 17, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(39, 19, 18, 3, 10, 0, 0, '2023-08-02 02:59:26', '2023-08-02 02:59:26'),
(40, 19, 2, 4, 11, 100, 18.46, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(41, 19, 3, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(42, 19, 4, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(43, 19, 5, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(44, 19, 6, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(45, 19, 8, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(46, 19, 9, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(47, 19, 10, 4, 11, 100, 18.46, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(48, 19, 11, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(49, 19, 15, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(50, 19, 16, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(51, 19, 17, 4, 12, 50, 9.23, '2023-08-02 02:59:56', '2023-08-02 02:59:56'),
(52, 19, 18, 4, 12, 50, 9.23, '2023-08-02 02:59:57', '2023-08-02 02:59:57'),
(53, 20, 2, 1, 4, 0, 0, '2023-08-02 03:02:55', '2023-08-02 03:02:55'),
(54, 20, 3, 1, 4, 0, 0, '2023-08-02 03:02:55', '2023-08-02 03:02:55'),
(55, 20, 4, 1, 3, 50, 15.385, '2023-08-02 03:02:55', '2023-08-02 03:02:55'),
(56, 20, 5, 1, 4, 0, 0, '2023-08-02 03:02:55', '2023-08-02 03:02:55'),
(57, 20, 6, 1, 4, 0, 0, '2023-08-02 03:02:55', '2023-08-02 03:02:55'),
(58, 20, 8, 1, 4, 0, 0, '2023-08-02 03:02:55', '2023-08-02 03:02:55'),
(59, 20, 9, 1, 4, 0, 0, '2023-08-02 03:02:55', '2023-08-02 03:02:55'),
(60, 20, 10, 1, 1, 100, 30.77, '2023-08-02 03:02:55', '2023-08-02 03:02:55'),
(61, 20, 11, 1, 4, 0, 0, '2023-08-02 03:02:56', '2023-08-02 03:02:56'),
(62, 20, 15, 1, 4, 0, 0, '2023-08-02 03:02:56', '2023-08-02 03:02:56'),
(63, 20, 16, 1, 4, 0, 0, '2023-08-02 03:02:56', '2023-08-02 03:02:56'),
(64, 20, 17, 1, 1, 100, 30.77, '2023-08-02 03:02:56', '2023-08-02 03:02:56'),
(65, 20, 18, 1, 4, 0, 0, '2023-08-02 03:02:56', '2023-08-02 03:02:56'),
(66, 20, 2, 2, 7, 0, 0, '2023-08-02 03:03:30', '2023-08-02 03:03:30'),
(67, 20, 3, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(68, 20, 4, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(69, 20, 5, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(70, 20, 6, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(71, 20, 8, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(72, 20, 9, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(73, 20, 10, 2, 5, 75, 19.6125, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(74, 20, 11, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(75, 20, 15, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(76, 20, 16, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(77, 20, 17, 2, 6, 50, 13.075, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(78, 20, 18, 2, 7, 0, 0, '2023-08-02 03:03:31', '2023-08-02 03:03:31'),
(79, 20, 2, 3, 10, 0, 0, '2023-08-02 03:04:01', '2023-08-02 03:04:01'),
(80, 20, 3, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(81, 20, 4, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(82, 20, 5, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(83, 20, 6, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(84, 20, 8, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(85, 20, 9, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(86, 20, 10, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(87, 20, 11, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(88, 20, 15, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(89, 20, 16, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(90, 20, 17, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(91, 20, 18, 3, 10, 0, 0, '2023-08-02 03:04:02', '2023-08-02 03:04:02'),
(92, 20, 2, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(93, 20, 3, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(94, 20, 4, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(95, 20, 5, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(96, 20, 6, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(97, 20, 8, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(98, 20, 9, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(99, 20, 10, 4, 11, 100, 18.46, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(100, 20, 11, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(101, 20, 15, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(102, 20, 16, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(103, 20, 17, 4, 11, 100, 18.46, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(104, 20, 18, 4, 12, 50, 9.23, '2023-08-02 03:04:34', '2023-08-02 03:04:34'),
(105, 25, 2, 1, 1, 100, 30.77, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(106, 25, 3, 1, 3, 50, 15.385, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(107, 25, 4, 1, 4, 0, 0, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(108, 25, 5, 1, 4, 0, 0, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(109, 25, 6, 1, 4, 0, 0, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(110, 25, 8, 1, 4, 0, 0, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(111, 25, 9, 1, 4, 0, 0, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(112, 25, 10, 1, 1, 100, 30.77, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(113, 25, 11, 1, 3, 50, 15.385, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(114, 25, 15, 1, 4, 0, 0, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(115, 25, 16, 1, 4, 0, 0, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(116, 25, 17, 1, 4, 0, 0, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(117, 25, 18, 1, 4, 0, 0, '2023-08-02 03:05:41', '2023-08-02 03:05:41'),
(118, 25, 2, 2, 2, 100, 26.15, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(119, 25, 3, 2, 6, 50, 13.075, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(120, 25, 4, 2, 7, 0, 0, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(121, 25, 5, 2, 7, 0, 0, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(122, 25, 6, 2, 7, 0, 0, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(123, 25, 8, 2, 7, 0, 0, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(124, 25, 9, 2, 7, 0, 0, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(125, 25, 10, 2, 6, 50, 13.075, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(126, 25, 11, 2, 7, 0, 0, '2023-08-02 03:06:17', '2023-08-02 03:06:17'),
(127, 25, 15, 2, 7, 0, 0, '2023-08-02 03:06:18', '2023-08-02 03:06:18'),
(128, 25, 16, 2, 7, 0, 0, '2023-08-02 03:06:18', '2023-08-02 03:06:18'),
(129, 25, 17, 2, 7, 0, 0, '2023-08-02 03:06:18', '2023-08-02 03:06:18'),
(130, 25, 18, 2, 7, 0, 0, '2023-08-02 03:06:18', '2023-08-02 03:06:18'),
(131, 25, 2, 3, 8, 100, 24.62, '2023-08-02 03:06:48', '2023-08-02 03:06:48'),
(132, 25, 3, 3, 9, 50, 12.31, '2023-08-02 03:06:48', '2023-08-02 03:06:48'),
(133, 25, 4, 3, 10, 0, 0, '2023-08-02 03:06:48', '2023-08-02 03:06:48'),
(134, 25, 5, 3, 10, 0, 0, '2023-08-02 03:06:48', '2023-08-02 03:06:48'),
(135, 25, 6, 3, 10, 0, 0, '2023-08-02 03:06:49', '2023-08-02 03:06:49'),
(136, 25, 8, 3, 10, 0, 0, '2023-08-02 03:06:49', '2023-08-02 03:06:49'),
(137, 25, 9, 3, 10, 0, 0, '2023-08-02 03:06:49', '2023-08-02 03:06:49'),
(138, 25, 10, 3, 10, 0, 0, '2023-08-02 03:06:49', '2023-08-02 03:06:49'),
(139, 25, 11, 3, 10, 0, 0, '2023-08-02 03:06:49', '2023-08-02 03:06:49'),
(140, 25, 15, 3, 10, 0, 0, '2023-08-02 03:06:49', '2023-08-02 03:06:49'),
(141, 25, 16, 3, 10, 0, 0, '2023-08-02 03:06:49', '2023-08-02 03:06:49'),
(142, 25, 17, 3, 10, 0, 0, '2023-08-02 03:06:49', '2023-08-02 03:06:49'),
(143, 25, 18, 3, 10, 0, 0, '2023-08-02 03:06:49', '2023-08-02 03:06:49'),
(144, 25, 2, 4, 11, 100, 18.46, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(145, 25, 3, 4, 11, 100, 18.46, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(146, 25, 4, 4, 12, 50, 9.23, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(147, 25, 5, 4, 12, 50, 9.23, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(148, 25, 6, 4, 12, 50, 9.23, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(149, 25, 8, 4, 12, 50, 9.23, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(150, 25, 9, 4, 12, 50, 9.23, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(151, 25, 10, 4, 12, 50, 9.23, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(152, 25, 11, 4, 12, 50, 9.23, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(153, 25, 15, 4, 12, 50, 9.23, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(154, 25, 16, 4, 12, 50, 9.23, '2023-08-02 03:07:19', '2023-08-02 03:07:19'),
(155, 25, 17, 4, 12, 50, 9.23, '2023-08-02 03:07:20', '2023-08-02 03:07:20'),
(156, 25, 18, 4, 12, 50, 9.23, '2023-08-02 03:07:20', '2023-08-02 03:07:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_ternormalisasi`
--

CREATE TABLE `nilai_ternormalisasi` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_ekskul` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `status_kuota` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `nilai_ternormalisasi`
--

INSERT INTO `nilai_ternormalisasi` (`id`, `id_siswa`, `id_ekskul`, `nilai`, `status_kuota`, `created_at`, `updated_at`) VALUES
(1, 19, 2, 81.1525, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(2, 19, 3, 24.615, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(3, 19, 4, 22.305, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(4, 19, 5, 9.23, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(5, 19, 6, 9.23, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(6, 19, 8, 9.23, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(7, 19, 9, 9.23, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(8, 19, 10, 46.92, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(9, 19, 11, 9.23, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(10, 19, 15, 9.23, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(11, 19, 16, 9.23, 0, '2023-08-02 02:59:58', '2023-08-02 02:59:58'),
(12, 19, 17, 9.23, 0, '2023-08-02 02:59:59', '2023-08-02 02:59:59'),
(13, 19, 18, 9.23, 0, '2023-08-02 02:59:59', '2023-08-02 02:59:59'),
(14, 20, 2, 9.23, 0, '2023-08-02 03:04:35', '2023-08-02 03:04:35'),
(15, 20, 3, 9.23, 0, '2023-08-02 03:04:35', '2023-08-02 03:04:35'),
(16, 20, 4, 24.615, 0, '2023-08-02 03:04:35', '2023-08-02 03:04:35'),
(17, 20, 5, 9.23, 0, '2023-08-02 03:04:35', '2023-08-02 03:04:35'),
(18, 20, 6, 9.23, 0, '2023-08-02 03:04:36', '2023-08-02 03:04:36'),
(19, 20, 8, 9.23, 0, '2023-08-02 03:04:36', '2023-08-02 03:04:36'),
(20, 20, 9, 9.23, 0, '2023-08-02 03:04:36', '2023-08-02 03:04:36'),
(21, 20, 10, 68.8425, 0, '2023-08-02 03:04:36', '2023-08-02 03:04:36'),
(22, 20, 11, 9.23, 0, '2023-08-02 03:04:36', '2023-08-02 03:04:36'),
(23, 20, 15, 9.23, 0, '2023-08-02 03:04:36', '2023-08-02 03:04:36'),
(24, 20, 16, 9.23, 0, '2023-08-02 03:04:36', '2023-08-02 03:04:36'),
(25, 20, 17, 62.305, 0, '2023-08-02 03:04:36', '2023-08-02 03:04:36'),
(26, 20, 18, 9.23, 0, '2023-08-02 03:04:36', '2023-08-02 03:04:36'),
(27, 25, 2, 100, 0, '2023-08-02 03:07:20', '2023-08-02 03:07:20'),
(28, 25, 3, 59.23, 0, '2023-08-02 03:07:20', '2023-08-02 03:07:20'),
(29, 25, 4, 9.23, 0, '2023-08-02 03:07:20', '2023-08-02 03:07:20'),
(30, 25, 5, 9.23, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21'),
(31, 25, 6, 9.23, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21'),
(32, 25, 8, 9.23, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21'),
(33, 25, 9, 9.23, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21'),
(34, 25, 10, 53.075, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21'),
(35, 25, 11, 24.615, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21'),
(36, 25, 15, 9.23, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21'),
(37, 25, 16, 9.23, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21'),
(38, 25, 17, 9.23, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21'),
(39, 25, 18, 9.23, 0, '2023-08-02 03:07:21', '2023-08-02 03:07:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_tertinggi`
--

CREATE TABLE `rating_tertinggi` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_ekskul` int(11) DEFAULT NULL,
  `peroleh_nilai` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `rating_tertinggi`
--

INSERT INTO `rating_tertinggi` (`id`, `id_siswa`, `id_ekskul`, `peroleh_nilai`, `created_at`, `updated_at`) VALUES
(1, 25, 2, 100, '2023-08-02 03:38:15', '2023-08-02 03:38:15'),
(2, 19, 2, 81.1525, '2023-08-02 03:38:15', '2023-08-02 03:38:15'),
(3, 20, 10, 68.8425, '2023-08-02 03:38:15', '2023-08-02 03:38:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_tertinggi_temp`
--

CREATE TABLE `rating_tertinggi_temp` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_ekskul` int(11) DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `rating_tertinggi_temp`
--

INSERT INTO `rating_tertinggi_temp` (`id`, `id_siswa`, `id_ekskul`, `nilai`) VALUES
(1, 19, 2, 81.1525),
(2, 20, 10, 68.8425),
(3, 25, 2, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `siswa_nama` varchar(255) NOT NULL,
  `siswa_email` varchar(255) DEFAULT NULL,
  `siswa_kelas` varchar(255) NOT NULL,
  `siswa_alamat` text NOT NULL,
  `siswa_jk` varchar(255) NOT NULL,
  `siswa_tmp_lahir` varchar(255) NOT NULL,
  `siswa_tgl_lahir` date NOT NULL,
  `siswa_nis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `siswa_nama`, `siswa_email`, `siswa_kelas`, `siswa_alamat`, `siswa_jk`, `siswa_tmp_lahir`, `siswa_tgl_lahir`, `siswa_nis`, `created_at`, `updated_at`) VALUES
(17, 'fenniliyana', 'fenniliyana2@gmail.com', 'IPA 3', 'Jl. Hayam Wuruk', 'Perempuan', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26'),
(19, 'putri ariyana', 'fenniliyana2@gmail.com', 'IPA 3', 'Jl. Hayam Wuruk', 'Perempuan', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26'),
(20, 'fitriyana', 'fenniliyana2@gmail.com', 'IPA 3', 'Jl. Hayam Wuruk', 'Perempuan', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26'),
(21, 'aril saputra', 'fenniliyana2@gmail.com', 'IPA 3', 'Jl. Hayam Wuruk', 'Laki-laki', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26'),
(22, 'uti muhammad rifky', 'fenniliyana2@gmail.com', 'IPS 2', 'Jl. Hayam Wuruk', 'Laki-laki', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26'),
(23, 'tri andika', 'fenniliyana2@gmail.com', 'IPS 4', 'Jl. Hayam Wuruk', 'Laki-laki', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26'),
(24, 'delphiya ', 'fenniliyana2@gmail.com', 'IPS 1', 'Jl. Hayam Wuruk', 'Perempuan', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26'),
(25, 'dimas putra pratama', 'fenniliyana2@gmail.com', 'IPA 1', 'Jl. Hayam Wuruk', 'Laki-laki', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26'),
(26, 'reza', 'fenniliyana2@gmail.com', 'IPA 2', 'Jl. Hayam Wuruk', 'Laki-laki', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26'),
(27, 'deni wahyudi', 'fenniliyana2@gmail.com', 'IPA 4', 'Jl. Hayam Wuruk', 'Laki-laki', 'Ketapang', '2004-06-21', '12345678', '2023-07-30 04:06:26', '2023-07-30 04:06:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(5) NOT NULL DEFAULT 1,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `nip`, `jabatan`, `id_siswa`, `email`, `username`, `password`, `level`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fenyliana', '19960812 202312 1 002', 'Admin', NULL, NULL, 'feny', '$2y$10$taVRilBOT1zk7UUQpEvay.QIWtclSif8fHq/hsGb1pz2vGt1a58be', 1, 1, '2023-05-28 20:50:03', '2023-05-28 20:50:03'),
(17, 'fenniliyana', '12345678', 'IPA 3', 17, 'fenniliyana2@gmail.com', 'fenni', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21'),
(19, 'putri ariyana', '12345678', 'IPA 3', 19, 'fenniliyana2@gmail.com', 'putri', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21'),
(20, 'fitriyana', '12345678', 'IPA 3', 20, 'fenniliyana2@gmail.com', 'fitri', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21'),
(21, 'aril saputra', '12345678', 'IPA 3', 21, 'fenniliyana2@gmail.com', 'aril', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21'),
(22, 'uti muhammad rifky', '12345678', 'IPS 2', 22, 'fenniliyana2@gmail.com', 'uti', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21'),
(23, 'tri andika', '12345678', 'IPS 4', 23, 'fenniliyana2@gmail.com', 'tri', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21'),
(24, 'delphiya', '12345678', 'IPS 1', 24, 'fenniliyana2@gmail.com', 'pia', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21'),
(25, 'dimas putra pratama', '12345678', 'IPA 1', 25, 'fenniliyana2@gmail.com', 'dimas', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21'),
(26, 'reza', '12345678', 'IPA 2', 26, 'fenniliyana2@gmail.com', 'reza', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21'),
(27, 'deni wahyudi', '12345678', 'IPA 4', 27, 'fenniliyana2@gmail.com', 'deni', '$2y$10$puClKLxbnVzBqCntAirCm.mlxZtwFb8c00IKtNv4bmADemRoEdd.a', 2, 1, '2023-07-30 04:06:26', '2023-07-30 04:10:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `utility`
--

CREATE TABLE `utility` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `sub_kriteria` varchar(255) NOT NULL,
  `nilai_utility` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `utility`
--

INSERT INTO `utility` (`id`, `id_kriteria`, `sub_kriteria`, `nilai_utility`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sangat Minat', 100, '2023-07-11 15:48:17', '2023-07-11 15:48:17'),
(2, 2, 'sangat berbakat', 100, '2023-07-11 16:41:20', '2023-07-11 16:41:20'),
(3, 1, 'Cukup Minat', 50, '2023-07-12 03:48:34', '2023-07-12 03:48:34'),
(4, 1, 'Tidak Minat', 0, '2023-07-12 03:48:52', '2023-07-12 03:48:52'),
(5, 2, 'Cukup Berbakat', 75, '2023-07-12 03:51:12', '2023-07-12 03:51:12'),
(6, 2, 'Kurang Berbakat', 50, '2023-07-12 03:51:59', '2023-07-12 03:51:59'),
(7, 2, 'Tidak Berbakat', 0, '2023-07-12 03:52:17', '2023-07-12 03:52:17'),
(8, 3, 'Ada', 100, '2023-07-12 03:52:49', '2023-07-12 03:52:49'),
(9, 3, 'Kadang-kadang', 50, '2023-07-12 03:53:07', '2023-07-12 03:53:07'),
(10, 3, 'Tidak Ada', 0, '2023-07-12 03:53:21', '2023-07-12 03:53:21'),
(11, 4, 'Ada', 100, '2023-07-12 03:53:46', '2023-07-12 03:53:46'),
(12, 4, 'Tidak Ada', 50, '2023-07-12 03:54:04', '2023-07-12 03:54:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_ternormalisasi`
--
ALTER TABLE `nilai_ternormalisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating_tertinggi`
--
ALTER TABLE `rating_tertinggi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating_tertinggi_temp`
--
ALTER TABLE `rating_tertinggi_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `utility`
--
ALTER TABLE `utility`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT untuk tabel `nilai_ternormalisasi`
--
ALTER TABLE `nilai_ternormalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `rating_tertinggi`
--
ALTER TABLE `rating_tertinggi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rating_tertinggi_temp`
--
ALTER TABLE `rating_tertinggi_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `utility`
--
ALTER TABLE `utility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
