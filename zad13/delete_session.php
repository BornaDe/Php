<?php
// Inicijalizacija sesije
session_start();

// Brisanje svih podataka iz sesije
session_unset();
session_destroy();

// Poruka korisniku
echo "Podaci iz sesije su obrisani. <a href='index.php'>Pogledajte ponovo</a>.";
?>
