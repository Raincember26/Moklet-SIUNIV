<?php

include '../connect.php';

$cari = $_GET['cari'];
// $kategori = $_GET['kategori'];                               


$quary="SELECT * FROM dosen WHERE nama_dosen LIKE '%$cari%'";
$result=mysqli_query($connect, $quary);
$num=mysqli_num_rows($result);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     
     <title>SIUNIV Document</title>

<styele>
</style>

   </head>
   <body>
     <table border='1'>
       
       <h2>DATA DOSEN</h2>

       <tr>
         <th>No.</th>
         <th>Nama Dosen</th>
         <th>Telepon</th>
         <th>Aksi</th>
       </tr>

       <?php
       if($num>0)
       {
         $no =1;
         while ($data =mysqli_fetch_assoc($result))
         {
           echo "<tr>";
           echo "<td>".$no."</td>";
           echo "<td>".$data['nama_dosen']."</td>";
           echo "<td>".$data['telp']."</td>";
           echo "<td>
                      <a href='form-update.php?id_dosen=$data[id_dosen]'>Edit</a> |
                      <a href='delete.php?id_dosen=$data[id_dosen]'onclick'return confirm(\"Apakah Anda yakin ingin menghapus data?\")>Hapus</a>
                  </td>";
           echo "</tr>";
           $no++;
         }
       }
       else
        {
      echo "<td colspan='3'>Tidak ada data</td>";
       }
        ?>

     </table>
   </body>
 </html>
