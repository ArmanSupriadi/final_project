<?php
$movie_id = $_POST["movie_id"];
$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$cover_image = $_POST["cover_image"];
$actor = $_POST["actor"];
$durasi = $_POST["durasi"];

include_once "connection.php";

mysqli_query($conn, "INSERT INTO `produk` (`nama_produk`, `harga`, `stok`, `keterangan`, `gambar`, `id_kategori`) 
VALUES ('$nama_produk', '$harga', '$stok', '$keterangan', '$gambar', '$id_kategori')");

header("Location: index.php");
?>
