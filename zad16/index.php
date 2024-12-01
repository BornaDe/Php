<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija korisnika</title>
</head>
<body>
    <h1>Registracija korisnika</h1>
    <form method="POST" action="">
        <label for="firstname">Ime:</label><br>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Prezime:</label><br>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="username">Korisničko ime:</label><br>
        <input type="text" id="username" name="username" minlength="5" maxlength="20" required><br><br>

        <label for="password">Lozinka:</label><br>
        <input type="password" id="password" name="password" minlength="6" required><br><br>

        <label for="country">Država:</label><br>
        <select id="country" name="country" required>
            <option value="">Molimo odaberite</option>
            <option value="Hrvatska">Hrvatska</option>
            <option value="Srbija">Srbija</option>
            <option value="Bosna i Hercegovina">Bosna i Hercegovina</option>
            <option value="Slovenija">Slovenija</option>
        </select><br><br>

        <button type="submit">Pošalji</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Prikupljanje podataka iz forme
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashiranje lozinke
        $country = $_POST['country'];

        // Povezivanje na bazu podataka
        $con = mysqli_connect("localhost", "root", "123", "my_db");

        // Provjera povezanosti
        if (!$con) {
            die("Greška u povezivanju: " . mysqli_connect_error());
        }

        // SQL upit za unos podataka
        $query = "INSERT INTO users (firstname, lastname, email, username, password, country) 
                  VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$country')";

        if (mysqli_query($con, $query)) {
            echo "<p>Korisnik uspješno registriran!</p>";
        } else {
            echo "<p>Greška: " . mysqli_error($con) . "</p>";
        }

        // Zatvaranje veze
        mysqli_close($con);
    }
    ?>
</body>
</html>
