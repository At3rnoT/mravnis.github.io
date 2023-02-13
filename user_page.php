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
   <title>Uživateľ</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<div class="content">
      <h3>Vitaj, <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <br>
      <a href="logout.php" class="btn">Odhlásiť sa</a>
      <a href="Loldle.html" class="btn">LOLDLE</a>
      <a href="Naucna.html" class="btn">Uč ma!</a>
      <a href="index.html" class="btn">WORDLE</a>
      <br>
   </div>

</div>

</body>
</html>