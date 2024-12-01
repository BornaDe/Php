<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brojanje riječi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            text-align: center;
            padding: 20px;
        }
        form {
            display: inline-block;
            margin-top: 20px;
            padding: 20px;
            border: 2px solid #007bff;
            border-radius: 10px;
            background-color: #fff;
            width: 300px;
            text-align: left;
        }
        input[type="text"] {
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
        p.result {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Zadatak: str_word_count</h1>
    <form method="post" action="">
        <label for="sentence">Unesi rečenicu:</label>
        <input type="text" id="sentence" name="sentence" placeholder="Upiši svoju rečenicu ovdje" required>
        <button type="submit">Izračunaj broj riječi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dohvaćanje unesene rečenice
        $sentence = $_POST['sentence'];

        // Prebrojavanje riječi u rečenici
        $wordCount = str_word_count($sentence);

        // Prikaz rezultata
        echo "<p class='result'>Ulazni niz: \"$sentence\"</p>";
        echo "<p class='result'>Broj riječi: <strong>$wordCount</strong></p>";
    }
    ?>
</body>
</html>
