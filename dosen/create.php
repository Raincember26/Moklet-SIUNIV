<?php
include'../connect.php';

$nama_dosen = $_POST['nama_dosen'];

$telp = $_POST['telp'];

$quary = "INSERT INTO dosen (nama_dosen, telp)

  VALUES ('$nama_dosen','$telp')";

  $result=mysqli_query($connect,$quary);
  $num=mysqli_affected_rows($connect);

if($num>0)
{
  echo "Berhasil Tmabah Data";
}
else {
  echo "Gagal Tambah Data";
}
echo "<a href='read.php'> Lihat Data <a>";

 ?>
