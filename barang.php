<h1>Data Barang</h1>
<form method="post" action="" enctype="multipart-form/data">
Kode Barang <input type="text" name="kb" placeholder="Kode Barang" class="form-control"><p>
Nama Barang <input type="text" name="nb" placeholder="Nama Barang" class="form-control"><p>
Tanggal Masuk <input type="date" name="tm" placeholder="Tgl Masuk" class="form-control"><p>
Jumblah      <input type="number" name="j" placeholder="Jumblah" class="form-control"><p>
Harga Awal  <input type="number" name="ha" placeholder="Harga Awal" class="form-control"><p>
Harga Jual  <input type="number" name="hj" placeholder="Harga Jual" class="form-control"><p>
<input type="Submit" name="simpan" value="SIMPAN" class="btn">
<input type="reset" name="batal" value="BATAL" class="btn">
</form>

<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
  $kb=$_POST['kb'];
  $nb=$_POST['nb'];
  $tm=$_POST['tm'];
  $j=$_POST['j'];
  $ha=$_POST['ha'];
  $hj=$_POST['hj'];
  mysqli_query($conn, "INSERT INTO barang VALUES('$kb','$nb','$tm','$j','$ha','$hj')");
  echo"Data Telah Disimpan";
}
?>
<table border="0">
  <tr>
    <th>NO</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Tanggal Masuk</th>
    <th>Jumblah</th>
    <th>Harga Awal</th>
    <th>Harga Jual</th>
    <th>Aksi</th>
  </tr>
  <?php
 $c=mysqli_query($conn, "select * from barang");
 while($r=mysqli_fetch_array($c)){
   ?>
<tr>
  <td><?php echo $no=$no+1; ?></td>
  <td><?php echo $r['Kode_Barang']; ?></td>
  <td><?php echo $r['Nama_Barang']; ?></td>
  <td><?php echo $r['Tgl_Masuk']; ?></td>
  <td><?php echo $r['Jumblah']; ?></td>
  <td><?php echo $r['Harga_Awal']; ?></td>
  <td><?php echo $r['Harga_Jual']; ?></td>
  <td><a href="?view=edit&id=<?php echo $r['Kode_Barang'] ?>"<button>EDIT</button></a> |
  <a href="?view=hapus&id=<?php echo $r['Kode_Barang'] ?>" <button>HAPUS</button></a></td>
</tr>
<?php } ?>
</table>
