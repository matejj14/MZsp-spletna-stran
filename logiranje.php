
    <?php
session_start(); // Začetek seje za shranjevanje podatkov o uporabniku

// Preverjanje, ali so posredovani podatki za prijavo
if(isset($_POST['Email'], $_POST['Geslo'])) {
    
    // Pridobitev posredovanih podatkov
    $Email = $_POST['Email'];
    $Geslo = $_POST['Geslo'];

    // Povezava z bazo podatkov
    $conn = new mysqli('localhost', 'root', '', 'registracija');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }

    // Priprava poizvedbe za pridobitev gesla povezanega z e-poštnim naslovom
    $stmt = $conn->prepare("SELECT Uime, Email, Geslo FROM registracija WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();
   

    // Preverjanje, ali je uporabnik z vnešenim e-poštnim naslovom registriran
if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Preverjanje pravilnosti gesla
    if ($Geslo === $row['Geslo']) {
        // Preverjanje, ali je uporabnik administrator
        if ($row['Uime'] === 'Administrator') {
            // Uporabnik je administrator, izvedite ustrezno dejanje (na primer preusmeritev na upravni panel)
            $_SESSION['user_id'] = $row['Uime'];
            header("Location: ../administrator.php");
            exit();
        } else {
            // Uporabnik ni administrator, preusmeritev na običajno stran
            $_SESSION['user_id'] = $row['Uime'];
            header("Location: ../doma.php");
            exit();
        }
    } 
    else{
        die("Napačno geslo! <a href='../login.php'>Nazaj</a>");
    }
    }
    
     else {
        // Uporabnik z vnešenim e-poštnim naslovom ni registriran
        die("Uporabnik s tem e-poštnim naslovom ni registriran! <a href='../login.php'>Nazaj</a>");
    }
} 
?>

    

