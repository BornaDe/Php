<?php
// Inicijalizacija sesije
session_start();

// Postavljanje podataka u sesiju
$_SESSION['student'] = "Pero Perić";
$_SESSION['predmet'] = "Programiranje web aplikacija";
$_SESSION['datum'] = date("d-m-Y");

// Poruka korisniku
echo "Podaci su spremljeni u sesiju. <a href='index.php'>Prikaži podatke iz sesije</a>.";
?>
