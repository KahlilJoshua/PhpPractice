<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Lilos resturang</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
      <nav>
         <h1>Lilos resturang</h1>
         <ul>
            <a href="">Meny</a>
            <a href="">Äckliga Lådan</a>
            <a href="">Kontakt</a>
         </ul>
      </nav>
   </header>

   <div class="parent">
      <div class="child">
         <form action="index.php" method="$_GET">
            <p>Skriv ditt användarnamn</p>
            <input type="text" name="name">
            <p>Skriv Lösenord</p>
            <input type="password" name="password">
            <input type="submit">
            <h1 style="display: none;" name="welcome">Välkommen Lilo!</h1>
         </form>

      </div>
   </div>
</body>
</html>

<?php
   $name = $_GET["name"];
   $password = $_GET["password"];

   if($name == "lilo" && $password == "lilo123"){
      echo "Välkommen Lilo";}
?>