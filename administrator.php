<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
    <div class="stroji-container-admin">
        <?php
        // Povezava z podatkovno bazo
        $conn = new mysqli('localhost', 'root', '', 'registracija');

        // Preverjanje povezave
        if ($conn->connect_error) {
            die("Povezava ni uspela: " . $conn->connect_error);
        }

        // Preverjanje, ali je bil obrazec poslan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['save'])) {
            // Izvajamo poizvedbo samo, če je bilo polje checkboxes poslano s formularjem
            if(isset($_POST['checkboxes'])) {
                // Izberemo vse stroje iz podatkovne baze
                $sql_select_all = "SELECT ime FROM stroji";
                $result_all = $conn->query($sql_select_all);

                // Iteriramo skozi vse stroje in posodobimo stanje glede na checkboxe
                while ($row_all = $result_all->fetch_assoc()) {
                    $ime_datoteke = $row_all["ime"];

                    // Če je checkbox za trenutni stroj označen, uporabimo vrednost 1, sicer uporabimo vrednost 0
                    $value = isset($_POST['checkboxes'][$ime_datoteke]) ? 1 : 0;

                    // Posodobimo stanje checkboxa v podatkovni bazi
                    $sql_update = "UPDATE stroji SET stanje = '$value' WHERE ime = '$ime_datoteke'";
                    $conn->query($sql_update);
                }

                // Sprostitev rezultata
                $result_all->free();

                echo "Prikaz strojev je bil posodobljen!";
            }
        }
    }
        // Izvajanje poizvedbe za pridobitev imen strojev
        $sql = "SELECT ime, stanje FROM stroji";
        $result = $conn->query($sql);

        // Preverjanje, ali so bile vrnjene vrstice
        if ($result->num_rows > 0) {
            // Prikaz strojev in checkboxev
            while ($row = $result->fetch_assoc()) {
                $ime_datoteke = $row["ime"];
                $stanje = $row["stanje"];
               // echo "Ime datoteke: $ime_datoteke, Stanje: $stanje"; 
                echo '<div class="stroji-container">';
                include "stroji/$ime_datoteke"; // Vključi datoteko za prikaz stroja
                echo '<div class="checkbox-wrapper-45">';
                echo '<input id="checkbox-' . $ime_datoteke . '" type="checkbox" name="checkboxes[' . $ime_datoteke . ']" value="1"';
                if ($stanje == 1) {
                    echo " checked";
                }
                echo '>';
                echo '<label class="cbx" for="checkbox-' . $ime_datoteke . '">Prikaži stroj';
                echo '<div class="flip">';
                echo '<div class="front"></div>';
                echo '<div class="back">';
                echo '<svg width="16" height="14" viewBox="0 0 16 14">';
                echo '<path d="M2 8.5L6 12.5L14 1.5"></path>';
                echo '</svg>';
                echo '</div>';
                echo '</div>';
                echo '</label>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Ni rezultatov";
        }

        // Sprostitev rezultata
        $result->free();

        // Zapiranje povezave
        $conn->close();
        ?>
    </div>

    <div class="administratorGumbi">
        <button type="submit" name="save" class="saveGumb">Shrani</button>
        <a href="logout.php" class="logoutGumb">Log out</a>
    </div>
</form>

</body>
</html>


<?php /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Obrazec je bil poslan.";
    var_dump($_POST);
} */ ?>

