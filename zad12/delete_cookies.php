<?php
// Brisanje svih kolačića
if (isset($_COOKIE)) {
    foreach ($_COOKIE as $key => $value) {
        setcookie($key, "", time() - 3600, "/"); // Istekli kolačić
    }
}

// Poruka korisniku
echo "Kolačići su obrisani. <a href='index.php'>Pogledajte ponovo</a>.";
?>
