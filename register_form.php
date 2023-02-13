<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Uživateľ už existuje!';

   }else{

      if($pass != $cpass){
         $error[] = 'Heslá sa nezhodujú';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrácia</title>

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Registruj sa</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Zadaj svoje meno">
      <input type="email" name="email" required placeholder="Zadaj svoj email">
      <input type="password" name="password" required placeholder="Zadaj svoje heslo">
      <input type="password" name="cpassword" required placeholder="Potvrď svoje heslo">
      <select name="user_type">
         <option style="background: rgb(55, 59, 61);" value="user">Žiak</option>
         <option value="admin">Učiteľ</option>
      </select>
      <input type="submit" name="submit" value="Registrovať" class="form-btn">
      <p>Už máš účet? ---> <a href="login_form.php"> Prihlás sa</a></p>
   </form>

</div>

</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');


*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

.container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
}

.container .content{
   text-align: center;
}

.container .content h3{
   font-size: 30px;
   color:rgb(48 54 65);
}

.container .content h3 span{
   background: rgb(50, 20, 220);
   color:rgb(0, 0, 0);
   border-radius: 5px;
   padding:0 15px;
}

.container .content h1{
   font-size: 50px;
   color:#333;
}

.container .content h1 span{
   color:rgb(50, 20, 220);
}

.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
}

.container .content .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background:#112c38;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.container .content .btn:hover{
   background: rgb(55, 42, 173);
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   background: rgb(48 54 65);
}

.form-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow:  38px 38px 56px rgb(37, 43, 54),

               -25px -25px 38px rgb(37, 43, 54);

z-index: 1;
   background: rgb(29 31 32);
   text-align: center;
   width: 500px;
}

.form-container form h3{
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:rgb(242 242 242);
}

.form-container form input,
.form-container form select{
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: rgb(55, 59, 61);
   border-radius: 5px;
}

.form-container form select option{
   background: #fff;
}

.form-container form .form-btn{
   background: rgb(55, 62, 74);
   color:rgb(193, 195, 198);
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: rgb(45, 52, 64);
   color:#fff;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:rgb(242 242 242);
}

.form-container form p a{
   color:rgb(242 242 242);
}

.form-container form .error-msg{
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}
</style>


</html>