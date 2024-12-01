<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konačna ocjena</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        form {
            display: inline-block;
            background-color: #fff;
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
        }
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
        .negative {
            color: red;
        }
        .positive {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Konačna ocjena</h1>
    <form method="post" action="">
        <label for="kolokvij1">Ocjena I. kolokvija:</label>
        <input type="number" id="kolokvij1" name="kolokvij1" min="1" max="5" required>
        <br>
        <label for="kolokvij2">Ocjena II. kolokvija:</label>
        <input type="number" id="kolokvij2" name="kolokvij2" min="1" max="5" required>
        <br>
        <button type="submit">Izračunaj</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kolokvij1 = $_POST['kolokvij1'];
        $kolokvij2 = $_POST['kolokvij2'];

        if ($kolokvij1 < 1 || $kolokvij1 > 5 || $kolokvij2 < 1 || $kolokvij2 > 5) {
            echo "<p class='result negative'>Ocjene moraju biti između 1 i 5!</p>";
        } elseif ($kolokvij1 == 1 || $kolokvij2 == 1) {
            echo "<p class='result negative'>Krajnja ocjena je negativna zbog negativnog kolokvija.</p>";
        } else {
            $prosjek = ($kolokvij1 + $kolokvij2) / 2;
            $konacnaOcjena = round($prosjek); // Zaokruživanje na najbliži cijeli broj
            echo "<p class='result positive'>Prosjek: $prosjek<br>Konačna ocjena: $konacnaOcjena</p>";
        }
    }
    ?>
</body>
</html>
