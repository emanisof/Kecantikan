/* TABLE KATEGORI PASIEN */
DROP TABLE IF EXISTS `cat_layanan`;
CREATE TABLE `cat_layanan` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(60) NOT NULL,
	`keterangan` TEXT,	
	`disc` DECIMAL(5,2) NOT NULL,
	PRIMARY KEY(`id`)
);

/***
INSERT INTO `category`(`id`,`cat`) VALUES
	('','Pelajar'),
	('','Umum'),
	('','Executive'),
	('','Keluarga'),
	('','Partnet'),
**/

/* TABLE PASIEN  */
DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`no_kartu` VARCHAR(12) NOT NULL,
	`id_cat` INT(11) NOT NULL,
	`nama` VARCHAR(60) NOT NULL,
	`tmp_lahir` VARCHAR(60) NOT NULL,
	`tgl_lahir` DATE NOT NULL,
	`kelamin` VARCHAR(1) NOT NULL,
	`alamat` VARCHAR(100) NOT NULL,
	`kota` VARCHAR(100) NOT NULL,
	`notelp` VARCHAR(20) NOT NULL,
	`nohp` VARCHAR(20) NOT NULL,
	`pekerjaan` VARCHAR(60) NOT NULL,
	`kawin` TINYINT(1) NOT NULL,
	`riw_sakit` TEXT NOT NULL,
	`alergi` TEXT NOT NULL,
	`note`TEXT NOT NULL,
	PRIMARY KEY(`id`)
);

/* TABLE PEGAWAI */
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(60) NOT NULL,
	`tmp_lahir` VARCHAR(60) NOT NULL,
	`tgl_lahir` DATE NOT NULL,
	`alamat` VARCHAR(100) NOT NULL,
	`kota` VARCHAR(60) NOT NULL,
	`kelamin` VARCHAR(1) NOT NULL,
	`notelp` VARCHAR(20) NOT NULL,
	PRIMARY KEY(`id`)
);

/* TABLE CHECKUP */
DROP TABLE IF EXISTS `checkup`;
CREATE TABLE `checkup`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`id_pasien` INT(11) NOT NULL,
	`id_pegawai` INT(11) NOT NULL,
	`tanggal` DATE NOT NULL,
	`keluhan` TEXT NOT NULL,
	`analisa` TEXT NOT NULL,
	`tindakan` TEXT NOT NULL,
	PRIMARY KEY(`id`)
);

DROP TABLE IF EXISTS `checkup_photo`;
CREATE TABLE `checkup_photo`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`id_checkup` INT(11) NOT NULL,
	`id_pasien` INT(11) NOT NULL,
	`nama` VARCHAR(60) NOT NULL,
	`file_path` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`id`)
);

/* TABLE TINDAKAN */
DROP TABLE IF EXISTS `tindakan`;
CREATE TABLE `tindakan`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(100) NOT NULL,
	`harga`INT(11) NOT NULL,
	PRIMARY KEY(`id`)	
);

/* TABLE OBAT */
DROP TABLE IF EXISTS `obat`;
CREATE TABLE `obat` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(100) NOT NULL,
	`keterangan` TEXT NOT NULL,
	`harga_beli` INT(11) NOT NULL,
	`harga_jual` INT(11) NOT NULL,
	`jumlah`INT(11) NOT NULL,
	PRIMARY KEY(`id`)
);

/* TABLE NOTA */
DROP TABLE IF EXISTS `nota_obat`;
CREATE TABLE `nota_obat`(
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`id_pasien` INT(11) NOT NULL,
	`id_checkup` INT(11) NOT NULL,
	`id_obat` INT(11) NOT NULL,
	`id_tindakan` INT(11) NOT NULL,
	`tanggal` DATE NOT NULL,
	PRIMARY KEY(`id`)
);

/* DROP TABLE IF EXISTS `nota_layanan`;
CREATE TABLE `nota_layanan` (
	`id` INT(11) NOT NULL,
	`id_layanan` INT(11) NOT NULL,
);
*/

DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nama`VARCHAR(60) NOT NULL,
	`keterangan` TEXT NOT NULL,
	`harga` INT(11) NOT NULL,
	PRIMARY KEY(`id`)
);

/* TABLE JOURNAL */
/* DROP TABLE IF EXISTS `journal`; */

