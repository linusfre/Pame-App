<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Pame App</h1>
    <a href="logout.php">Abmelden</a>
    <button type="create" name="createParty">Party erstellen</button>
     
  </body>
</html>