<?php include "header.php" ?>

<!-- Čia kontaktų puslapio vidinė dalis -->

<div class="container ">
    <div class="BendraInfo">
        <h1>Mūsų smagus kolektyvas</h1>
        <img class="responsive-img" src="images/about.jpg" alt="Bendra nuotrauka">
        <p class="flow-text center-align">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas et esse dolor nam rerum tenetur similique cupiditate optio reprehenderit saepe, delectus voluptatum quaerat, reiciendis ex. Neque, obcaecati? Non, repellat omnis?
        </p>
    </div>
    <!-- <div class="Darbuotojai"> -->
    <!-- <div class="row"> -->


    <!-- <div class="col s3 center-align"> -->
    <!-- <img class="responsive-img" src="images/person_1.jpg" alt="Darbuotojo nuotrauka1"> -->
    <!-- </div> -->
    <!-- <div class="col s3 center-align"> -->
    <!-- <p class="flow-text center-align">Jonas Jonaitis Telefonas Emailas </p> -->
    <!-- </div> -->

    <!-- <div class="col s3  center-align"> -->
    <!-- <img class="responsive-img" src="images/person_4.jpg" alt="Darbuotojo nuotrauka2"> -->
    <!-- </div> -->
    <!-- <div class="col s3  center-align"> -->
    <!-- <p class="flow-text center-align"> -->
    <!-- Petras Petraitis -->
    <!-- Telefonas -->
    <!-- Emailas -->
    <!-- </p> -->
    <!-- </div> -->


    <!-- </div> -->
    <!-- </div> -->

    <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="images/person_4.jpg">
            <p class="blue-text text-darken-4"> Dominykas - griebią reikalą už ragų</p>
        </a>
        <a class="carousel-item" href="#two!"><img src="images/person_1.jpg">
            <p class="blue-text text-darken-4">Teodoras - jis žino kaip</p>
        </a>
        <a class="carousel-item" href="#three!"><img src="images/speaker-3.jpg">
            <p class="blue-text text-darken-4">Valdemar - idėjų maišas</p>
        </a>
        <a class="carousel-item" href="#four!"><img src="images/guest-2.jpg">
            <p class="blue-text text-darken-4">Mantas- neapsigauk, jis padaro nu žiauriai gerai</p>
        </a>
        <a class="carousel-item" href="#five!"><img src="images/speaker-5.jpg">
            <p class="blue-text text-darken-4">Genadijus - pamatysim, pažiūrėsim</p>
        </a>
    </div>

    

        <div class="chip">
            <img src="images/person_4.jpg" alt="Dominykas">
            <a target="_blank" href="https://www.youtube.com/watch?v=btPJPFnesV4">Dominykas</a>
        </div>
        <div class="chip">
            <img src="images/person_1.jpg" alt="Teodoras">
            <a target="_blank" href="https://www.youtube.com/watch?v=btPJPFnesV4">Teodoras</a>
        </div>
        <div class="chip">
            <img src="images/speaker-3.jpg" alt="Valdemar">
            <a target="_blank" href="https://www.youtube.com/watch?v=btPJPFnesV4">Valdemar</a>
        </div>
        <div class="chip">
            <img src="images/guest-2.jpg" alt="Mantas">
            <a target="_blank" href="https://www.youtube.com/watch?v=btPJPFnesV4">Mantas</a>
        </div>
        <div class="chip">
            <img src="images/speaker-5.jpg" alt="Genadijus">
            <a target="_blank" href="https://www.youtube.com/watch?v=btPJPFnesV4">Genadijus</a>
        </div>
  






    <!-- Google maps !!!!!!!!!!!!!!!!!!!! -->

    <h5 id="zemelapis">Mes esame gražiausioje Lietuvos vietoje:</h5>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {
                lat: 54.688380,
                lng: 25.290080
            };
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 12,
                    center: uluru
                });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDV6bBDWBXNGjglxmMSXrhUEpuPWItjCRM&callback=initMap">
    </script>

</div>



<?php include "footer.php" ?>