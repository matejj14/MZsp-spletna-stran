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
        <li><a class="active" href="doma.php">Domov</a></li>
        <?php include 'menu.php'; ?>
        <li><a href="Stroji.php">Novi stroji</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
        <li><a href="dogodki.php">Aktualno/arhiv dogodkov</a></li>
        <a href="#" id="close"><i class="fas fa-times"></i></a>
      <!-- <li><button class="btnLogin-popup" onclick="window.location.href='login.php';">Login</button></li> -->

     <!-- Preverjanje, ali je uporabnik prijavljen -->
     <?php
            session_start(); // Začetek seje

            // Preverimo, ali je uporabnik prijavljen
            if (isset($_SESSION['user_id'])) {
                // Uporabnik je prijavljen, prikažemo gumb za odjavo
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
  





  <section id="naslovnica"> <!--v tutorialu je 'hero'-->
  <h2>Kmetijska mehanizacija</h2>
  <h1>Matjaž Zaletelj s.p.</h1>
  </section>

  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="slike/klic.jpg" alt="Telefon" style="width:200px;height:200px;">
      <h5>Hiter odziv</h5>
    </div>
    <div class="fe-box">
      <img src="slike/delivery.jpg" alt="Dostava" style="width:200px;height:200px;">
      <h5>Možnost dostave</h5>
    </div>
    <div class="fe-box">
      <img src="slike/wrench.png" alt="Servis" style="width:200px;height:200px;">
      <h5>Servis določenih strojev</h5>
    </div>
    <div class="fe-box">
      <img src="slike/deli.jpg" alt="Rezervni deli" style="width:200px;height:200px;">
      <h5>Rezervni deli</h5>
    </div>
  </section>

  <section id="Splošno">
    <div class="text">
   <h1>O podjetju Zaletelj</h1>
<p>Smo majhno družinsko podjetje, ki se že nekaj let ukvarja s prodajo različne kmetijske mehanizacije. Možen je nakup novih strojev <strong>Vicon , Same, Majevica</strong> (za stroje Majevica smo generalni uvoznik za Slovenijo)  ter rezervnih delov (VICON, Majevica, SAME), menjava rabljeno za novo ali rabljeno za rabljeno. Stroje dostavimo na lokacijo, ki jo določite Vi.

Naš cilj je <strong> kvalitetna, hitra storitev in zadovoljna stranka</strong>.

Kontaktirajte nas in dogovorili se bomo.<br>

Matjaž Zaletelj</p>
</div>
<div class="slika">
<img src="slike/Kmetijska-Mehanizacija.PNG" alt="Kmetijska Mehanizacija">
</div>
  </section>


  <section id="Dostava">
    <div class="text">
   <h1>Možnost dostave</h1>
<p>V našem podjetju nudimo tudi dostavo na dom oziroma izbrano lokacijo. To storitev opravljamo z avtovleko ali avtomobilsko prikolico. Za več informacij o dostavi nas kontaktirajte.
</p>
</div>
<div class="slika">
<img src="slike/stroji/20191115_162901.jpg" alt="Avtovleka" class="dostava-slika">
<img src="slike/PXL_20240323_102910688.jpg" alt="Prikolica" class="dostava-slika">
</div>
  </section>

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