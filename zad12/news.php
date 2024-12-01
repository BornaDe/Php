<?php
// Postavljanje kolačića
setcookie("student", "Pero Perić", time() + (86400 * 7), "/"); // Vrijedi 7 dana
setcookie("predmet", "Programiranje web aplikacija", time() + (86400 * 7), "/");
setcookie("datum", date("d-m-Y"), time() + (86400 * 7), "/");

// Poruka korisniku
echo "Kolačići su postavljeni. <a href='index.php'>Pogledajte kolačiće</a>.";
?>
