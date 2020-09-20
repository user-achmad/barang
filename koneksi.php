<?php
$server='localhost';
$user='root';
$pass='';
$db='data_barang';

// mysqli_connect($server, $user, $pass, $db) or die ('sistem belum terhubung');
// mysqli_select_db($db) or die ('Database Belum Terhubung');
$conn = mysqli_connect($server, $user, $pass, $db) or die ('anda belum koneck ke server');
 ?>
