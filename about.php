<?php include "header.php" ?>

<!-- Čia apie puslapio vidinė dalis -->

<div class="ApieInfo">

  <h1>Apie mus</h1>

  <img class="responsive-img" src="images/workshop.jpg" alt="Dirbam">

  <p class="flow-text center-align">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum eos consectetur, voluptatem fuga perferendis numquam, ea incidunt excepturi necessitatibus, eum quas quisquam tempore. Quo amet illum provident atque similique omnis!</p>

  <div class="row center-align">
    <div class="col s12 m6 l3">
      <img class="responsive-img materialboxed" src="images/apie1.jpg" alt="nuotrauka1">
      <h6>Viską darom</h6>
    </div>

    <div class="col s12 m6 l3">
      <img class="responsive-img materialboxed" src="images/apie2.jpg" alt="nuotrauka2">
      <h6>Darom ką norim</h6>
    </div>

    <div class="col s12 m6 l3">
      <img class="responsive-img materialboxed" src="images/apie3.jpg" alt="nuotrauka3">
      <h6>Vėl viską darom</h6>
    </div>

    <div class="col s12 m6 l3">
      <img class="responsive-img materialboxed" src="images/apie4.jpg" alt="nuotrauka4">
      <h6>Kažką darom</h6>

    </div>


  </div>



  <div class="comentPosition">
  <div class="row">
    <form class="col s12 offset-l1">
      <div class="row">
        <div class="input-field col s10">
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2" class="blue-text text-darken-4"> Įdomu ką darom? Pat sugalvok ką veikti</label>
        </div>
      </div>
    </form>
  </div>
</div>

<ul class="collapsible">
  <li>
    <div class="collapsible-header">Darom</div>
    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
  </li>
  <li>
    <div class="collapsible-header">Dirbam</div>
    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
  </li>
  <li>
    <div class="collapsible-header">Padarom</div>
    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
  </li>
</ul>

<br>


</div>

<div class="tost">
  <a onclick="M.toast({html: 'Mes viską baigę!'})" class="btn2">Apie mus mus mus mus mus!</a>
</div>
















<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="scripts/script.js"></script>








<!-- nusibodo zaisti -->
<!-- <div class="comentPosition">
    <div class="row">
      <form class="col s12 offset-l1">
        <div class="row">
          <div class="input-field col s10">
            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
            <label for="icon_prefix2"> Įdomu ką darom? Pat sugalvok ką veikti</label>
          </div>
        </div>
      </form>
    </div>
  </div>

</div> -->









<?php include "footer.php" ?>