# MySQL-Front Dump 2.5
#
# Host: localhost   Database: pw2
# --------------------------------------------------------
# Server version 4.0.20a-nt


#
# Table structure for table 'mahasiswa'
#

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL default '',
  `nama` varchar(30) NOT NULL default '',
  `tgllahir` date NOT NULL default '0000-00-00',
  `jenkel` enum('0','1') NOT NULL default '0',
  `alamat` text NOT NULL,
  PRIMARY KEY  (`nim`),
  UNIQUE KEY `nim` (`nim`),
  KEY `nim_2` (`nim`)
) TYPE=MyISAM;



#
# Dumping data for table 'mahasiswa'
#

INSERT INTO `mahasiswa` (`nim`, `nama`, `tgllahir`, `jenkel`, `alamat`) VALUES("0111500382", "Achmad Solichin", "1982-06-05", "0", "Jl Raya Jakarta Selatan");
INSERT INTO `mahasiswa` (`nim`, `nama`, `tgllahir`, `jenkel`, `alamat`) VALUES("0111500412", "Chotimatul Musyarofah", "1983-03-12", "1", "Nusa Mangir");
