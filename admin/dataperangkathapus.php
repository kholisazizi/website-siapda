<?php
include_once('../koneksi.php');
$conn->query("DELETE FROM dataperangkat WHERE iddataperangkat='$_GET[id]'");
$conn->query("DELETE FROM link WHERE iddataperangkat='$_GET[id]'");

echo "<script>alert('Data Berhasil Di Hapus');</script>";
echo "<script>location='dataperangkatdaftar.php';</script>";
