<?php
require 'init.php';
// IF USER MAKING SIGNUP REQUEST
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
  $result = $user_obj->singUpUser($_POST['username'],$_POST['email'],$_POST['password']);
}
// IF USER ALREADY LOGGED IN
if(isset($_SESSION['email'])){
  header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body>
  <div class="main_container login_signup_container">
    <h1>Registrieren</h1>
    <form action="" method="POST" novalidate>
      <label for="username">Name</label>
      <input type="text" id="username" name="username" spellcheck="false" placeholder="Gebe deinen Namen ein" required>
      <label for="email">E-Mail</label>
      <input type="email" id="email" name="email" spellcheck="false" placeholder="Gebe deine E-Mail ein" required>
      <label for="password">Passwort</label>
      <input type="password" id="password" name="password" placeholder="Gebe dein Passwort ein" required>
      <input type="submit" value="Registrieren">
      <a href="index.php" class="form_link">Login</a>
    </form>
    <div>  
      <?php
        if(isset($result['errorMessage'])){
          echo '<p class="errorMsg">'.$result['errorMessage'].'</p>';
        }
        if(isset($result['successMessage'])){
          echo '<p class="successMsg">'.$result['successMessage'].'</p>';
        }
      ?>    
    </div>
    
  </div>
</body>
</html>