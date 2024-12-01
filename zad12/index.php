<?php
// Provjera postoje li kolačići
if (count($_COOKIE) > 0) {
    echo "<h1>Podaci iz kolačića:</h1>";
    echo "<ul>";
    foreach ($_COOKIE as $key => $value) {
        echo "<li><strong>$key:</strong> $value</li>";
    }
    echo "</ul>";
} else {
    echo "Nema postavljenih kolačića. <a href='news.php'>Postavite kolačiće</a>.";
}

// Dodavanje opcije za brisanje kolačića
echo "<br><a href='delete_cookies.php'>Obriši kolačiće</a>";
?>
