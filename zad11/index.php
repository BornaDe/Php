<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosti brojevi</title>
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
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Prosti brojevi</h1>

    <form method="post" action="">
        <label for="number">Unesi broj za provjeru:</label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit">Provjeri</button>
    </form>

    <?php
    // Funkcija za provjeru je li broj prost
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Provjera unesenog broja
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        if (isPrime($number)) {
            echo "<p class='result'>$number je prost broj.</p>";
        } else {
            echo "<p class='result'>$number nije prost broj.</p>";
        }
    }

    // Ispis svih prostih brojeva manjih od 100
    echo "<div class='result'><strong>Prosti brojevi manji od 100:</strong><br>";
    for ($i = 2; $i < 100; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
    echo "</div>";
    ?>
</body>
</html>
