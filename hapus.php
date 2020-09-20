<?php
include"koneksi.php";
$id = $_GET['id'];
mysqli_query($conn, "delete from barang where Kode_Barang = '$id'");
if($hapus){
echo"<script>alert('data sudah di hapus')</script>";
}else{
  echo"<script>alert('data gagal di hapus')</script>";
}
header("location:index.php");
 ?>
