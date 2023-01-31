<?php
include_once('../koneksi.php');
$conn->query("DELETE FROM link WHERE idlink='$_GET[id]'");

echo "<script>alert('Data Proses Aspirasi Berhasil Di Hapus');</script>";
echo "<script>location='dataperangkatedit.php?id=$_GET[iddataperangkat]';</script>";
