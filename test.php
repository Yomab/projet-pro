<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <title>Heartstone Normandy Arena</title>
    </head>
    <body>
    <div class=''>
<form style="position: relative;" method="GET" action="">
    <img class= 'responsive-img'src="assets/img/bodyContent/fondinscription.jpg"  />
    <div style="position: absolute; left: 10rem; top: 7rem;">
      <div class="row margin">
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="user_lastName" name="user_lastName" type="text" class="validate" required />
          <label for="user_lastName" class="center-align brown-text text-darken-4">Nom :</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="user_firstName" name="user_firstName" type="text" class="validate" required />
          <label for="user_firstName" class="center-align brown-text text-darken-4">Prénom :</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="user_pseudo" name="user_pseudo" type="text" class="validate" required />
          <label for="user_pseudo" class="center-align brown-text text-darken-4">Pseudo :</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="user_email" name="user_email" type="email" class="validate" required />
          <label for="user_email" class="center-align brown-text text-darken-4">Email :</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
          <input id="user_password" name="user_password" type="password" class="validate" required />
          <label for="user_password"class="center-align brown-text text-darken-4">Mot de passe :</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
          <input id="confirm_password" name="confirm_password" type="password" required />
          <label for="confirm_password" class="center-align brown-text text-darken-4">Confirmation mot de passe :</label>
        </div>
      </div>
    </div>
</form>
</div>
<script src = "https://code.jquery.com/jquery-3.4.0.js" integrity = "sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin = "anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="main.js"></script>
</body>
</html>
