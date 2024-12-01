<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator (Switch naredba)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            margin: 20px;
        }
        form {
            display: inline-block;
            margin: 20px auto;
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
            margin: 5px;
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
    <h1>Kalkulator (Switch naredba)</h1>
    <form method="post" action="">
        <label for="broj1">Upiši prvi broj:</label>
        <input type="number" id="broj1" name="broj1" step="any" required>
        <br>
        <label for="broj2">Upiši drugi broj:</label>
        <input type="number" id="broj2" name="broj2" step="any" required>
        <br>
        <button type="submit" name="operation" value="+">+</button>
        <button type="submit" name="operation" value="-">-</button>
        <button type="submit" name="operation" value="*">*</button>
        <button type="submit" name="operation" value="/">/</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $broj1 = $_POST['broj1'];
        $broj2 = $_POST['broj2'];
        $operation = $_POST['operation'];
        $result = null;

        switch ($operation) {
            case "+":
                $result = $broj1 + $broj2;
                break;
            case "-":
                $result = $broj1 - $broj2;
                break;
            case "*":
                $result = $broj1 * $broj2;
                break;
            case "/":
                if ($broj2 != 0) {
                    $result = $broj1 / $broj2;
                } else {
                    $result = "Dijeljenje s nulom nije dozvoljeno!";
                }
                break;
            default:
                $result = "Nepoznata operacija!";
        }

        echo "<p class='result'>Rezultat: $result</p>";
    }
    ?>
</body>
</html>
