<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <style>
      .dogodki {
        display: none; /* Privzeto skrijemo vse dogodke */
      }
    
      .aktivni-dogodki {
        display: block; /* Prikažemo aktivne dogodke */
      }
    </style>

</head>
<body>
 
  <section id="glava">
    Zaletelj.sp

    <div class="menu-bar">
      <ul id="navbar">
        <li><a href="doma.php">Domov</a></li>
        <?php include 'menu.php'; ?>
        <li><a href="http://localhost/Seminarska%20naloga%20matura/Stroji.php">Novi stroji</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
        <li><a class="active" href="dogodki.php">Aktualno/arhiv dogodkov</a></li>
        <a href="#" id="close"><i class="fas fa-times"></i></a>
        <?php
            session_start(); 
            if (isset($_SESSION['user_id'])) {
              echo '<li><a class="loginout btnLogin-popup" href="logout.php">Log out</a></li>';
            } else {
                echo '<li><a class="loginout btnLogin-popup" href="login.php">Login</a></li>';
            }
            ?>
      </ul>
    </div>
    <div id="mobile">
      <i id="bar" class="fas fa-outdent"></i>
    </div>
  </section>
  
  <section id="naslovnica-dogodki"> 
  <h1>DOGODKI</h1>
  <h3>Tu najdete aktualne sejme in druge dogodke, pa tudi arhivirane aktivnosti.
</h3>

  </section>

<section id="arhiv-dogodkov">
  <div id="stran-1" class="dogodki aktivni-dogodki"><!--vse v tem div-u se nahaja na prvi strani-->
    <span>ARHIV DOGODKOV</span>

    <h1>Popust - Gregorjev sejem 8. - 10.3.2024</h1>
<p>V času Gregorjevega sejma 8. - 10.3.24 nudimo posebne akcijske cene za stroje Majevica in gratis prevoz za stroje Majevica in Vicon do 100 km. <br>
 Akcija velja do odprodaje zalog. <br>Lepo vabljeni na naslov podjetja. </p>


    <h1>Sejem / Komenda 22. - 24.3.2024</h1>
    <p>V času sejma 22. - 24.3.24 nudimo posebne akcijske cene za stroje Majevica in gratis prevoz za stroje Majevica in Vicon do 100 km. <br> Akcija velja do odprodaje zalog.
    Lepo vabljeni na sejem v Komendo in / ali na domač naslov.</p>

    <h1>Sejem Komenda; 6. - 8. 10. 2023</h1>
    <img src="slike/stroji/prikolica 1 stranica  in sod 2400 l.jpg" alt="Sejem" class="dogodek-slika">

    <h1>Sejem Komenda 31.3. - 2.4.2023</h1>
    <p>Dobrodošli na sejmu v Komendi. Sejem je priložnost, da pokažemo in ponudimo najboljše ter izmenjamo mnenja, prijetno pokramljamo <br> ter krepimo sodelovanje, ki mora biti vedno dvosmerno. Vabljeni.</p>
    <img src="slike/stroji/Majevica-1-sejem-Komenda-31.3.-2.4.23-360x240.jpg" alt="Sejem" class="dogodek-slika">

    <h1>Gregorjev sejem 10. - 12.3.2023</h1>

<!--slideshow-->
<div id="slideshow-container-1" class="slideshow-container">
        <div class="slideshow-image">
            <img src="slike/stroji/Gregorjev-sejem-Novo-mesto-10.-12.3.23.jpeg" alt="Gregorjev sejem nm" class="dogodek-slika">
        </div>
        <div class="slideshow-image">
            <img src="slike/stroji/2Gregorjev-sejem-Novo-mesto-10.-12.3.23.jpeg" alt="Gregorjev sejem nm" class="dogodek-slika">
        </div>
        <div class="slideshow-image">
            <img src="slike/stroji/3Grgorjev-sejem-Novo-mesto-10.-12.3.23.jpeg" alt="Gregorjev sejem nm" class="dogodek-slika">
        </div>
        <div class="slideshow-image">
            <img src="slike/stroji/vicon-Gregorjev-sejem.jpeg" alt="Gregorjev sejem nm" class="dogodek-slika">
        </div>
        <div class="slideshow-nav">
          <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
          <div class="slideshow-counter"></div> <!--dodan div za prikaz trenutne slike-->
          <button class="next" onclick="plusSlides(1)">&#10095;</button>
      </div>
    </div>
    
    <h1>Sejem Komenda, 7. - 9. 10. 2022</h1>
<p>Na razstavnem prostoru v Komendi sta na ogled dve prikolici Majevica, 5 t.; ena ima zračne zavore in eno stranico ter okno za žito, <br>
  ena pa hidravlične zavore in dve stranici. Mogoče vas zanima dvoredna sejalnica za koruzo in 2400 l sod za montažo na podvozje.<br>
   Ostale velikosti oz. možnosti pokažemo v katalogu oz. jih lahko vidite na spletni strani www.zaletelj.si.<br>
 Na razstavi je še cisterna 3200 l, trosilec hlevskega gnoja ter kembridž valjar za pred ali po setvi. Možnost dostave. <br>
Izdelke Vicon lahko vidite na razstavnem prostoru podjetja TO-DA d.o.o., ki pokriva Gorenjsko območje, jaz pa sem zastopnik za Dolenjsko in Belo krajino. <br>
Na snidenje, Matjaž.</p>
<img src="slike/stroji/sejem Komenda 7.-9.10.22/Majevica,Komenda 2022,2.jpeg" alt="Sejem Komenda" class="dogodek-slika">

<h1>Sejem Agra, Gornja Radgona, 20. - 25.8.2022. Vabljeni.</h1>
<p>Razstavni prostor je v bližini živali oz. ob hlevu. Na ogled sta dve prikolici Majevica, 5 t.; ena ima zračne zavore in eno stranico, <br>
 ena pa hidravlične zavore in dve stranici ter dvoredna sejalnica za koruzo in 2400 l sod za montažo na podvozje. <br>
  Ostale velikosti oz. možnosti pokažemo v katalogu oz. na spletni strani. Možnost dostave. <br>
  Izdelke Vicon lahko vidite na razstavnem prostoru podjetja Trakom, ki pokriva Štajersko območje, jaz pa sem zastopnik za Dolenjsko in Belo krajino.<br>
  Na snidenje, Matjaž.</p>

  <img src="slike/stroji/Sejem-Agra-Gornja-Radgona.jpeg" alt="Sejem Komenda" class="dogodek-slika">

<h1>Gregorjev sejem</h1>
<p>Gregorjev sejem Supernova (Qlandia) Novo mesto, od 25. do 27. marca 2022. Lepo vabljeni.</p>

</div>

<div id="stran-2" class="dogodki"> <!--vse na v tem div-u se nahaja na drugi strani-->
<h1>Sejem Komenda 01.-03.10.2021</h1>
<img src="slike/stroji/Sejem-Komenda-360x240.jpg" alt="Sejem Komenda" class="dogodek-slika">

<h1><a href="https://ce-sejem.si/sejmi/agritech/" target="_blank">Agritech</a> - sejem kmetijske in gozdarske mehanizacije, Celje: 29.1. - 2.2.2020</h1>
<p>Vabljeni na razstavni prostor podjetja Trakom d.o.o., kjer bomo prisotni poskrbeli, <br> 
da boste dobili prave informacije o strojih Vicon, Same …, da se boste lažje odločili.<br>
Lepo vabljeni v Celje.</p>

<h1>Komenda - jesen 2019</h1>
<p>Lepo vabljeni na sejem v Komendo od 4. do 6. oktobra 2019.</p>

<h1>Komenda - jesen 2019</h1>
<p>Lepo vabljeni na sejem v Komendo od 4. do 6. oktobra 2019.</p>

<h1>Sejem Komenda, 12. - 14. april 2019. Lepo vabljeni.</h1>

<h1>Gregorjev sejem, Qlandia Novo mesto, 8.-10. marec 2019 => lepo vabljeni</h1>

<h1>3. belokranjski sejem Požek d.o.o., Semič, 1.-3. marec 2019 => lepo vabljeni na sončno stran Gorjancev</h1>

<h1>1. Agritech v Celju</h1>
<p>Agritech (1. tovrstni na Celjskem sejmu)<br>
Vabljeni od 30.1. do 3.2.2019 na Celjski sejem; 1. Agritech (prvi kmetijski sejem  v Celju, ki je podoben tistemu v Gornji Radgoni).</p>

<h1>Vabljeni na mednarodni kmetijsko-živilski sejem AGRA od 25. do 30. avgusta 2018.</h1>

<h1>Vabljeni na demonstracijo strojev Vicon in drugih na smučišče Gače (pri Črmošnjicah), 7. julija 2018</h1>
<p>Bela krajina in Novo mesto Datum: 28.6.2018
Vabilo:<br>
SK Bela krajina in SK Novo mesto pripravljata predstavitev strojev senene linije. Predstavitev bo potekala 7.7.2018 na smučišču <br>
Gače d.o.o., Komarna vas 155 v občini Semič s pričetkom ob 10 uri.<br>
Predstavili bomo SENENI program podjetja VICON ( košnja, obračanje, grabljenje in spravilo ), traktorje NEW HOLLAND ter samohodne<br>
 kosilnice AEBI in RAPID. Na prizorišču sem nam bo pridružilo tudi Podjetje VIRC d.o.o. iz Novega mesta in bo predstavil folijo<br>
  Silograss in Polybale. Dostopalo se bo tudi do aplikacije GERK na terenu preko linka: www.gerknaterenu.si Predstavilo se bo tudi<br>
   dostavno vozilo TOYOTA hi lux pick up, ki ga bo zastopalo TPV d.o.o. iz Novega mesta.<br>

Program predstavitve:<br>
10.00 košnja z čelno kosilnico, bočno kosilnico,<br>
10.15 obračanje z nošenim obračalnikom<br>
10.30 košnja na strmini s samohodno kosilnico - Rapid - kdor želi, lahko tudi preizkusi stroj<br>
11.15 košnja na strmini s samohodno kosilnico - Aebi - kdor želi, lahko tudi preizkusi stroj<br>
12.00 blagoslov vseh kmetijskih strojev<br>
12.30 kosilo<br>
13.00 grabljenje z voženim obračalnikom, grabljenje z nošenim obračalnikom<br>
13.15 spravilo<br>
14.00 zaključek in družabno srečanje<br>
Za obiskovalce bo poskrbljeno z hrano ter pijačo. Prav tako bojo prisotni vozniki svojih jeklenih konjičkov dobili ob vstopu na Gače bon za pijačo ter hrano.<br>
Vsi lepo vabljeni na nepozabno gorsko košnjo in spravilo sena z SK BELA KRAJINA in SK NOVO MESTO.<br>
Predsednik: S.K. Bele krajine in S.K. Novo mesto<br>
Marko Pečarič, Boštjan Hrovatič</p>

</div>

<button id="gumb-stran-1" class="gumb-dogodek" onclick="prikaziStran(1)">1</button>
<button id="gumb-stran-2" class="gumb-dogodek" onclick="prikaziStran(2)">2</button>

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