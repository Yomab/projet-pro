<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/materialize.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <title>diary</title>
    </head>
    <body class="bg1">
      <div class="row" id="catTitle">
        <div class="center" >
      <img class="responsive-img" src="assets/img/categories/agenda.png" />

    </div>
  </div>
  <div class="row">
    <div class="col l4 s12">
  <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="assets/img/imagecard/balise.jpg">
      <span class="card-title"><p></p><p></p></span>
    </div>
    <div class=" card-content divCard">
   <span class=" card-title activator  grey-text text-darken-4"><a class=" modal-trigger" style="; margin-left: auto; margin-right: auto;" href="#modal1"> <img class="responsive-img imgModal" src="assets/img/categories/nouvelevenement.png"></a></span>
    </div>
  </div>
  </div>
  </div>


  <div id="modal1" class="modal">
    <div class="modal-content w-100 stylemod">
      <h4 class="h4textstyle">A propos de l'évènement</h4>
      <div class="ptextstyle">
      <ul class="Detail_event">
      <li>Date : </li>
      <li>Format :</li>
      <li>Round :</li>
      <li>Lieu :</li>
      <li>Participation :</li>
      <li>cash prize :</li>
      <li>inscription :</li>
      <li>Détail :</li>
    </ul>
  </div>
    </div>
    <div class="modal-footer">
       <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Participer</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fermer</a>
    </div>
    <div id="modal2" class="modal">
    <div class="w-100 stylemod">
      <h4 class="h4textstyle2">Inscription</h4>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">perm_identity</i>
          <input id="user_pseudo" name="user_pseudo" type="text" class="validate" required />
          <label for="user_pseudo" class="center-align brown-text text-darken-4">Pseudo :</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">mail</i>
          <input id="user_email" name="user_email" type="email" class="validate" required />
          <label for="user_email" class="center-align brown-text text-darken-4">Email :</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">perm_identity</i>
          <input id="user_gamertag" name="user_gamertag" type="text" class="validate" required />
          <label for="user_gamertag" class="center-align brown-text text-darken-4">Gamertag Blizzard :</label>
        </div>
      </div>
    </div>
  <div class="ptextstyle">
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Envoyer</a>
    </div>
  </div>
  </div>
</div>
      <script src = "https://code.jquery.com/jquery-3.4.0.js" integrity = "sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin = "anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="assets/materialize.js"></script>
      <script src="assets/main.js"></script>
      </body>
      </html>
