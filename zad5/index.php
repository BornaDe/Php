<?php
// Generiranje nasumičnog broja između 1 i 9
$randomNumber = rand(1, 9);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogodi broj</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #4caf50;
        }
        form {
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #4caf50;
            border-radius: 10px;
            width: 300px;
            background-color: #fff;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            width: 90%;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #4caf50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        p {
            font-size: 18px;
        }
        .result {
            font-weight: bold;
            padding: 10px;
            margin-top: 20px;
        }
        .correct {
            color: green;
        }
        .wrong {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Igra: Pogodi broj</h1>
    <p>Upiši jedan broj od 1 do 9:</p>
    <form method="post" action="">
        <input type="number" name="guess" min="1" max="9" required>
        <button type="submit">Pogodi, probaj ponovo!</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dohvaćanje korisnikovog broja
        $userGuess = $_POST['guess'];

        // Provjera korisnikovog unosa
        if ($userGuess == $randomNumber) {
            echo "<p class='result correct'>Točno! Zamišljeni broj je $randomNumber.</p>";
        } else {
            echo "<p class='result wrong'>Krivo, probaj ponovo! Zamišljeni broj je $randomNumber.</p>";
        }
    }
    ?>
</body>
</html>
