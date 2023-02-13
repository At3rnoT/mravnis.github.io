<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Vitaj, <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <br>
      <a href="logout.php" class="btn">Odhlásiť sa</a>
      <br>
      <a href="Loldle.html" class="btn">Kvíz</a>
      <br>
   </div>
</div>
</body>
</html>