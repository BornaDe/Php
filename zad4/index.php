<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izračun varijable c</title>
</head>
<body>
    <h1>Izračun varijable c</h1>
    <form method="post" action="">
        <label for="a">Vrijednost a:</label>
        <input type="number" id="a" name="a" step="any" required>
        <br><br>
        <label for="b">Vrijednost b:</label>
        <input type="number" id="b" name="b" step="any" required>
        <br><br>
        <button type="submit">Pošalji</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dohvaćanje vrijednosti a i b iz forme
        $a = $_POST['a'];
        $b = $_POST['b'];

        // Izračun varijable c
        $c = (3 * $a - $b) / 2;

        // Prikaz rezultata
        echo "<h2>Rezultat:</h2>";
        echo "<p>Za a = $a i b = $b, vrijednost c iznosi: $c</p>";
    }
    ?>
</body>
</html>
