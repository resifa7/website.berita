<?php
require_once "config.php";
require_once "koneksi.php";

$sql = "SELECT id, judul, deskripsi, isi, tgl_publish, penulis,gambarr from artikel";
$result = $conn->query($sql);

$articles = $result->fetchAll(PDO::FETCH_ASSOC);
?>




<?php
include "top.php";
include "main.php";
include "footer_guest.php";
?>




