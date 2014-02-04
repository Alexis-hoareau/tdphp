<!DOCTYPE HTML>
<html lang="fr">
  <head>
    <title> Bienvenue </title>
  </head>
   <body>
   <?php
   session_start();
if(!empty($_SESSION['login']))
  {    
    echo "Bienvenue, " .$_SESSION['login']." !</br>";
    echo "Votre SID est ".session_id();
    echo " et le mot de passe en md5 est ".$_SESSION['password'];
  }

else
  {
    header('Location: authBD.php');
  }
?> 

<form action="deconnect.php" method="POST">
<input type="submit" value='deconnexion'>
</body>
