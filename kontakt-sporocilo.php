<?php
// Preverimo, ali je bil obrazec poslan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preverimo, ali je uporabnik prijavljen
    session_start();
    if (!isset($_SESSION['user_id'])) {
        die("Niste prijavljeni. Za pošiljanje sporočil se morate prijaviti.");
    }

    // Pridobimo uporabniško ime prijavljenega uporabnika
    $username = $_SESSION['user_id'];

    // Povezava z bazo podatkov
    $conn = new mysqli('localhost', 'root', '', 'registracija');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Pridobimo podatke uporabnika iz tabele registracija
    $stmt = $conn->prepare("SELECT Uime, Email FROM registracija WHERE Uime = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Preverimo, ali je bila najdena ustrezna vrstica
    if ($result->num_rows == 1) {
        // Pridobimo podatke uporabnika
        $row = $result->fetch_assoc();
        $Uime = $row['Uime'];
        $Email = $row['Email'];

        // Podatki iz obrazca
        $zadeva = $_POST["zadeva"];
        $sporocilo = $_POST["sporocilo"];

         // Preverimo, ali sta polji zadeva in sporocilo izpolnjeni
         if (empty($zadeva) || empty($sporocilo)) {
            die("Zahtevani so vsi podatki (zadeva in sporočilo) za pošiljanje sporočila.");
        }

        // Priprava SQL stavka za vstavljanje podatkov
        $sql = "INSERT INTO sporocila (Uime, Email, zadeva, sporocilo) VALUES (?, ?, ?, ?)";

        // Priprava pripravljenega stavka
        $stmt = $conn->prepare($sql);

        // Povezovanje parametrov s pripravljenim stavkom
        $stmt->bind_param("ssss", $Uime, $Email, $zadeva, $sporocilo);

        // Izvajanje pripravljenega stavka
        if ($stmt->execute()) {
            // Sporočilo o uspehu
            echo "Sporočilo je bilo uspešno poslano.";
        } else {
            // Sporočilo o napaki
            echo "Napaka pri pošiljanju sporočila: " . $stmt->error;
        }

        // Zapiranje pripravljenega stavka
        $stmt->close();
    } else {
        // Sporočilo, če uporabnik ni najden
        echo "Napaka: Uporabnik ni najden.";
    }

    // Zapiranje povezave z bazo podatkov
    $conn->close();
} else {
    // Sporočilo, če obrazec ni bil poslan
    echo "Obrazec ni bil poslan.";
}
?>
