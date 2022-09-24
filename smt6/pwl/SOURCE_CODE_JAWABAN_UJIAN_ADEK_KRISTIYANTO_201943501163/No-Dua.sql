CREATE DATABASE db_uap1163;

-- db_uap1163.table_seleksi definition

CREATE TABLE `table_seleksi` (
  `kode_seleksi` varchar(12) NOT NULL,
  `kode_calon_mhs` varchar(12) NOT NULL,
  `nilai_tkda` int(255) DEFAULT NULL,
  `nilai_matematika` int(255) DEFAULT NULL,
  `nilai_wawancara` int(255) DEFAULT NULL,
  `rata_rata` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- db_uap1163.table_calon_mhs definition
CREATE TABLE `table_calon_mhs` (
  `kode_calon_mhs` varchar(12) NOT NULL,
  `nama_calon_mhs` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` int(15) DEFAULT NULL,
  PRIMARY KEY (`kode_calon_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

alter table table_seleksi add foreign key (kode_calon_mhs) references table_calon_mhs (kode_calon_mhs);
