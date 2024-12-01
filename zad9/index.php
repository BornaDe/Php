<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status dućana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        .status {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
        .open {
            color: green;
        }
        .closed {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Provjera statusa dućana</h1>
    <?php
    // Definiranje državnih praznika (format: MM-DD)
    $holidays = ["01-01", "05-01", "12-25", "12-26"]; // Primjeri: Nova godina, Praznik rada, Božić, Sveti Stjepan

    // Dohvaćanje trenutnog vremena i datuma
    $currentDate = new DateTime();
    $currentTime = (int)$currentDate->format('H'); // Trenutni sat
    $currentDay = $currentDate->format('N'); // Trenutni dan u tjednu (1 = ponedjeljak, 7 = nedjelja)
    $currentHoliday = $currentDate->format('m-d'); // Format za provjeru praznika

    // Provjera statusa
    if (in_array($currentHoliday, $holidays)) {
        echo "<p class='status closed'>Dućan je zatvoren zbog praznika.</p>";
    } elseif ($currentDay == 7) { // Nedjelja
        echo "<p class='status closed'>Dućan je zatvoren jer je nedjelja.</p>";
    } elseif ($currentDay == 6) { // Subota
        if ($currentTime >= 9 && $currentTime < 14) {
            echo "<p class='status open'>Dućan je otvoren.</p>";
        } else {
            echo "<p class='status closed'>Dućan je zatvoren (subota).</p>";
        }
    } else { // Ostali dani
        if ($currentTime >= 8 && $currentTime < 20) {
            echo "<p class='status open'>Dućan je otvoren.</p>";
        } else {
            echo "<p class='status closed'>Dućan je zatvoren.</p>";
        }
    }
    ?>
</body>
</html>
