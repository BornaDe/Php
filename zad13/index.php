<?php
// Inicijalizacija sesije
session_start();

// Provjera postoje li podaci u sesiji
if (!empty($_SESSION)) {
    echo "<h1>Podaci iz sesije:</h1>";
    echo "<ul>";
    foreach ($_SESSION as $key => $value) {
        echo "<li><strong>$key:</strong> $value</li>";
    }
    echo "</ul>";
} else {
    echo "Nema spremljenih podataka u sesiji. <a href='news.php'>Postavite podatke</a>.";
}

// Dodavanje opcije za brisanje sesije
echo "<br><a href='delete_session.php'>Obriši podatke iz sesije</a>";
?>
