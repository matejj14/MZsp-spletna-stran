<?php
$Uime = $_POST['Uime'];
$Email = $_POST['Email'];
$Geslo = $_POST['Geslo'];

// Povezava z podatkovno bazo
$conn = new mysqli('localhost','root','','registracija');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}

if (empty($_POST["Uime"])) {
    die("Uporabniško ime je potrebno <a href='../login.php'>Nazaj</a>");
}

if ( ! filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
    die("Vnesite veljaven email naslov <a href='../login.php'>Nazaj</a>");
}

if (strlen($_POST["Geslo"]) < 5) {
    die("Geslo mora biti sestavljeno iz vsaj 5 znakov! <a href='../login.php'>Nazaj</a>");
}

if ( ! preg_match("/[a-z]/i", $_POST["Geslo"])) {
    die("Geslo mora vsebovati vsaj eno črko! <a href='../login.php'>Nazaj</a>");
}

// Preverjanje, ali vneseno uporabniško ime ali e-poštni naslov že obstajata v podatkovni bazi
$stmt_check_username = $conn->prepare("SELECT COUNT(*) AS count_username FROM registracija WHERE Uime = ?");
$stmt_check_username->bind_param("s", $_POST["Uime"]);
$stmt_check_username->execute();
$result_username = $stmt_check_username->get_result();
$row_username = $result_username->fetch_assoc();
$count_username = $row_username['count_username'];

$stmt_check_username->close();

$stmt_check_email = $conn->prepare("SELECT COUNT(*) AS count_email FROM registracija WHERE Email = ?");
$stmt_check_email->bind_param("s", $_POST["Email"]);
$stmt_check_email->execute();
$result_email = $stmt_check_email->get_result();
$row_email = $result_email->fetch_assoc();
$count_email = $row_email['count_email'];

$stmt_check_email->close();

if ($count_username > 0) {
    die("Uporabniško ime že zasedeno. <a href='../login.php'>Nazaj</a>");
}

if ($count_email > 0) {
    die("Na spletni strani že obstaja profil s tem E-mail naslovom. <a href='../login.php'>Nazaj</a>");
}

// Če uporabniško ime ali e-poštni naslov nista zasedena, nadaljujemo s postopkom registracije
$stmt = $conn->prepare("INSERT INTO registracija (Uime, Email, Geslo) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $_POST["Uime"], $_POST["Email"], $_POST['Geslo']);

if ($stmt->execute()) {
    header("Location: registriran.html");
    exit;
} else {
    die("Napaka pri izvajanju poizvedbe: " . $stmt->error);
}

?>
