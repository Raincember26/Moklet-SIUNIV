<?php
if (!(isset($_POST['btnSimpan'])))
{
  header("location: form-update.php");
}
include '../connect.php';

$kode = $_POST['kode'];
$nama_matkul = $_POST['nama_matkul'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];
$id_dosen = $_POST ['id_dosen'];

$query = "UPDATE matakuliah SET nama_matkul = '$nama_matkul',
                                sks = '$sks',
                                semester = '$semester',
                                id_dosen = '$id_dosen'
                WHERE kode = '$kode'";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0 )
    {
        echo"Berhasil update data <br>";
    }
    else
    {
        echo "Gagal update data <br>";
    }

    echo "<a href='read.php'>Lihat Data </a>"
?>
