    <!-- Čia pasikartojanti visuose puslapiuose apatinė dalis -->

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Įmonės moto:</h5>
                    <p class="grey-text text-lighten-4">Tobuliausia kompanija Lietuvoje. Jei nesi su mumis, esi prieš mus. Tapk mūsų nariu:</p>

                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "birzelis2121";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }


                    if (isset($_GET["name"])) {

                        $name = $_GET["name"];
                        $email = $_GET["email"];

                        if (isset($_GET["bankid"])) {
                            $bankid = $_GET["bankid"];
                        } else {
                            $bankid = 0;
                        }
                    }

                        $sql = "INSERT INTO scamers (id, name, email, bankid) VALUES (null, '$name', '$email', '$bankid')";
                        if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                          } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                    $conn->close();
                    ?>

                    <form action="index.php">
                        <label for="name">Vardas Pavardė:</label>
                        <input type="text" name="name"><br>
                        <label for="email">E-Pašto adresas:</label>
                        <input type="text" name="email"><br>
                        <label for="experience">Jūsų banko sąskaitos kontaktinė informacija:</label><br>
                        <input type="text" name="bankid" cols="20" rows="2"></input><br>
                        <button>Registruotis!</button>
                    </form><br>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Partneriai:</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://www.maxima.lt">MAXIMA</a></li><br>
                        <li><a class="grey-text text-lighten-3" href="https://www.barclays.com">BARCLAYS</a></li><br>
                        <li><a class="grey-text text-lighten-3" href="https://www.seb.lt">SEB</a></li><br>
                        <li><a class="grey-text text-lighten-3" href="https://www.vilniuscoding.lt">Coding School</a></li><br>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Visos teisės saugomos
                <a class="grey-text text-lighten-4 right" href="index.php">Grįžti į pagrindinį puslapį -></a>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/script.js"></script>

    </body>

    </html>