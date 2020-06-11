<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita</title>
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

            echo "<ul>";
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["name"] . $row["email"] . $row["bankid"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "0 results";
        }
        $conn->close();
    }
    ?>

</body>

</html>