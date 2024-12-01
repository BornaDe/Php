<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Users</title>
</head>
<body>
    <h1>Search for Users</h1>
    <form method="POST" action="">
        <label for="search">Enter First Name or Last Name:</label>
        <input type="text" id="search" name="search" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Capture the input from the form
        $searchInput = $_POST['search'];

        // Database connection
        $con = mysqli_connect("localhost", "root", "123", "my_db");

        // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare the query
        $query = "SELECT firstname, lastname FROM users WHERE firstname LIKE '%$searchInput%' OR lastname LIKE '%$searchInput%'";
        $result = mysqli_query($con, $query);

        // Check if there are any results
        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Search Results:</h2>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<p>" . $row['firstname'] . " " . $row['lastname'] . "</p>";
            }
        } else {
            echo "<p>No users found matching the search criteria.</p>";
        }

        // Close the database connection
        mysqli_close($con);
    }
    ?>
</body>
</html>
