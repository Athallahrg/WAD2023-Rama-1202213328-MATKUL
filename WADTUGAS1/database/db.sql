create database crud_athalla;

use database crud_athalla;

CREATE TABLE penjualan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pembeli VARCHAR(255) NOT NULL,
    tanggal_penjualan DATE NOT NULL,
    total_harga DECIMAL(10, 2) NOT NULL
);