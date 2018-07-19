<?php

// if (!(isset($SESION['user']))) {
//   header("location:../login/form-login.php");
// }

include '../connect.php';

$quary="SELECT * FROM dosen";
$result=mysqli_query($connect, $quary);
$num=mysqli_num_rows($result);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>SIUNIV Document</title>

<style>

* {
  margin: 0px;
  padding: 0px;
  font-family: sans-serif;
}

body {
  background-image: url('asset/background.png');
    height: 624px;
    width: 100%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
}

/*CSS menu dibuka*/

#isi1 {
background-color: rgb(0,0,0,0.65);
height: 75px;
}

#isi1 a {
    text-decoration: none;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: white;
  }

nav {
    text-align: left;
    padding: 0px 20px;
  }
  
  nav li {
    display: inline-block;
    padding: 28px 8px;
    width: 100px;
    text-align: center;
  }
  
  #isi1 a:hover{
    color: #3a3838;
    transition: 0.3s;
  }

  #logo1 img {
    height: 70px;
    margin: 0px 50px;
    padding: 0px 0px;
    float: right;
  }

/*CSS Menu Ditutup*/

h1 {
text-align:center;
margin-top:30px;
color:white;
}

hr {
  width:275px;
  margin: 0px 500px;
}

/*CSS Search dibuka*/

#cari {
  margin: 40px 120px;
}

input[type=search] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('asset/logosr.png');
    background-size: 20px;
    background-position: 8px 8px; 
    background-repeat: no-repeat;
    padding: 8px 20px 8px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=search]:focus {
    width: 25%;
}

/*CSS Search Ditutup*/

/*CSS Table*/

tr, td {
  text-align:center;
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
    margin-left: 120px;
    margin-bottom: 40px;
}

#customers td, #customers th {
    border: 1px solid #422615;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr{background-color: #a5a4a4;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #382719;
    color: white;
}

</style>

   </head>
   <body>

    <div id="isi1">
         <div id="logo1"><img src='asset/logo.png' alt="" ></div>
                <nav>
                    <ul>
                        <li><a href="../siuniv/siuniv.php"><b>Home</b></a></li>
                        <li><a href="../dosen/form-create.php"><b>Kelola Data</b></a></li>
                        <li><a href="../login/logout.php"><b>LogOut</b></a></li>
                    </ul>
                </nav>
            </div>

     <table id="customers">
       <h1>DATA DOSEN</h1>
 <hr border="1">

<div id="cari">

<form action="search.php" method="get">
  <input type="search" name="cari" placeholder="Cari...">
</form>
</div>

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
