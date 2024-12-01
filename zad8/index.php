<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izbor vozila</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        form {
            display: inline-block;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #007bff;
            border-radius: 10px;
            background-color: #fff;
            width: 300px;
            text-align: left;
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
    <h1>Izbor vozila</h1>
    <form method="post" action="">
        <p>Označi vozilo:</p>
        <?php
        // Lista vozila
        $cars = array("Audi", "BMW", "Renault", "Citroen");

        // Ispis radio buttona za svaki automobil
        foreach ($cars as $car) {
            echo "<input type='radio' name='car' value='$car' id='$car' required>";
            echo "<label for='$car'>$car</label><br>";
        }
        ?>
        <br>
        <button type="submit">Prikaži odabrano vozilo</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dohvaćanje odabranog vozila
        $selectedCar = $_POST['car'];
        echo "<p class='result'>Odabrali ste: <strong>$selectedCar</strong></p>";
    }
    ?>
</body>
</html>
