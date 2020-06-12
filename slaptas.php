<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "birzelis2121";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if (!$conn->connect_error) {

        $sql = "SELECT id, name, email, bankid FROM scamers";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Bankid</th></tr>";
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["bankid"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
    }
    ?>
<br><a class="black-text right" href="index.php">Grįžti į pagrindinį puslapį -></a>
</body>

</html>