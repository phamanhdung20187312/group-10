

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `admin` (
  `ma_admin` int(11) NOT NULL,
  `ten_admin` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email_admin` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;



INSERT INTO `admin` (`ma_admin`, `ten_admin`, `email_admin`, `pass`) VALUES
(1, 'admin1', 'libadmin@hust.edu.vn', '123'),
(5, 'admin2', 'libadmin2@hust.edu.vn', 'xyz');

-- --------------------------------------------------------



CREATE TABLE `danh_muc` (
  `ma_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;



INSERT INTO `danh_muc` (`ma_danh_muc`, `ten_danh_muc`) VALUES
(1, 'Art'),
(2, 'Fiction'),
(3, 'Language'),
(4, 'Science & Mathematics'),
(5, 'Business & Finance'),
(6, 'Children’s'),
(7, 'History'),
(8, 'Health & Wellness'),
(9, 'Biography'),
(10, 'Social Sciences');



CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `thoi_gian_mua` date DEFAULT NULL,
  `ten_nguoi_nhan` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt_nguoi_nhan` char(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngay_tra_sach` date NOT NULL,
  `tinh_trang_hoa_don` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;


INSERT INTO `hoa_don` (`ma_hoa_don`, `ma_khach_hang`, `thoi_gian_mua`, `ten_nguoi_nhan`, `sdt_nguoi_nhan`, `ngay_tra_sach`, `tinh_trang_hoa_don`) VALUES
(4, 11, '2020-10-11', 'donk', '123456789', '2020-10-25', 0);


CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;



INSERT INTO `hoa_don_chi_tiet` (`ma_hoa_don`, `ma_sp`, `so_luong`, `gia`) VALUES
(4, 37, 1, 0);



CREATE TABLE `kh` (
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;



INSERT INTO `kh` (`ma_kh`, `ten_kh`, `sdt`, `dia_chi`, `email`, `pass`) VALUES
(11, 'Z', '987654321', '20187322', 'kophaiadmin@mail.com', '1234');


CREATE TABLE `sp` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `danh_muc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO `sp` (`ma_sp`, `ten_sp`, `img`, `gia`, `danh_muc`) VALUES
(37, '365 Days of Art', '1589545847.jpeg', 0, 1),
(38, 'Where the Forest Meets the Stars', '1589545928.jpeg', 0, 2),
(39, 'IELTS 14 General Training', '1589546359.jpeg', 0, 3),
(40, 'The Science Book', '1589546440.jpeg', 0, 4),
(41, 'Mind Your Business', '1589546561.jpeg', 0, 5),
(42, 'School Mathematics', '1589546660.jpeg', 0, 4),
(43, 'Teach Your Child', '1589546744.jpeg', 0, 6),
(44, 'History of the World', '1589546810.jpeg', 0, 7),
(45, 'Life and Health', '1589546886.jpeg', 0, 8),
(46, 'Leonardo da Vinci', '1589547023.jpeg', 0, 9),
(47, 'Advanced Social Psychology', '1589547111.jpeg', 0, 10);



ALTER TABLE `admin`
  ADD PRIMARY KEY (`ma_admin`);


ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma_danh_muc`);


ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);


ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`ma_hoa_don`,`ma_sp`),
  ADD KEY `ma_sp` (`ma_sp`);


ALTER TABLE `kh`
  ADD PRIMARY KEY (`ma_kh`);


ALTER TABLE `sp`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `FOREIGN KEY` (`danh_muc`);


ALTER TABLE `admin`
  MODIFY `ma_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `danh_muc`
  MODIFY `ma_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `kh`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


ALTER TABLE `sp`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;


ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_khach_hang`) REFERENCES `kh` (`ma_kh`);


ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don` (`ma_hoa_don`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_sp`) REFERENCES `sp` (`ma_sp`);


ALTER TABLE `sp`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`danh_muc`) REFERENCES `danh_muc` (`ma_danh_muc`);
COMMIT;

