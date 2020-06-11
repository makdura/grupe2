<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita</title>
</head>

<body>
    <?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Vardas</th><th>Email</th><th>Banko Info</th></tr>";

    class TableRows extends RecursiveIteratorIterator
    {
        function __construct($it)
        {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current()
        {
            return "<td style='width: 150px; border: 1px solid black;'>" . parent::current() . "</td>";
        }

        function beginChildren()
        {
            echo "<tr>";
        }

        function endChildren()
        {
            echo "</tr>" . "\n";
        }
    }
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