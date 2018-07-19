 <!DOCTYPE html>
 <head>

    <title>SIUNIV Document</title>
    <meta charset="utf-8">
   
   <style>

html, body, ul, li, h1, h2, h3, p, a {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }

  /*Header Dibuka*/

#header {
    background-image: url('asset/background.jpg');
    height: 624px;
    width: 100%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
}

#welcom {
    color:white;
    text-align: center;
    font-size: 68px;
    font-family: Gill Sans MT;
    margin: 0px;
}

#slogan {
    color: white;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 28px;
    text-align: center;
}

hr {
margin: 0px 25%;
margin-top: -10px;
width: 640px;
}

#isi {
    padding: 250px 0px;
}

#isi1 {
background-color: rgb(0,0,0,0.50);
    height: 75px;
    width: 100%;
    position: fixed;
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

  /*Header Ditutup*/
  
  /*Data Dosen Dibuka*/

  #dosen h1 {
      text-align: center;
      margin-top: 70px;
      color: #3f3d3d;
  }

  #dosen hr {
      margin-top: 3px;
  }

  #isi2 {
      width: 600px;
      height: 30px;
      margin: 30px 320px;
      text-align: center;
      display : inline-block;
      color: #3f3d3d;
  }
  /*Data Dosen Ditutup*/

    /*Data Matkul Dibuka*/
    #matkul h1 {
      text-align: center;
      margin-top: 30px;
      color: #3f3d3d;
  }

  #matkul hr {
      margin-top: 3px;
  }

/*Data Matkul Ditutup*/

/*CSS Button Dibuka*/
#tombol1 {
    margin: 0px 530px;
}

.button1 {
    background-color: #3f352c;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 8px;
    margin-top: 30px;
    width: 200px;
}

#tombol1 :hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
/*CSS Button Ditutup*/

footer {
  text-align: center;
  background-color: #302923;
  padding: 30px 0;
  color: white;
  margin-top: 60px;
}

footer .kiri {
  text-align: left;
}

    </style>
 </head>
 <body>
 <!--Header Dibuka-->
 <div id="header">
 <div id="isi1">
         <div id="logo1"><img src='asset/logo.png' alt="" ></div>
                <nav>
                    <ul>
                        <li><a href="siuniv.php"><b>Home</b></a></li>
                        <li><a href="#dosen"><b>Kelola Data</b></a></li>
                        <li><a href="../login/logout.php"><b>LogOut</b></a></li>
                    </ul>
                </nav>
            </div>
   <div id="isi">
    <p id="welcom"><b>WELCOME TO SIUNIV</b></p>
    <hr border="1">
  <p id="slogan">Your College Document System</p>
  </div>
</div>
<!--Header Ditutup-->

<!--Data Dosen Dibuka-->
<div id="dosen">

<h1> DATA DOSEN </h1>
<hr border="1">

    <div id="isi2">
    
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Nemo eum laboriosam corporis quaerat recusandae nulla voluptatum 
        laudantium repellendus doloribus ratione deserunt,
        placeat dolorum odio iure, labore amet autem libero itaque?</p>
    
    </div>

    <div id="tombol1">
        <a href="../dosen/read.php"><button class="button1">Lihat Data</button></a>
        <a href="../dosen/form-create.php"><button class="button1">Tambah Data</button></a>
    </div>
</div>
<!--Data Dosen Ditutup-->

<div id="matkul">

<h1> DATA MATAKULIAH </h1>
<hr border="1">

    <div id="isi2">
    
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Nemo eum laboriosam corporis quaerat recusandae nulla voluptatum 
        laudantium repellendus doloribus ratione deserunt,
        placeat dolorum odio iure, labore amet autem libero itaque?</p>
    
    </div>

   <div id="tombol1">
        <a href="../matakuliah/read.php"><button class="button1">Lihat Data</button></a>
        <a href="../matakuliah/form-create.php"><button class="button1">Tambah Data</button></a>
    </div>

</div>

    <footer>
      <b class="kiri">SIUNIV - Copyright &copy; 2018</b>
    </footer>
 </body>