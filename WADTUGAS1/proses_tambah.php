<?php
include 'koneksi.php';

$nama_pembeli = $_POST['nama_pembeli'];
$tanggal_penjualan = $_POST['tanggal_penjualan'];
$total_harga = $_POST['total_harga'];

$query = "INSERT INTO penjualan (nama_pembeli, tanggal_penjualan, total_harga) VALUES ('$nama_pembeli', '$tanggal_penjualan', '$total_harga')";
mysqli_query($koneksi, $query);

header("Location: index.php");
?>
