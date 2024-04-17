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
<body id="login-page">
 
  
<div class="wrapper">
    <div class="close">
     <a href="doma.php">Nazaj</a>
    </div>
    <div class="form-box login">
      <h2>Login</h2>
      <form action="phpdat/logiranje.php" method="post">
        <div class="input-box">
          <span class="fas fa-envelope"></span>
          <input type="email" required name="Email">
          <label>Email</label>
        </div>
        <div class="input-box">
          <span class="fas fa-lock"></span>
          <input type="password" required name="Geslo">
          <label>Geslo</label>
        </div>
        <!--
        <div class="remember-forgot">
          <label><input type="checkbox">
          Zapomni si me</label>
          <a href="#">Pozabljeno geslo?</a>
        </div>
-->
        <button type="submit" class="btn">Login</button>
        <div class="login-register">
          <p>Nimate profila?<a href="#" class="register-link">Registracija</a></p>
        </div>
      </form>
    </div>

    <div class="form-box register">
        <h2>Registracija</h2>
        <form action="phpdat/registracija.php" method="post"> <!--post skrije podatke-->
            <div class="input-box">
                <span class="fas fa-user"></span>
                <input type="text" required name="Uime">
                <label>Uporabniško ime</label>
              </div>
          <div class="input-box">
            <span class="fas fa-envelope"></span>
            <input type="email" required name="Email">
            <label>Email</label>
          </div>
          <div class="input-box">
            <span class="fas fa-lock"></span>
            <input type="password" required name="Geslo">
            <label>Geslo</label>
          </div>
          
          <button type="submit" class="btn">Registriraj me</button>
          <div class="login-register">
            <p>Že imate profil?<a href="#" class="login-link">Login</a></p>
          </div>
        </form>
      </div>
  </div>

</body>
</html>