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
            <li><a href="Stroji.php">Novi stroji</a></li>
            <li><a class="active" href="kontakt.php">Kontakt</a></li>
            <li><a href="dogodki.php">Aktualno/arhiv dogodkov</a></li>
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

<section id="naslovnica-kontakt"> 
    <h1>KONTAKTIRAJTE NAS</h1>
    <h3>Želite ustvariti naročilo ali Vas karkoli zanima?</h3>
    <h2>Na voljo smo Vam!</h2>  
</section>

<section id="contact-details" class="section-p1">
    <div class="details">
        <h2>Stopite v stik z nami</h2>
        <div>
            <li>
                <i class="fas fa-map-marked-alt"></i>
                <p>Šmihel 3 <br> 8360 Žužemberk <br> Slovenija</p>
            </li>
            <li>
                <i class="fas fa-envelope"></i>
                <p>matjaz.za3@gmail.com</p>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>+386 31 266 841</p>
            </li>
            <li>
                <i class="fas fa-clock"></i>
                <p>pon. - pet.: 14:00-19:00 <br> sob.: 09:00 - 13:00</p>
            </li>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38492.5085402134!2d14.854422740451326!3d45.
        84076135499324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47651e038f899c23%3A0x85cb81fb7757a2b5!
        2sKmetijska%20mehanizacija%2C%20Matja%C5%BE%20Zaletelj%20s.p.!5e0!3m2!1ssl!2ssi!4v1710964907018!5m2!1ssl!2ssi" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section id="form-details">
    <form id="contactForm" action="submit_contact_form.php" method="post">
        <h2>PIŠITE NAM</h2>
        <input type="text" required name="zadeva" placeholder="Zadeva">
        <textarea required name="sporocilo" cols="30" rows="10" placeholder="Sporočilo"></textarea>
        <button type="button" onclick="checkLoginAndSubmit()">Pošlji</button>
    </form>
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

<script>
    function checkLoginAndSubmit() {
        <?php if (isset($_SESSION['user_id'])) { ?>
            var formData = new FormData(document.getElementById("contactForm"));
            fetch('kontakt-sporocilo.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Napaka pri pošiljanju sporočila.');
                }
                return response.text();
            })
            .then(data => {
                alert(data); // Sporočilo o uspehu ali napaki
            })
            .catch(error => {
                console.error('Napaka:', error);
                alert('Napaka pri pošiljanju sporočila.');
            });
        <?php } else { ?>
            window.location.href = "login.php";
        <?php } ?>
    }
</script>

</body>
</html>
