<?php

include  '../connect.php';

$query = "SELECT id_dosen,nama_dosen FROM dosen";
$result = mysqli_query($connect,$query);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">

     </style>
   </head>
   <body>
     <table>

          <form class="" action="create.php" method="post">
            <h1> Tambah Data Matakuliah</h1>

       <tr>
         <td><label for="kode"> Kode </label></td> <td> : </td>
         <td><input type="text" name="kode" value=""></td>
       </tr>
       <tr>
         <td><label for="matkul"> Matakuliah </label></td> <td> : </td>
         <td><input type="text" name="nama_matkul" value=""></td>
       </tr>
       <tr>
         <td><label for="sks"> SKS  </label></td> <td> : </td>
         <td><input type="text" name="sks" value=""></td>
       </tr>
       <tr>
         <td><label for="semester"> Semester </label></td> <td> : </td>
         <td><input type="text" name="semester" value=""></td>
       </tr>
       <tr>
         <td><label for="dosen"> Dosen Pengajar </label> </td> <td> : </td>
         <td><select name="id_dosen" id="nama_dosen">
          <option value="-"> -- Pilih Salah Satu -- </option>
           <<?php
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $data['id_dosen']; ?>"> <?php echo $data['nama_dosen']; ?>
            </option>
            <?php
            }
            ?>
         </select> </td>

       </tr>
       <tr>
         <td><button type="submit" name="btnSimpan"> Simpan </button></td>
       </tr>
     </table>

     </form>
   </body>
 </html>
