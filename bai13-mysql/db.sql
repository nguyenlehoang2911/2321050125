CREATE DATABASE IF NOT EXISTS netflix;

CREATE TABLE IF NOT EXISTS nguoi_dung(
	id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ten_dang_nhap varchar(30),
    mat_khau varchar(100),
    email varchar(100),
    so_dien_thoai varchar(10),
    gioi_tinh BOOLEAN,
    ngay_sinh date
);
CREATE TABLE IF NOT EXISTS the_loai(
	id_the_loai int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ten_the_loai varchar(100)
);
CREATE TABLE IF NOT EXISTS dien_vien(
	id_dien_vien int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    ho_ten varchar(100),
    ngay_sinh date
);
CREATE TABLE IF NOT EXISTS ddao_dien(
	id_dao_dien int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    ho_ten varchar(100),
    ngay_sinh date
);
CREATE TABLE IF NOT EXISTS phim(
	id_phim int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    ten_phim varchar(255),
    quoc_gia varchar(100),
    dao_dien_id int,
    nam_san_xuat date,
    do_tuoi int,
    mo_mo varchar(100) 
);
CREATE TABLE IF NOT EXISTS phim_the_loai(
	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    id_phim int,
    id_the_loai int
);
CREATE TABLE IF NOT EXISTS phim_dien_vien(
	id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    id_dien_vien int
);
