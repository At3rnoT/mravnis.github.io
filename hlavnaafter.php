<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Hlavna</title>

</head>

<body>
   <ul>
      <li><a href="#">Hlavná</a></li>
      <li><a href="index.html">Wordle</a></li>
      <li><a href="Loldle.html">Loldle</a></li>
      <li><a href="Naucna.html">Uč ma</a></li>
      <li><a href="#">Others</a></li>
      <li><a href="#">TBC</a></li>
   </ul>

   <ul class="vpravo">
      <li><a href="login_form.php">Login</a></li>
      <li><a href="register_form.php">Signup</a></li>
      <li><a href="logout.php">Logout</a></li>
   </ul>

   <h3>Vitaj, <span><?php echo $_SESSION['user_name'] ?></span></h1>
   
    


</body>
<style>

   body {
  margin-top:0;
  padding:0;
  display: flex;
  justify-content:center;
  padding-top: 50px;
  align-items:top;
  height:3vh;
  background:rgb(48 54 65);
}

.vpravo{
   margin-left: 1000px;
}
ul{
  margin:0;
  padding:0;
  display:flex;
}

ul li{
  list-style:none;
  margin:0 20px;
  transition:0.5s;
}

ul li a{
  display: block;
  position:relative;
  text-decoration:none;
  padding:5px;
  font-size:18px;
  font-family: sans-serif;
  color:#fff;
  text-transform:uppercase;
  transition:0.5s;
}

ul:hover li a{
  transform:scale(1.5);
  opacity:0.2;
  filter:blur(4px);
}

ul li a:hover{
  transform:scale(2);
  opacity:1;
  filter:blur(0);
  text-decoration:none;
  color:#fff;
}

ul li a:before{
  content:'';
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgb(26 28 29);
  transition:0.5s;
  transform-origin:right;
  transform:scaleX(0);
  z-index:-1;
}

ul li a:hover:before{
  transition:transform 0.5s;
  transform-origin:left;
  transform:scaleX(1);
}
</style>
</html>