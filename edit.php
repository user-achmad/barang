<h2>Ubah data barang</h2>
<?php
  include"koneksi.php";
  $r=mysqli_query("SELECT * FROM barang where Kode_Barang='$_GET[id]'");
  $v=mysqli_fetch_array($r);
 ?>
<form method="post" action="" enctype="multipart-form/data">
Kode Barang <input type="text" name="kb" placeholder="Kode Barang" class="form-control" value="<?php echo $v['Kode_Barang'] ?>"><p>
Nama Barang <input type="text" name="nb" placeholder="Nama Barang" class="form-control" value="<?php echo $v['Nama_Barang'] ?>"><p>
Tanggal Masuk <input type="date" name="tm" placeholder="Tgl Masuk" class="form-control" value="<?php echo $v['Tgl_Barang'] ?>"><p>
Jumblah      <input type="number" name="j" placeholder="Jumblah" class="form-control" value="<?php echo $v['Jumblah'] ?>"><p>
Harga Awal  <input type="number" name="ha" placeholder="Harga Awal" class="form-control" value="<?php echo $v['Harga_Awal'] ?>"><p>
Harga Jual  <input type="number" name="hj" placeholder="Harga Jual" class="form-control" value="<?php echo $v['Harga_Jual'] ?>"><p>
<input type="Submit" name="simpan" value="SIMPAN" class="btn">
<input type="reset" name="batal" value="BATAL" class="btn">
</form>

<?php
if(isset($_POST['simpan'])){
$kb=$_POST['kb'];
$nb=$_POST['nb'];
$tm=$_POST['tm'];
$j=$_POST['j'];
$ha=$_POST['ha'];
$hj=$_POST['hj'];
mysqli_query($conn, "UPDATE barang SET Kode_Barang='$kb',Nama_Barang='$nb',
Tgl_Masuk='$tm',Jumblah='$j',Harga_Awal='$ha',Harga_Jual='$hj' WHERE Kode_Barang='$_GET[id]'");
echo"Data Sudah Di Ubah";
}
 ?>
