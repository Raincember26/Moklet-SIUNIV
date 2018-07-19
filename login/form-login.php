<!DOCTYPEhtml> 
  <head> 
    <title> SIUNIV Document </title> 
<style>

* {
  margin:auto;
  padding: auto;
  font-family: sans-serif;
}

body {
    background-image: url('asset/background.jpg');
    height: 623px;
    width: 100%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
}

h1 {
  text-align:center;
  color: white;
  margin: 10px 0px;
}

#header {
  margin: 50px 445px;
  background-color: #4c2c12;
  text-align: center;
  width: 350px;
  height: 300px;
  border: 3px solid #261405;
  border-radius: 15px;
}

input[type=text], input[type=password] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
}

p {
color:white;
}

.tombol_login {
    background-color: #261405;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

.tombol_login:hover {
    opacity: 0.8;
}

#cokk {
  margin-left: 150px;
}

img {
  width: 250px;
  margin: 0px 500px;
}

  </style>
</head> 

  <body> 
    <div id="utama">

<img src=asset/logo.png>

      <div id="header"> 


            <form action="login.php" method="POST"> 
<br>
<h1> LOGIN </h1> 

              <input type="text" name="username" placeholder="Username" class="login_regis">     <br /> 
              <input type="password" name="password" placeholder="Password" class="login_regis"> <br /> 

              <input type="checkbox" name="chek" id="cokk"> Remember me <br /> 

<br>
              <input type="Submit" name="login" value="LOGIN" class="tombol_login"> 
            </form> 

      </div> 
    </div> 
  </body> 
</html> 