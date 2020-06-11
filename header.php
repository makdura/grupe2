<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles/style.css">


    <title>UAB DGMTV ir ko</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "birzelis2121";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if (!$conn->connect_error) {



        if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["bankid"])) {

            $name = $_GET["name"];
            $email = $_GET["email"];
            $bankid = $_GET["bankid"];


            $sql = "INSERT INTO scamers (id, name, email, bankid) VALUES (null, '$name', '$email', '$bankid')";

            if ($conn->query($sql) === TRUE) {
                header("Location: index.php?status=success");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }

    }
    ?>

    <ul id="dropdown1" class="dropdown-content">
        <li><a href="mailto:someone@example.com">Imones Galva</a></li>
        <li><a href="mailto:someone@example.com">Imones Peciai</a></li>
        <li><a href="mailto:someone@example.com">Imones Alkunes</a></li>
        <li><a href="mailto:someone@example.com">Imones Skrandis</a></li>
        <li><a href="mailto:someone@example.com">Imones Kojos</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="mailto:someone@example.com">Imones Galva</a></li>
        <li><a href="mailto:someone@example.com">Imones Peciai</a></li>
        <li><a href="mailto:someone@example.com">Imones Alkunes</a></li>
        <li><a href="mailto:someone@example.com">Imones Skrandis</a></li>
        <li><a href="mailto:someone@example.com">Imones Kojos</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <a href="images/3DGMTV.png" class="brand-logo">
                <img class="pagrlogo" src="images/3dgmtv.png" alt="logo">
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Pagrindinis puslapis</a></li>
                <li><a href="gallery.php">Portfolio</a></li>
                <li><a href="about.php">Apie mus</a></li>
                <li><a href="contacts.php">Kontaktai</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Greitas susisiekimas<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">Pagrindinis puslapis</a></li>
        <li><a href="gallery.php">Portfolio</a></li>
        <li><a href="about.php">Apie mus</a></li>
        <li><a href="contacts.php">Kontaktai</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Greitas susisiekimas<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>

    <!-- Čia pasikartojanti visuose puslapiuose viršutinė dalis -->