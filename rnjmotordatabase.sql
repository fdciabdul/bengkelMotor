-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2022 at 01:22 AM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rnjmotordatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `link` varchar(110) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `bulan` varchar(11) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `hasil` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `bulan`, `tahun`, `hasil`) VALUES
(17, '1', '2022', '0'),
(18, '2', '2022', '0'),
(19, '3', '2022', '0'),
(20, '4', '2022', '0'),
(21, '5', '2022', '0'),
(22, '6', '2022', '0'),
(23, '7', '2022', '0'),
(24, '8', '2022', '0'),
(25, '09', '2022', '0'),
(26, '10', '2022', '22'),
(27, '11', '2022', '0'),
(28, '12', '2022', '0');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_model`
--

CREATE TABLE `penjualan_model` (
  `id` int(11) NOT NULL,
  `merk` varchar(110) NOT NULL,
  `model` varchar(100) NOT NULL,
  `bulan` varchar(11) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `cabang` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan_model`
--

INSERT INTO `penjualan_model` (`id`, `merk`, `model`, `bulan`, `tahun`, `cabang`) VALUES
(31, 'Kawasaki', 'ZX636', '10', '2022', 'bekasi'),
(40, 'Kawasaki', 'ER6N', '10', '2022', 'bsd'),
(50, 'Yamaha', 'XJ6', '10', '2022', 'kemang'),
(52, 'Harley Davidson', 'FATBOY', '10', '2022', 'kemang'),
(58, 'Honda', 'MONKEY', '10', '2022', 'Duren Tiga'),
(66, 'Kawasaki', 'ER6N', '10', '2022', 'Duren Tiga'),
(67, 'APRILIA', 'SR GT 200', '10', '2022', 'Duren Tiga'),
(72, 'Kawasaki', 'Z800', '10', '2022', 'Duren Tiga'),
(77, 'Kawasaki', 'Z800', '10', '2022', 'Duren Tiga'),
(102, 'Honda', 'REBEL', '10', '2022', 'bsd'),
(103, 'Harley Davidson', 'STREET 500', '10', '2022', 'bsd'),
(106, 'Kawasaki', 'Z900', '10', '2022', 'bsd'),
(116, 'Kawasaki', 'VULCAN', '10', '2022', 'bsd'),
(117, 'Kawasaki', 'VULCAN', '10', '2022', 'Duren Tiga'),
(123, 'Ducati', 'MONSTER 795', '10', '2022', 'bsd'),
(124, 'Kawasaki', 'ER6N', '10', '2022', 'Duren Tiga'),
(131, 'Ducati', 'PANIGALE', '10', '2022', 'kemang'),
(132, 'Kawasaki', 'ZX10', '10', '2022', 'kemang'),
(133, 'Kawasaki', 'ER6N', '10', '2022', 'bsd'),
(134, 'Harley Davidson', 'STREET 500', '10', '2022', 'kemang'),
(135, 'Kawasaki', 'N250', '10', '2022', 'Duren Tiga'),
(137, 'Kawasaki', 'Z900', '10', '2022', 'kemang'),
(149, 'Honda', 'CB650R NEO', '10', '2022', 'Duren Tiga');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `merk` varchar(110) NOT NULL,
  `status` varchar(100) NOT NULL,
  `model` varchar(110) NOT NULL,
  `plat` varchar(11) NOT NULL,
  `km` varchar(100) NOT NULL,
  `warna` varchar(11) NOT NULL,
  `pajak` varchar(11) NOT NULL,
  `nik` varchar(110) NOT NULL,
  `nosin` varchar(110) NOT NULL,
  `noka` varchar(110) NOT NULL,
  `modal` varchar(110) NOT NULL,
  `hrg_open` varchar(11) NOT NULL,
  `hrg_nett` varchar(11) NOT NULL,
  `cabang` varchar(11) NOT NULL,
  `photo` longtext NOT NULL,
  `jenis` varchar(11) NOT NULL,
  `marketing_jual` varchar(110) NOT NULL,
  `marketing_beli` varchar(110) NOT NULL,
  `harga_sold` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `tgl_sold` varchar(110) NOT NULL,
  `source` varchar(100) NOT NULL,
  `metode_pembayaran` varchar(100) NOT NULL,
  `customer_beli` varchar(110) NOT NULL,
  `no_telpon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `merk`, `status`, `model`, `plat`, `km`, `warna`, `pajak`, `nik`, `nosin`, `noka`, `modal`, `hrg_open`, `hrg_nett`, `cabang`, `photo`, `jenis`, `marketing_jual`, `marketing_beli`, `harga_sold`, `keterangan`, `tgl_sold`, `source`, `metode_pembayaran`, `customer_beli`, `no_telpon`) VALUES
(25, 'Kawasaki', 'ready', 'Z900 ', 'D 5548 ADC', '4xxx', 'HITAM', '09.22', '2020', 'zr900be087584', 'ML5ZR900FLDA38106', '307.000.000', '1555', '2', 'kemang', '[\"uploads/Screenshot 2022-09-14 153551.png\"]', 'Motor', 'a', 'b', 'c', 'wwww', '19/10/2022', 'instagram', 'sda', 'asd', 'asd'),
(26, 'Yamaha', 'ready', 'MT 09', 'DK 3901 KO', '15.400', 'ABU ABU', '01.2021', '2015', 'N701E-038099', 'JYARN2960R001903', '258.300.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '19/10/2022', '', '', '', ''),
(27, 'Kawasaki', 'ready', 'Z900 RS', 'B 6285 WST', '7000', 'MERAH', '09.22', '2018', '', '', '310.000.000', '', '', 'Duren Tiga', '[\"uploads/847aa2ce-4938-4722-b964-5f0519513b5f.jpg\",\"uploads/7c7db3e3-d268-4237-8e37-33547162843e.jpg\",\"uploads/5f7b671b-2176-49fa-95b4-2e0bac3715e8.jpg\",\"uploads/ad1c85e9-9309-4e39-969d-bb17963784e3.jpg\",\"uploads/80ed9b12-9a5c-4b9e-92e1-7576642ce0ea.jpg\",\"uploads/55a81e48-2f5e-4a6b-8c48-0b5c3deea762.jpg\"]', 'Motor', '', 'WENDA', '', '', '', '', '', '', ''),
(28, 'Honda', 'ready', 'CBR 600', 'W 5393 NCL ', '1000', 'MERAH', '03.23', '2022', '', '', '520.000.000', '', '', 'kemang', '[\"uploads/d2a16d58-c2b8-49a7-a7ed-98895a2d2804.jpg\",\"uploads/dc754d73-9359-459f-9007-6ffe95f79467.jpg\",\"uploads/68d99c15-2e8e-4bd1-91a5-a10d5716c588.jpg\",\"uploads/b54bff62-30ae-403d-8a5e-966a716639e0.jpg\",\"uploads/52fa1862-4945-4018-af45-1e42c594694b.jpg\",\"uploads/ea91bcfc-33e9-4493-8260-cbb3856620bd.jpg\",\"uploads/07d7a690-a6bb-4ee2-83ef-6fb29ff28309.jpg\",\"uploads/d31ac573-110b-444b-82b2-afa18c714922.jpg\",\"uploads/ba9c567e-dfd5-4c54-8ba5-e93714830a32.jpg\",\"uploads/13f5a08c-6008-46a8-87b3-3c00351a3b2e.jpg\"]', 'Motor', '', 'RANDY', '', '', '', '', '', '', ''),
(29, 'Kawasaki', 'ready', 'Z900', 'B 4147 KYZ', '10.000 AN', 'HIJAU', '12.2022', '2017', 'Z900BE018767', 'JKAZR900BHDA26023', '220.000.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(30, 'Harley Davidson', 'ready', 'STREET 500', 'D 6771 AAA', '12.000 AN', 'HITAM', '02.2023', '2015', 'naaf506975', 'meg4naagfcn5076975', '177.000.000', '', '', 'kemang', '[]', 'Motor', '', 'HENDRA', '', '', '', '', '', '', ''),
(31, 'Kawasaki', 'sold', 'ZX636', 'B 5010 FGG', '1000 AN', 'HIJAU', '12.2022', '2021', 'zx636ee042654', 'jkbzx636gma016296', '350.000.000', '', '', 'bekasi', '[]', 'Motor', 'WENDA/RANDI', 'WENDA', '370.000.000', '', '1/10/2022', '', 'BCA BASUNANDA,CASH 350JT', 'YANTO', '0812-1887-656'),
(33, 'Kawasaki', 'booked', 'Z900', 'BN', '0', 'HITAM', 'BN', '2022', 'zr900be156889', 'ml5zr900fnda55662', '269.500.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(34, 'Ducati', 'ready', 'SCRAMBLER 4', 'DK 5437 FAD', '7000', 'ORANGE', '09.2023', '2016', 'ml04d0a2b000576', 'ml9ka00aagt000149', '166.500.000', '', '', 'bekasi', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(36, 'Kawasaki', 'ready', 'Z900', 'B 4923 SLI', '5000 AN', 'HITAM ', '06.2023', '2020', 'zr900be090710', 'Ml5zr900flda38217', '274.000.000', '', '', 'bsd', '[]', 'Motor', '', 'OZZY', '', '', '', '', '', '', ''),
(37, 'Yamaha', 'ready', 'XMAX', 'B 4778 KNM', '13.xxx', 'BIRU', '06.2023', '2019', 'g3h4e0027855', 'mh3sg3910kk025889', '42.000.000', '', '', 'Duren Tiga', '[\"uploads/9f8acdbe-8096-444a-957b-6ea098aab378.jpg\",\"uploads/4e58b506-1394-49a3-8e3f-9193f154b321.jpg\",\"uploads/7fd71820-7a46-4192-b494-92eb83f90c9b.jpg\",\"uploads/b9dd11cf-7fa8-49b4-9b82-b38ebff98581.jpg\",\"uploads/cdf9541a-5358-4440-a2b2-20d5d2cd7bef.jpg\",\"uploads/9399be70-222a-46e2-8918-7b57b740a20a.jpg\"]', 'Motor', '', 'WENDA', '', '', '', '', '', '', ''),
(38, 'Kawasaki', 'ready', 'ER6N', 'D 6758 LZ', '16.000', 'HIJAU', '10.2023', '2012', 'ER650AEAC3446', 'JKAER650ECDA12045', '67.000.000', '', '', 'Duren Tiga', '[\"uploads/5769f754-83bd-4b9b-b374-0f3db10aec52.jpg\",\"uploads/86152319-7642-416b-934a-45e5b502f024.jpg\",\"uploads/d7797757-7a65-4168-8321-8097b18c319d.jpg\",\"uploads/822f0cfa-cb31-49b4-a23b-5815e925564b.jpg\",\"uploads/1fef295d-7101-4e6e-af53-0ffc4a1fed6f.jpg\",\"uploads/0422d5c4-5ced-4d19-9d28-a7adc501b3f8.jpg\"]', 'Motor', '', 'JOKO', '', '', '', '', '', '', ''),
(39, 'Kawasaki', 'ready', 'ER6N', 'K 4905 SR', '20.000', 'HITAM', '03.2023', '2012', 'ER650AEACO460', 'JKAER650ECDA11129', '70.000.000', '', '', 'bsd', '[\"uploads/e649086c-52cd-4827-bf42-cfa4a08fab09.jpg\"]', 'Motor', '', 'JOKO', '', '', '', '', '', '', ''),
(40, 'Kawasaki', 'sold', 'ER6N', 'B 4395 KYY', '14.600', 'MERAH', '01.2023', '2012', 'ER650AEAD2220', 'JKAER650FCDA06678', '70.000.000', '', '', 'bsd', '[]', 'Motor', 'OJI', 'JOKO', '78.000.000', '', '9/10/2022', 'IG', 'TRF', 'BEN', '0858-4205-1041'),
(41, 'Harley Davidson', 'ready', 'FXDR', 'B 6729 TXE', '150', 'ORANGE', '07.2023', '2020', 'yvkl043427', 'mly1yvkg4ls043427', '600.000.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(42, 'Lain Lain', 'ready', 'TRIUMPH TIGER XR', 'B 6688 SUS', '2.XXX', 'HITAM', '06.2022', '2015', ' B734438 ', '', '280.000.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(43, 'Harley Davidson', 'ready', 'FATBOY', 'B 3983 UWG', '58', 'SILVER', '02.2022', '2020', 'YGKL045500', 'MLY1YGKG4LS045500', '', '', '', 'kemang', '[]', 'Motor', '', '', '', 'TITIP JUAL\r\n', '', '', '', '', ''),
(44, 'Kawasaki', 'ready', 'Z900', 'BK 5050 LAB', '22.000 AN', 'HITAM', '08.2023', '2014', 'zrt00de077470', 'jkazrt00gea005757', '270.000.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(46, 'Harley Davidson', 'ready', '48', 'D 2978 KX', '12.000 AN', 'SILVER', '06.2023', '2014', 'lc3e411805', 'mj71lc3c2ek411805', '410.000.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(47, 'Kawasaki', 'ready', 'Z1000 SUGOM', 'BN', '2', 'HIJAU ABU', 'BN', '2022', 'ZRT00DE160654', '', '395.000.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(48, 'Lain Lain', 'ready', 'BMW S1000RR', 'B 6899 BMW', '12000', 'PUTIH', '06.2023', '2014', '104ec05142236', 'wb10d0200ez400674', '375.000.000', '', '', 'kemang', '[]', 'Motor', '', 'HENDRA', '', '', '', '', '', '', ''),
(49, 'Ducati', 'booked', 'MONSTER 795', 'B 6796 ZLX', '19.000', 'MERAH', '03.2021', '2012', 'zdm796a2c000440', 'mgbm121aack000134', '168.000.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(50, 'Yamaha', 'sold', 'XJ6', 'B 5034 BJC', '14.000', 'PUTIH', '12.2022', '2010', 'j519e040563', 'jyarj195000018767', '155.000.000', '', '', 'kemang', '[]', 'Motor', 'HENDRA', 'HENDRA', '165.000.000', '', '5/10/2022', 'IG', 'BCA BASUNANDA', 'MIX DIMAS (CUST LOYAL)', '0812-1957-3388'),
(51, 'Honda', 'ready', 'CB650 NEO', 'B 6447 VVT', '1500', 'MERAH', '12.2022', '2021', 'rh01e6327096', 'mlhrh0292m5300799', '290.000.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(52, 'Harley Davidson', 'sold', 'FATBOY', 'L 3333 AD', '11.000', 'ORANGE', '02.2026', '2008', 'BX58010751', 'MJ71BX5468K010751', '390.000.000', '', '', 'kemang', '[]', 'Motor', 'HENDRA/SULTAN', 'RANDY', '400.000.000', '', '7/10/2022', 'IG', 'RTGS BCA BASUNANDA', 'BUDI', '0811-1144-426'),
(53, 'Ducati', 'ready', 'MULTISTRADA', 'B 6666 ESK', '2800', 'HITAM', '10.2022', '2020', 'ZDM1262VE001026', 'MLOAC03AAKT001253', '', '950.000.000', '', 'kemang', '[]', 'Motor', '', '', '', 'TITIP JUAL', '', '', '', '', ''),
(54, 'Lain Lain', 'ready', 'TRIUMPH SCR', 'B 4600 TXY', '5.000', 'HIJAU', '12.2022', '2017', 'G808073', 'smtdad786dh896251', '315.000.000', '', '', 'kemang', '[\"uploads/b05a474c-9960-4562-82cf-c0a8c54a5df2.jpg\",\"uploads/c1656661-a3af-4c83-9b45-ad994f43f549.jpg\",\"uploads/90c16b83-bd44-434c-a878-ff278e4b2978.jpg\",\"uploads/8012f0ff-3dc6-4088-acd9-a42825d2490b.jpg\",\"uploads/2dfef5c4-5c9b-4816-a9fb-6515f688c18d.jpg\",\"uploads/df680a46-694e-4cbd-8e09-c8e8b11ec661.jpg\",\"uploads/698908df-e451-4dd5-bf38-b9e4cbcd3bb0.jpg\",\"uploads/b29d834b-850c-40cc-af07-847889d7e9a9.jpg\",\"uploads/c0ee7863-ca1f-4233-b86f-d77664e40992.jpg\"]', 'Motor', '', 'CHARLIE', '', '', '', '', '', '', ''),
(55, 'Honda', 'ready', 'MONKEY', 'B 4276 SME', '', 'MERAH', '12.2021', '2020', 'JB02E2019406', 'MLHJB02AXK5010476', '85.000.000', '94.000.000', '93.000.000', 'Duren Tiga', '[\"uploads/21ec3df9-897d-4366-99ac-8457cbe2b06e.jpg\"]', 'Motor', '', '', '', 'KO IJEK', '', '', '', '', ''),
(57, 'Kawasaki', 'ready', 'Z125', 'DK 5863 FAW', '10.000', 'HITAM', '12.2022', '2017', 'AX125AEA29694', 'PO3317991O', '35.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(58, 'Honda', 'sold', 'MONKEY', 'B 3619 CRL', '0', 'KUNING', '05.2023', '2022', 'JB03E6008863', '70119888217', '95.000.000', '105.000.000', '102.000.000', 'Duren Tiga', '[]', 'Motor', 'DANANG', 'SULTAN', '97.000.000', '', '17/10/2022', 'WALK IN', 'TRF KE MANDIRI RANDY', 'FARIZ', '081297421188'),
(59, 'Honda', 'ready', 'SUPERCUB', 'B 3150 CPM', '100', 'MERAH', '09.2022', '2020', 'JA48E201159', 'MLHJA4894L5200055', '50.000.000', '', '', 'Duren Tiga', '[\"uploads/970c770a-3f0f-45a0-8cfc-626ba734b5b8.jpg\"]', 'Motor', '', 'UNYIL', '', '', '', '', '', '', ''),
(60, 'Honda', 'ready', 'CT125', 'B 4891 NKV', '0', 'MERAH', '08.2023', '2022', 'JA55E8000273', 'MLHJA5594N5300038', '85.000.000', '', '', 'durti', '[\"uploads/e9504cca-e09a-465b-84df-fdcb05455198.jpg\"]', 'Motor', '', 'SULTAN', '', '', '', '', '', '', ''),
(61, 'Honda', 'ready', 'CBR 250 ABS', 'F 6252 FFW', '5.000', 'MERAH', '06.2022', '2021', 'mc61e1000378', 'mh1mc6114mk000378', '54.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(62, 'Honda', 'ready', 'CBR 250 RR', 'B 4165 NFY', '11.000', 'MERAH', '09.2023', '2018', 'MC41E1006623', 'MHIMC4114JK008027', '41.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(63, 'Honda', 'ready', 'REBEL', 'DK 4123 ABG', '12.000', 'SILVER', '11.2023', '2018', 'pc56e2016848', 'mlhrc5692j6100224', '123.000.000', '', '', 'Duren Tiga', '[\"uploads/2f58ef2c-3dee-428e-8032-c58446ceba28.jpg\",\"uploads/b66809a4-09d0-4e4e-a929-6cd50fb9dd64.jpg\",\"uploads/6e228e9d-6532-44f0-9b81-92b1d710b1cd.jpg\",\"uploads/122ae42b-fe4f-442f-82bd-f796008f718f.jpg\",\"uploads/b4822ae3-b0ad-4c43-ad18-6cdb654a4697.jpg\",\"uploads/242e2250-d977-407e-9c41-b9fee3dad7d4.jpg\"]', 'Motor', '', 'CHARLIE', '', '', '', '', '', '', ''),
(64, 'Kawasaki', 'ready', 'Z800', 'B 3540 VIP', '15.000', 'ORANGE', '02.2023', '2014', 'zr800aea21518', 'jkbzr800beda07143', '157.500.000', '', '', 'bsd', '[\"uploads/cda3b904-6a7d-4ab4-ad7d-62fb20879bf2.jpg\",\"uploads/45f5c0d2-7a85-454a-93f5-b4e2a19ab425.jpg\",\"uploads/045b50f7-033c-4243-94d1-dd803e2aac7f.jpg\",\"uploads/2e4fc9d1-ad9a-45da-990f-a287ebaab688.jpg\",\"uploads/90a27e4d-0390-4696-9ddd-e924f901e2b0.jpg\"]', 'Motor', '', 'OJI', '', '', '', '', '', '', ''),
(65, 'Kawasaki', 'booked', 'ZX25', 'D 2727 YSF', '9500', 'BIRU', '03.2023', '2021', 'ZX250EEA06932', 'MH4ZX250GMJP01883', '102.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(66, 'Kawasaki', 'sold', 'ER6N', 'B 4931 NLJ', '23.000', 'HIJAU', '05.2023', '2012', 'JKAER650ECDA14349', 'ER650AEAD1497', '68.000.000', '', '', 'Duren Tiga', '[]', 'Motor', 'UNYIL', 'DANANG', '75.500.000', '', '9/10/2022', 'OLX', 'TRF KE MANDIRI RANDY', 'EKO', '0811-3666-609'),
(68, 'Yamaha', 'ready', 'R6', 'DT 4456 CQ', '5000 MPH', 'PUTIH', '01.2023', '2012', 'J516E030629', 'JYARJ16E5CA023314', '210.000.000', '', '', 'Duren Tiga', '[\"uploads/eb5599dc-a87e-4f95-978f-819c3cdb9a39.jpg\"]', 'Motor', '', 'HENDRA', '', '', '', '', '', '', ''),
(69, 'Honda', 'ready', 'REBEL', 'B 4013 NHT', '10.000', 'SILVER', '11.2022', '2017', 'mlhpc569xh5000270', 'pc56e2008584', '122.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(70, 'Harley Davidson', 'ready', 'STREET 500', 'AB 6412 BS', '5.000', 'HITAM', '09.2022', '2015', 'NAAF508318', 'MEG4NAAG6FN508318', '177.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(71, 'Kawasaki', 'ready', 'Z900 RS', 'B 6728 ZOQ', '3.000', 'COKLAT', '11.2022', '2018', 'zr900be054581', 'jkazr900cja023502', '300.000.000', '', '', 'kemang', '[\"uploads/3f88f196-e031-4ee0-a285-6372d52fadfe.jpg\",\"uploads/e56cd08a-3660-4b89-8d97-a30d456f5a54.jpg\",\"uploads/b8eef9f1-6583-4eaf-9331-4aa1b1f49376.jpg\",\"uploads/3f88f196-e031-4ee0-a285-6372d52fadfe.jpg\",\"uploads/e7eb4565-3769-48a2-ac82-3564d132fd86.jpg\",\"uploads/74d7a1bb-e93c-41c6-8769-b69678fd01cd.jpg\",\"uploads/e7e55344-a49a-41b0-91a0-f3cd935a99da.jpg\",\"uploads/3f7411b5-182a-41e5-893b-5c4779570885.jpg\",\"uploads/ee7e80c3-92bb-4fde-bdba-4556e4eccadf.jpg\",\"uploads/103295b9-16b5-4910-876a-707d1cea6df9.jpg\",\"uploads/b59d1208-f166-4df0-900d-5b63fc475ff7.jpg\",\"uploads/88f4d559-ba95-44f5-8179-c1b3c6696907.jpg\"]', 'Motor', '', 'CHARLIE', '', '', '', '', '', '', ''),
(72, 'Kawasaki', 'sold', 'Z800', 'B 6413 VPF', '8.000', 'HIJAU', '11.2022', '2013', 'zr800aea12313', 'jkbzr800bdda04230', '168.000.000', '', '', 'Duren Tiga', '[]', 'Motor', 'UNYIL', 'CHARLIE', '181.000.000', '', '6/10/2022', 'IG', 'TRF MANDIRI RANDY', 'OM IMEN', '0821-6751-948'),
(73, 'Piaggio', 'ready', 'SPRINT JB', 'BN', '0', 'PUTIH', '', '2022', '', '', '115.000.000', '', '', 'Duren Tiga', '[\"uploads/8d3cdca4-33ab-4447-b67f-497281687b51.jpg\"]', 'Motor', '', '', '', 'TITIP JUAL', '', '', '', '', ''),
(74, 'Harley Davidson', 'ready', 'street 500', 'B 6417 WZB', '7000', 'HITAM', '08.2022', '2015', 'NAAF506984', '70117933103', '178.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(75, 'Kawasaki', 'ready', 'VULCAN', 'BL 4988 NAB', '34.000', 'ABU ABU', '03.2023', '2015', 'er650aeam6514 ', 'jkaen650bfda07618 ', '100.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(76, 'Kawasaki', 'ready', 'Z900', 'B 4119 TSS', '8.000', 'ABU ABU', '10.2022', '2017', 'zr900be018999', 'jkazr900bhda27928', '216.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(77, 'Kawasaki', 'sold', 'Z800', 'B 3414 UDG', '30.000', 'HIJAU ', '10.2022', '2013', 'zr800aea11081', 'jkbzr800bdda03764', '150.000.000', '', '', 'Duren Tiga', '[]', 'Motor', 'DANANG/CARLI', 'CARLI', '175.000.000', '', '20/10/2022', 'IG', 'TT SCRAMBLER 160JT, TRF 15 JUTA', 'MALIQ', '0819-1902-1284'),
(78, 'Yamaha', 'ready', 'MT09', 'B 6282 JHU', '17.000', 'PERAK', '11.2021', '2015', 'n701e033586', 'jyarn2960f0913287', '268.625.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(79, 'Kawasaki', 'booked', 'ER6F', 'F 2156 RB', '21.000', 'MERAH', '09.2022Q', '2012', 'er650aea3732', 'jkaex650ecda08437', '57.900.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(80, 'Kawasaki', 'ready', 'ZX6R', 'L 6018 NX', '26.000', 'PUTIH', '09.2022', '2012', 'ZX600PEO661155', 'JKAZX600PEO66115', '175.000.000', '', '', 'Duren Tiga', '[\"uploads/979fb743-532c-4490-a258-9337d0e6bfed.jpg\",\"uploads/ede45f0f-793a-4baa-9149-ae85de0f2845.jpg\",\"uploads/7424dbbf-b1ea-4e87-b943-ff51d8d660ca.jpg\",\"uploads/65ecdd36-3cb5-4a7c-9d19-727d354a9f91.jpg\",\"uploads/698999ef-2f76-47fc-8336-bf88ace09f24.jpg\"]', 'Motor', '', 'CHARLIE', '', '', '', '', '', '', ''),
(81, 'Kawasaki', 'ready', 'ER6N', 'D 3276 ML', '5.000', 'MERAH', '12.2022', '2012', 'er650aeac3396', 'jkaer650ecda11995', '72.000.000', '', '', 'bekasi', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(82, 'Honda', 'ready', 'REBEL', 'T 6003 NA', '8.000', 'SILVER', '07.2023', '2017', 'PC56E2004443', 'MLHPC5698H500039', '122.000.000', '', '', 'bekasi', '[\"uploads/11897e07-f2cf-42e9-9442-40598dbcd5cc.jpg\"]', 'Motor', '', 'GARDA', '', '', '', '', '', '', ''),
(83, 'Yamaha', 'ready', 'MT25', 'B 6993 WUU', '8.000', 'BIRU', '11.2022', '2019', '6401e0088415', 'mh3rg1090kk001277', '39.000.000', '', '', 'bekasi', '[\"uploads/88fbde86-b9b9-4013-8811-260432f00ca9.jpg\"]', 'Motor', '', 'WENDA', '', '', '', '', '', '', ''),
(84, 'Honda', 'ready', 'CBR 250 REP', 'B 3089 CJR', '9.000', 'ORANGE', '06.2022', '2017', 'MC41E1003898', 'MH1MC4117HK005410', '46.000.000', '', '', 'bekasi', '[\"uploads/533f8219-7404-4846-a3e4-acb2484343bd.jpg\"]', 'Motor', '', '', '', '', '', '', '', '', ''),
(85, 'Kawasaki', 'ready', 'NINJA 250 F', 'B 3447 URT', '9.000', 'MERAH', '11.2023', '2018', '', '', '40.000.000', '', '', 'bekasi', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(86, 'Kawasaki', 'ready', 'ZX636', 'N 2795 KJ', '26.000', 'PUTIH', '02.2023', '2013', 'zx636ee006293', 'jkbzx636eda005668', '200.000.000', '', '', 'bekasi', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(87, 'Kawasaki', 'ready', 'Z900', 'B 3720 UNU', '7.000', 'ABU ABU', '05.2022', '2017', '', '', '260.000.000', '', '', 'bekasi', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(88, 'Kawasaki', 'booked', 'Z900', 'BN', '1', 'HITAM', 'BN', '2022', 'ZR900BE156309', 'ML5ZR900FNDA56021', '275.000.000', '', '', 'bekasi', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(89, 'Kawasaki', 'booked', 'Z900RS', 'BN', 'BN', 'HITAM', 'BN', '2022', 'ZR900BE154036', 'JKAZR900CNA062918', '322.000.000', '', '', 'bekasi', '[]', 'Motor', '', 'WENDA', '', '', '', '', '', '', ''),
(90, 'Kawasaki', 'ready', 'Z900RS', 'BM 6444 AAS', '3.000', 'HIJAU', '11.2022', '2018', 'zr900be041452', 'jkazr900eja000339', '315.000.000', '', '', 'bekasi', '[\"uploads/334d9396-21c1-4c50-ac08-22aeee328233.jpg\"]', 'Motor', '', 'JO', '', '', '', '', '', '', ''),
(91, 'Kawasaki', 'ready', 'VERSYS 650 ', 'AB 3053 ZN', '22.000', 'ORANGE', '08.2022', '2016', 'er650aear4295', 'Jkale650fgda12749', '148.500.000', '', '', 'bekasi', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(92, 'Kawasaki', 'ready', 'Z1000 SUGOM', 'BK 5050 LAB', '22.000', 'HITAM', '08.2023', '2014', 'zrt00de077470', 'jkazrt00gea005757', '270.000.000', '', '', 'bekasi', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(93, 'Harley Davidson', 'ready', 'STREET 500', 'D 4411 JG', '', 'HITAM', '', '2015', '', '', '', '', '', 'bekasi', '[\"uploads/e2882d37-00fe-45b5-9a66-2e9a3d18d266.jpg\"]', 'Motor', '', 'WENDA', '', '', '', '', '', '', ''),
(94, 'Kawasaki', 'booked', 'ER6N ', 'B 3944 NYW', '20.000', 'MERAH', '12.2021', '2012', 'er650aeab7366', 'jkaer650ecda10403', '60.500.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(96, 'Kawasaki', 'ready', 'Z650', 'AB 6851 HB', '16.000', 'HIJAU', '05.2023', '2016/2018', 'er650aeat3692', 'jkaer650hgda04321', '125.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(97, 'Kawasaki', 'ready', 'N250', 'B 3765 EMC', '18.000', 'HIJAU', '03.2023', '2018', 'EX250PEA03710', 'MH4EX250VJJP00444', '40.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(98, 'Kawasaki', 'booked', 'NINJA 1000 ', 'DB 5555 MN', '10.000', 'HIJAU', '11.2022', '2013', 'ZRT00DE058728', '', '192.000.000', '', '', 'bsd', '[\"uploads/1e8a3bbd-baba-4731-b772-51adcfb78fd7.jpg\"]', 'Motor', '', 'OJI', '', '', '', '', '', '', ''),
(99, 'Yamaha', 'ready', 'XMAX', 'W 2915 RD', '4000', 'COKLAT', '10.2022', '2017', 'G3H4E0004799', 'MH3SG3910HK004765', '38.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(100, 'Piaggio', 'ready', 'SPRINT JB', 'BN', 'BN', 'PUTIH', 'BN', '2022', '', '', '115.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(101, 'Piaggio', 'ready', 'VESPA ANNIV', 'L 2010 IM', '86', 'GOLD', '11.2022', '2021', 'm8z8m5116749', 'rp8m82222mu024784', '65.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(102, 'Honda', 'sold', 'REBEL', 'DK 3925 LZ', '6000', 'HITAM', '07.2022', '2017', 'PC56E2004441', 'MLHPC5694h5000037', '123.000.000', '', '', 'bsd', '[]', 'Motor', 'ADLI', 'GARDA', '134.900.000', '', '2/10/2022', 'CUST LAMA', 'BCA ILHAM', 'YAYAT', '0857-1669-1141'),
(103, 'Harley Davidson', 'sold', 'STREET 500', 'B 3259 PBG', '11.000', 'HITAM', '11.2021', '2015', 'naaf506292', 'meg4naag4fn506292', '', '', '', 'bsd', '[]', 'Motor', 'OJI', '', '192.000.000', '', '4/10/2022', 'IG', 'CASH,TF, BLIBLI', 'DODI', '0811-697-828'),
(104, 'Yamaha', 'ready', 'MT09', 'B 4923 NBA', '24.000', 'SILVER', '03.2023', '2015', 'N701E034568', 'JYARN2960F0013389', '245.000.000', '', '', 'bsd', '[\"uploads/dc6012a9-8a6d-4f67-8aab-2fee71839c05.jpg\",\"uploads/f01633c9-c53b-42f6-9c24-5a4e3c5c6ef5.jpg\",\"uploads/0ee9fd63-f7c1-4c66-867e-b4931bceb6ee.jpg\",\"uploads/dc6012a9-8a6d-4f67-8aab-2fee71839c05.jpg\",\"uploads/f01633c9-c53b-42f6-9c24-5a4e3c5c6ef5.jpg\",\"uploads/0ee9fd63-f7c1-4c66-867e-b4931bceb6ee.jpg\",\"uploads/35b80299-d662-4ba3-bf8e-c5f46128ca2e.jpg\",\"uploads/688da08a-8b71-468a-9303-f69c88d654f5.jpg\"]', 'Motor', '', '', '', '', '', '', '', '', ''),
(105, 'Yamaha', 'ready', 'TMAX', 'B 5000 TMX', '9000', 'HITAM', '08.2023', '2018', 'J415e028938', 'Jyasj1450j0015937', '272.500.000', '', '', 'bsd', '[\"uploads/b344796d-1384-4718-983d-9d57eb792b0c.jpg\"]', 'Motor', '', 'ADLI', '', '', '', '', '', '', ''),
(106, 'Kawasaki', 'sold', 'Z900', 'BN', 'BN', 'HITAM', 'BN', '2022', 'ZR900BE158044', 'ML5ZR900FNDA55993', '277.000.000', '', '', 'bsd', '[]', 'Motor', 'OJI', 'YANDRI', '295.000.000', '', '7/10/2022', 'IG', 'TRF BCA BASUNANDA', 'USEP', '0812-8207-5664'),
(107, 'Kawasaki', 'ready', 'Z900', 'B 6969 FF', '600', 'HITAM', '08.2022', '2019', 'ZR900BE077195', 'JKAZR900BKDA35834', '300.000.000', '', '', 'bsd', '[\"uploads/777b6813-c2fc-44e6-81da-6d0296abe4fc.jpg\"]', 'Motor', '', 'GARDA', '', '', '', '', '', '', ''),
(108, 'Kawasaki', 'ready', 'Z1000 SUGOM', 'AG 2041 RDM', '15.000', 'HITAM', '03.2023', '2014/2015', 'JKAZRT00GEA005758', 'ZRT00DE077468', '300.000.000', '', '', 'bsd', '[\"uploads/d363838c-f905-41b5-967d-9c109fafd6e0.jpg\"]', 'Motor', '', 'OJI', '', '', '', '', '', '', ''),
(109, 'Ducati', 'ready', 'V4 S', 'B 4350 SNZ', '1900', 'MERAH', '08.2022', '2019', 'ZDM1100W4008939', 'ML0DAOOAAKT000835', '1.045.000.000', '', '', 'bsd', '[\"uploads/f66461f0-2ca3-40f3-91f3-e020351c5cc1.jpg\"]', 'Motor', '', 'GARDA', '', '', '', '', '', '', ''),
(110, 'Kawasaki', 'ready', 'ZX6R', 'DK 5906 JA', '19.000', 'MERAH', '04.2023', '2011', 'zx600pe062729', 'jkazx600rba033525', '159.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(111, 'Kawasaki', 'ready', 'Z900', 'D 4848 FMH', '12.500', 'MERAH', '07.2023', '2018', 'ZR900BE034112', 'JKAZR900BJDA30835', '211.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(112, 'Kawasaki', 'ready', 'N250', 'A 6725 VE', '7000', 'MERAH', '07.2022', '2017', '', '', '35.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(113, 'Kawasaki', 'booked', 'Z900 RS', 'B 5811 TJD', '1000', 'HIJAU', '11.2022', '2021', '', '', '338.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(114, 'KTM', 'ready', 'RC 390', 'B 4180 FRG', '4000', 'ORANGE', '09.2022', '2019', '', '', '60.000.000', '', '', 'bsd', '[\"uploads/b7080aaf-1118-41a5-a2d0-0c1274ac33be.jpg\"]', 'Motor', '', 'WENDA', '', '', '', '', '', '', ''),
(115, 'Kawasaki', 'ready', 'ZX25 ABS', 'BP 6878 QK', '1700', 'ABU ABU', '02.2023', '2022', 'ZX25EEA13883', 'MH4ZX250JNJPO4741', '101.000.000', '', '', 'bsd', '[\"uploads/2c8e9350-6e48-41bf-8d2f-f73132e13b0d.jpg\"]', 'Motor', '', 'JOKO', '', '', '', '', '', '', ''),
(116, 'Kawasaki', 'sold', 'VULCAN', 'D 2112 KWL', '13.000', 'ABU ABU', '07.2023', '2015', 'ER650AEAE9047', 'JKAEN650EFDA03596', '120.000.000', '', '', 'bsd', '[]', 'Motor', 'OJI', 'JOKO', '135.000.000', '', '6/10/2022', 'IG', 'MANDIRI RANDY', 'EDI', '0851-0047-2112'),
(117, 'Kawasaki', 'sold', 'VULCAN', 'KT 5438 YH', '13.000', 'ABU ABU', '01.2023', '2016', 'ER650AEAR3045', 'JKAE650BGDA15210', '115.000.000', '', '', 'Duren Tiga', '[]', 'Motor', 'ADLI', 'JOKO', '133.000.000', '', '13/10/2022', 'IG', 'MANDIRI RANDY', 'FAJAR', '0812-8713-0320'),
(118, 'Kawasaki', 'ready', 'N1000 SX', 'F 2545 IH', '13.000', 'HIJAU', '11.2022', '2013', 'ZRT00DE059018', 'JKAZXTOOMDA000850', '186.500.000', '', '', 'kemang', '[\"uploads/56ec36ff-aa12-4deb-a550-b9449e41c74e.jpg\",\"uploads/b7df2456-6894-427c-b76d-ed337b91026d.jpg\",\"uploads/f0ef755c-c5cc-42c6-97af-856ce83c0c8d.jpg\",\"uploads/33a23479-73e7-4ed2-b148-31551500d75a.jpg\",\"uploads/b41532ca-7c5b-42d3-9b71-abb6de2bca1e.jpg\",\"uploads/cfb108dc-c41d-4eab-a5c0-62b44a491673.jpg\",\"uploads/a1e9e621-ad40-43be-b3e4-3ca020544d9f.jpg\",\"uploads/eefa6228-0523-4686-9ca7-84b9e1e7c03f.jpg\"]', 'Motor', '', 'GARDA', '', '', '', '', '', '', ''),
(119, 'Ducati', 'ready', 'DIAVEL ', 'DK 4889 GBH', '6.000', 'HITAM MERAH', '05.2023', '2013', 'ZDM1198WD014298', 'MGBM161AADK000005', '255.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(120, 'Kawasaki', 'ready', 'ER6N ', 'B 6031 UWV', '4000', 'KUNING', '06.2021', '2012', 'er650aeab1005', 'jkaer650ecda09063', '63.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(121, 'Ducati', 'ready', 'PANIGALE', 'N 6490 BJ', '11.000', 'MERAH PUTIH', '11.2023', '2013', 'ZDM1198WE007009', 'MGBH1161AADK000022', '360.000.000', '', '', 'bsd', '[\"uploads/a18dacfa-279f-4a29-a3ee-6de959905c6f.jpg\",\"uploads/a6fd250b-4821-45a0-b440-e9cb6ed9a704.jpg\",\"uploads/cecba5b9-cdcb-4768-9aef-97600fc11ff3.jpg\",\"uploads/342a4a71-ecae-45ca-9265-d09836490d82.jpg\",\"uploads/8d367486-6302-4810-b973-12ed0b912541.jpg\",\"uploads/86a2163c-9c17-4e55-ba1e-0a893302c2b1.jpg\",\"uploads/4d9858a5-7d04-45cb-b19e-f2c0345d1449.jpg\",\"uploads/b9d3819e-6906-4e22-8108-bf8f4122ef0a.jpg\",\"uploads/c6d763e6-4cb1-4b45-81ba-3fc590c17c29.jpg\",\"uploads/f0009441-6d50-4b95-8f42-d057e4bc57a9.jpg\",\"uploads/89fc57f9-de27-435c-836c-b34402d7b0dd.jpg\",\"uploads/10ba778b-0654-4525-aedc-ef383f9597da.jpg\"]', 'Motor', '', '', '', '', '', '', '', '', ''),
(122, 'Kawasaki', 'ready', 'ER6N', 'B 4352 NAC', '9000', 'HIJAU', '11.2022', '2012', 'ER650AEAC3488', 'JKAER650ECDA12087', '67.500.000', '', '', 'bsd', '[\"uploads/51c98f39-cd38-4833-8e8c-c152d8c5909b.jpg\",\"uploads/55f33ac7-700e-4ce4-ba16-d52594d580b2.jpg\",\"uploads/8da16afa-5bca-4a70-ac36-2901f912fc1e.jpg\",\"uploads/bb3269a3-a472-4fa2-8328-d48f74b6d506.jpg\",\"uploads/3d583e9d-de4b-4212-bd3a-18c2741a9a09.jpg\"]', 'Motor', '', 'ADLI/ JO', '', '', '', '', '', '', ''),
(123, 'Ducati', 'sold', 'MONSTER 795', 'B 4389 KPV', '4.000', 'KUNING', '08.2023', '2012', 'ZDM796A2C000918', 'MGBM121AACK000178', '165.000.000', '', '', 'bsd', '[]', 'Motor', 'HEND/GARD', 'GARDA', '177.000.000', '', '15/10/2022', 'IG', 'CASH', 'RITA', '0812-8904-8968'),
(124, 'Kawasaki', 'sold', 'ER6N', 'B 3437 TRK', '13.000', 'HITAM', '11.2022', '2012', 'JKAER650ECDA', 'ER650AEAC3307', '63.000.000', '', '', 'Duren Tiga', '[]', 'Motor', 'CARLI', 'UNYIL', '74.000.000', '', '10/10/2022', 'WALK IN', 'BCA, CASH', 'HENDRA', '0857-1692-0999'),
(125, 'Honda', 'ready', 'CBR 600', 'B 4728 KZO', '500', 'MERAH', '08.2023', '2021', '', '', '480.000.000', '', '', 'bsd', '[\"uploads/59b96d58-2f5d-4da8-9e30-74c55d0ef0a4.jpg\"]', 'Motor', '', 'RANDY', '', '', '', '', '', '', ''),
(126, 'Ducati', 'ready', 'DUCMON 696', 'B 6000 ZF', '11.000', 'PUTIH', '12.2022', '2009', 'ZDM696A2015441', 'ZDMM500AA9B018298', '123.000.000', '', '', 'Duren Tiga', '[\"uploads/8c192fc6-bccf-467f-9b18-2b007f601e0d.jpg\",\"uploads/5619651b-2554-4263-a122-15d61eb978d3.jpg\",\"uploads/e4faf143-e213-460e-ac9a-db7b6e6bdc86.jpg\",\"uploads/29effaf8-4a4f-4f9d-a2b2-dc26de728449.jpg\",\"uploads/8222ed78-94be-4eb0-a5ed-a1f4ea2ba682.jpg\",\"uploads/7c92dcff-10c3-491d-aa1e-d616f401fb53.jpg\"]', 'Motor', '', 'UNYIL', '', '', '', '', '', '', ''),
(127, 'Lain Lain', 'ready', 'BMW C400', 'B 4836 SLY', '21.000', 'BIRU', '11.2023', '2018', 'A81A03A44', 'WB40C0905KSB40163', '170.000.000', '', '', 'kemang', '[\"uploads/64e1ea3a-069a-4d80-b89d-51b2bee5eb28.jpg\",\"uploads/f03f6d99-fd3c-43aa-94c4-270255247653.jpg\",\"uploads/bdd4c9a5-628b-45f5-8eff-450e927646fb.jpg\",\"uploads/d24c2b22-b812-4def-b271-0a2fbd6939da.jpg\",\"uploads/2abb15ad-9c98-4eda-9903-f36277e31426.jpg\",\"uploads/f7e6fc22-e84c-4dd6-ba59-ff9d83192ba0.jpg\",\"uploads/bce710a5-69a0-4baf-b832-7d5896473869.jpg\",\"uploads/6f8e824a-7a4c-43b0-8708-6190f8327a4f.jpg\",\"uploads/5fec3f4e-dd19-47c7-853c-56ba0bbea12e.jpg\",\"uploads/3a711700-d44b-4846-b92a-7d09c365e7b9.jpg\",\"uploads/f22a895b-40a4-4de8-9d86-97d7333a2dc6.jpg\"]', 'Motor', '', 'JOKO', '', '', '', '', '', '', ''),
(128, 'Lain Lain', 'ready', 'BMW S1000RR', 'B 6863 UUX', '4000', 'BIRU PUTIH', '', '2011', '', '', '475.000.000', '', '', 'kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(129, 'Ducati', 'ready', 'MONSTER 795', 'B 3032 SLC', '16.000', 'MERAH', '10.2023', '2013', 'Zdm796a2c001876', '', '155.000.000', '', '', 'bsd', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(130, 'Ducati', 'ready', 'PANIGALE', 'B 3796 FWM', '9000', 'MERAH PUTIH', '10.2023', '2013', 'ZDM1198WEOC8878', 'MGBH161AADK000040', '357.500.000', '', '', 'bsd', '[\"uploads/c386258b-dabc-4224-808d-d4f66c4046bd.jpg\"]', 'Motor', '', 'GARDA', '', '', '', '', '', '', ''),
(131, 'Ducati', 'sold', 'PANIGALE', 'B 3137 GP', '5000', 'RED CARBON', '02.2023', '2012', 'zdm1198we006759', 'mgbh161aack000034', '300.000.000', '', '', 'kemang', '[]', 'Motor', 'HENDRA', 'HENDRA', '350.000.000', '', '9/10/2022', 'IG', 'CASH', 'RITA (CUST LOYAL)', '0812-8904-8968'),
(132, 'Kawasaki', 'sold', 'ZX10', 'B 5367 TAV', '2.000', 'HIJAU', '02.2023', '2018', 'ZXT00JE038434', 'JKAZXT00SJA016152', '483.000.000', '', '', 'kemang', '[]', 'Motor', 'SULTAN', 'CHAR/UNYIL', '483.000.000', '', '12/10/2022', 'WALK IN', 'BCA BASUNANDA ', 'SHAMIR YAMIN', '0817-797-239'),
(133, 'Kawasaki', 'sold', 'ER6N', 'B 6571 VVG', '19.000', 'HIJAU', '09.2023', '2012', 'ER650AEAA0040', 'JKAER650ECDA06007', '64.000.000', '', '', 'bsd', '[]', 'Motor', 'GARDA', 'GARDA', '75.000.000', '', '15/10/2022', 'WALK IN', 'KREDIT TDP 27.173.000', 'VIKTOR', '0878-8303-6177'),
(134, 'Harley Davidson', 'sold', 'STREET 500', 'H 4550 BAG', '2000', 'HITAM', '03.2023', '2015', 'naaf507881', 'meg4naag6fn507881', '170.000.000', '', '', 'kemang', '[]', 'Motor', 'HENDRA', 'HENDRA', '196.000.000', '', '19/10/2022', 'IG', 'TRF MANDIRI', 'BENRY SILALAHI', '0818-0395-5588'),
(135, 'Kawasaki', 'sold', 'N250', 'B 3699 EOK', '11.000', 'MERAH', '04.2023', '2018', 'ex250pea05099', 'mh4ex250sjjp01592', '40.000.000', '', '', 'Duren Tiga', '[]', 'Motor', 'CARLI', 'CARLI', '48.000.000', '', '16/10/2022', 'IG', 'BCA BASUNANDA', 'ENGGI', '0859-6037-2910'),
(136, 'Yamaha', 'ready', 'XMAX', 'T 4567 CH', '13.000', 'BIRU', '01.2023', '2018', 'g3h4e0049422', 'mh3sg3920mk003967', '41.000.000', '', '', 'bekasi', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(137, 'Kawasaki', 'sold', 'Z900', 'B 4666 UAE', '300', 'HITAM', '10.2023', '2022', 'zr900be157217', 'ml5zr900fnda55670', '325.000.000', '', '', 'kemang', '[]', 'Motor', 'YANDRI', 'CARLI', '350.000.000', '', '16/10/2022', 'CUST RO', 'BCA BASUNANDA, CASH DOLLAR', 'OM WIN', '0812-1860-8314'),
(138, 'Kawasaki', 'ready', 'ER6N', 'D 2084 PD', '18000', 'HITAM', '04.2023', '2012', 'ER650AEA95801', 'JKAER650ECDA05965', '67.000.000', '', '', 'bsd', '[\"uploads/6b09b062-b54a-4eef-8e01-cc297755e41e.jpg\",\"uploads/839b74fa-cb67-4719-893b-bf743e61a116.jpg\",\"uploads/e9e07bc6-8290-441a-9208-fc6ce87a9856.jpg\",\"uploads/7cd5a8df-3d64-419b-b059-e32e9ff244be.jpg\",\"uploads/af012ba1-ea66-4194-9cf0-bb767a64d1a4.jpg\"]', 'Motor', '', 'JOKO', '', '', '', '', '', '', ''),
(142, 'Kawasaki', 'ready', 'N250 ABS', 'B 4798 SLK', '2000', 'HITAM', '07.2023', '2020', 'EX250PEA21916', 'MH4EX250WLJP01673', '47.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(143, 'Kawasaki', 'ready', 'ER6N', 'B 4411 UUU', '15.000', 'HITAM', '08.2023', '2012', 'JKAER650ECDA14284', 'ER650AEAD1432', '75.000.000', '', '', 'Duren Tiga', '[\"uploads/a6a8c2b7-ed2f-4af8-9c9e-14bc420aab8c.jpg\",\"uploads/1be27648-f29d-4252-99df-fa6a007b20ba.jpg\",\"uploads/b81d582f-9cbd-4873-b9b1-3e38b644a5d1.jpg\",\"uploads/4ffb692a-4e82-470a-a521-05d4959500e9.jpg\",\"uploads/851e7c91-2294-4b53-bdcd-299a5cef5945.jpg\",\"uploads/cdf2ffd8-00c9-477c-a351-0335e5f82ed3.jpg\"]', 'Motor', '', 'DENNY', '', '', '', '', '', '', ''),
(144, 'Kawasaki', 'booked', 'VULCAN', 'B 4902 NLS', '4000', 'HITAM', '08.2023', '2019', 'ER650AEX95815', 'JKAEN650DKDA18541', '135.000.000', '', '', 'BSD', '[\"uploads/b35c0b51-9b4b-4cdf-ae1e-181540a6c916.jpg\",\"uploads/1c917c1f-2000-49b4-853b-81700535eacf.jpg\",\"uploads/061fd5b8-71dc-4b6a-b0de-85d9833c41fd.jpg\",\"uploads/4412070a-e41b-44ec-bdc4-ea9834e4e77b.jpg\",\"uploads/c1e6fdef-afaf-4082-823f-8bdc354d0bf7.jpg\"]', 'Motor', '', 'OJI', '', '', '', '', '', '', ''),
(145, 'Kawasaki', 'booked', 'N650', 'AD 5454 BGE', '6.000', 'HIJAU', '12.2023', '2017', 'ER650AEAW4321', 'JKAEX650KHDA05715', '100.000.000', '', '', 'BSD', '[\"uploads/3b5d0eb1-449c-47a0-a689-73deb6f2eaad.jpg\",\"uploads/23ba3af7-cf59-4105-bba0-0bbddc899506.jpg\",\"uploads/db4f21a1-dfb5-479b-9aac-a53ceafdc40a.jpg\",\"uploads/e9c8707c-8889-4ec9-8e1d-5ace959d0fde.jpg\",\"uploads/0a3319bd-d50f-4264-8269-328366554af9.jpg\"]', 'Motor', '', 'JOKO', '', '', '', '', '', '', ''),
(146, 'Ducati', 'ready', 'SF 848', 'B 3804 NYX', '19.000', 'MERAH', '11.2022', '2012', 'ZDM848WAC000276', 'MGBF131AACK000015', '173.000.000', '', '', 'BSD', '[\"uploads/2ef78111-6826-46e2-8d07-c46ff98ef8f8.jpg\",\"uploads/57134d67-78ef-4de4-9f86-67b60fa45af0.jpg\",\"uploads/126f32a6-7be0-4c56-9e00-e5ea1bcf2910.jpg\",\"uploads/d2027cc3-2eee-4e97-a73a-2ef2438ac922.jpg\",\"uploads/7306bd6f-a06b-496b-98ba-8a35a440e348.jpg\",\"uploads/d2027cc3-2eee-4e97-a73a-2ef2438ac922.jpg\"]', 'Motor', '', 'JOKO', '', '', '', '', '', '', ''),
(147, 'Kawasaki', 'ready', 'ER6N', 'B 3823 CSI', '11.000', 'HITAM', '08.2023', '2012', 'ER650AEAD1465', 'JKAER650ECDA14317', '70.000.000', '', '', 'Duren Tiga', '[\"uploads/00d6a21c-d901-4b54-9eb3-a693d4405e21.jpg\",\"uploads/68f5b5a0-de5f-4d9d-b630-a7e64e93f243.jpg\",\"uploads/858d9d14-ef45-4312-885a-ca20e0ad4878.jpg\",\"uploads/44778bc3-9922-4d74-8868-3cffcc423be5.jpg\",\"uploads/ae6aca45-b800-4bb7-ad07-63efae1c71c1.jpg\",\"uploads/f198a449-4579-48fc-8c60-7c3911f2358a.jpg\"]', 'Motor', '', 'GARDA', '', '', '', '', '', '', ''),
(148, 'Yamaha', 'ready', 'TMAX DX', 'B 4001 SKI', '7.000', 'BIRU', '12.2022', '2018', '', '', '275.000.000', '', '', 'Kemang', '[\"uploads/8565c525-f013-4d1d-b15b-29c21130af5c.jpg\",\"uploads/975150a0-e34a-416a-82e6-55977f3bf573.jpg\",\"uploads/de01ef7b-eeb9-46cf-a338-5bb757ac5a0d.jpg\",\"uploads/ff9a1ee0-5f74-477b-9b9b-91136057fe6f.jpg\",\"uploads/c190db29-4657-4d27-995f-4a362e173609.jpg\",\"uploads/3321f564-bdab-4400-bdee-557145429111.jpg\",\"uploads/c11811d0-66e3-412b-8468-8c9f1ad8397c.jpg\",\"uploads/ec599fac-d9c9-47be-ba66-349d6b754149.jpg\",\"uploads/bb155809-46f4-4f99-85ba-dfc5a73ff43e.jpg\",\"uploads/d7f72ca7-393e-40d7-b1d4-42659d0d7040.jpg\"]', 'Motor', '', 'YANDRI', '', '', '', '', '', '', ''),
(149, 'Honda', 'sold', 'CB650R NEO', 'BN', 'BN', 'HITAM', 'BN', '2022', 'RHO1E-6327596', 'MLHRH0294N5401053', '289.406.000', '', '', 'Duren Tiga', '[]', 'Motor', 'SULTAN', 'JO/UNYIL', '307.000.000', '', '19/10/2022', 'REFERENSI', 'TRF BCA', 'TAUFIK', '0812-6744-4453'),
(150, 'Kawasaki', 'ready', 'Z800', 'DK 4677 ACI', '24.000', 'ORANGE', '03.2023', '2013', 'ZR800AEA12222', 'JKBZR800BDDA04139', '162.000.000', '', '', 'BSD', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(151, 'Ducati', 'ready', 'MONSTER 795', 'D 6969 OJ', '18.000', 'MERAH', '07.2017', '2012', 'ZDM796AC000084', 'MGBM121AACK000078', '135.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(152, 'Kawasaki', 'ready', 'Z800', 'B 6981 ZLR', '19.000', 'MERAH', '11.2022', '2013', 'ZR800AEA14581', 'JKBZR800BDDA04378', '166.000.000', '', '', 'Kemang', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(153, 'Honda', 'ready', 'REBEL', 'B 4417 NID', '5.000', 'HITAM', '08.2023', '2019', 'PC56E2210281', 'MLHPC5696K5200148', '135.000.000', '', '', 'BSD', '[\"uploads/e0c6c06e-29ab-493f-a7b8-64e51e46608b.jpg\",\"uploads/c48b3984-dfcd-4077-8d48-34927440bcf8.jpg\",\"uploads/98f1a5fc-4161-47f5-8826-30e8dd8c7ff7.jpg\",\"uploads/d12bf937-e95a-4eda-8e24-dc02b998f2d3.jpg\",\"uploads/e5cd4457-4412-4bef-bca1-9c5a6f77dd51.jpg\"]', 'Motor', '', 'ADLI/WENDA', '', '', '', '', '', '', ''),
(154, 'Kawasaki', 'ready', 'ZX25', 'B 3462 UZW', '19', 'HIJAU KRT', '08.2023', '2022', 'ZX250EEA24075', 'MH4ZX250OGNJP06475', '100.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(155, 'Ducati', 'ready', 'SCRAMBLER ', 'AB 5314 JK', '13.000', 'ORANGE', '07.2022', '2016', 'ML0400A2B003474', 'ML0KA00AHT001606', '160.000.000', '', '', 'Duren Tiga', '[]', 'Motor', '', '', '', '', '', '', '', '', ''),
(157, 'APRILIA', 'ready', 'SR GT 200', '', '100', 'HITAM', 'PROSES', '2022', '', '', '', '', '', 'Duren Tiga', '[\"uploads/05db0ce4-14d6-4ff9-bd86-2605119ed9aa.jpg\"]', 'Motor', '', '', '', 'TITIP JUAL', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(110) NOT NULL,
  `notif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `notif`) VALUES
(1, 'aasdasdasdasdsdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(110) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(11) NOT NULL,
  `nama` varchar(111) NOT NULL,
  `last_login` varchar(110) NOT NULL,
  `device_name` longtext NOT NULL,
  `is_login` varchar(100) NOT NULL,
  `photo` longtext NOT NULL,
  `device_id` varchar(110) NOT NULL,
  `status_device` varchar(110) NOT NULL,
  `notif` varchar(1100) NOT NULL,
  `status_notif` varchar(110) NOT NULL,
  `judul_notif` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `nama`, `last_login`, `device_name`, `is_login`, `photo`, `device_id`, `status_device`, `notif`, `status_notif`, `judul_notif`) VALUES
(1, 'admin', 'admin', 'admin', 'Admin RNJ', '2022-09-23 05:42:00', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '1', '[\"uploads/Screenshot (1).png\"]', '4873ad3c-7a13-4b0e-b74a-7bf51cb41df7', '1', 'Semangay {nama} untuk hari ini nya', '1', 'Hai'),
(41, 'tamami', 'tamami', 'admin', 'tamami', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '1', '[\"uploads/576ffed2-2de7-4ec5-83f9-d1f69192fd4c.jpg\"]', '99ea7743-09c5-407e-8b6b-11be9981deaf', '1', 'Semangay {nama} untuk hari ini nya', '1', 'Hai'),
(42, 'nanda', 'nanda', 'marketing', 'nanda', '', 'Mozilla/5.0 (Linux; Android 12; M2012K11AG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Mobile Safari/537.36', '1', '[\"uploads/WhatsApp Image 2022-06-09 at 17.07.11.jpeg\"]', '42c490ee-bb30-422a-8827-a1ee3be0d188', '1', 'Semangay {nama} untuk hari ini nya', '1', 'Hai'),
(43, 'abdul', 'abdul', 'admin', 'abdul', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '1', '[\"uploads/b8d22a4eafe90a3305109f37b9b4f66d.jpg\"]', 'c2a3c0cb-59c9-4a7d-97c8-e0d98c332509', '1', 'Semangay {nama} untuk hari ini nya', '1', 'Hai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan_model`
--
ALTER TABLE `penjualan_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
