<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>


</head>
<body>
 
  <section id="glava">
    Zaletelj.sp

    <div class="menu-bar">
    <ul id="navbar">
        <li><a href="doma.php">Domov</a></li>
        <?php include 'menu.php'; ?>
        <li><a class="active" href="http://localhost/Seminarska%20naloga%20matura/Stroji.php">Novi stroji</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
        <li><a  href="dogodki.php">Aktualno/arhiv dogodkov</a></li>
        <a href="#" id="close"><i class="fas fa-times"></i></a>
        <?php
            session_start(); 
            if (isset($_SESSION['user_id'])) {
              echo '<li><a class="loginout btnLogin-popup" href="logout.php">Log out</a></li>';
            } else {
                // Uporabnik ni prijavljen, prikažemo gumb za prijavo
                echo '<li><a class="loginout btnLogin-popup" href="login.php">Login</a></li>';
            }
            ?>
      </ul>
    </div>
    <div id="mobile">
      <i id="bar" class="fas fa-outdent"></i>
    </div>
  </section>
  
  <section id="naslovnica2"> <!--v tutorialu je 'page-header'-->
  <h1>NOVI STROJI</h1>
  <h2>Majevica & Vicon</h2>  

  </section>

 

  <?php 
  // Povezava z podatkovno bazo
  $conn = new mysqli('localhost', 'root', '', 'registracija');
  
  // Preverjanje povezave
  if ($conn->connect_error) {
      die("Povezava ni uspela: " . $conn->connect_error);
  }

  // Izvajanje poizvedbe za pridobitev imen strojev, kjer je stanje enako 1
  $sql = "SELECT ime FROM stroji WHERE stanje = 1";
  $result = $conn->query($sql);
  
  // Preverjanje, ali so bile vrnjene vrstice
  if ($result->num_rows > 0) {
      // Prikaz strojev s checkboxi
      while ($row = $result->fetch_assoc()) {
          $ime_datoteke = $row["ime"];
          include "stroji/$ime_datoteke"; // Vključi datoteko za prikaz stroja
      }
  } else {
      echo "Ni strojev za prikaz";
  }

  // Zapiranje povezave
  $conn->close();
  ?>          
  

  <footer>
    <div class="col">
      <h4>Kontakt</h4>
      <p><strong>Naslov: </strong> Šmihel 3, 8360 Žužemberk, Slovenija</p>
      <p><strong>Telefon: </strong> +386 31 266 841</p>
      <p><strong>Delovni čas: </strong>pon. - pet.: 14:00-19:00 <br> sob.: 09:00 - 13:00</p>
      <p><strong>Email: </strong>matjaz.za3@gmail.com</p>
    </div>

    <div class="col">
      <h4>O nas</h4>
      <a href="doma.php#Splo%C5%A1no">Splošno o nas</a>
      <a href="doma.php#Dostava">Dostava</a>
      <a href="kontakt.php">Kontaktirajte nas</a>
    </div>
  </footer>
 
</body>
</html>