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
        <title>Create_Event</title>
    </head>
    <body class='bg1'>
      <div class="row" id="catTitle">
        <div class="center" >
      <img class="responsive-img" src="assets/img/categories/nouvelevenement.png" />

    </div>
  </div>

 <div id="register-page" class="row ">
 <div class="col s12 bg2 ">
   <form id="registerForm" class="register-form center-align" method="post" action="">
     <div class="row margin">
       <div class="input-field col s12">
         <input id="EventName" name="EventName" type="text" class="validate eventProperties" required />
         <label for="EventName" class="center-align brown-text text-darken-4">Titre de l'événement :</label>
       </div>
     </div>

     <div class="input-field col s12 HeightSelect">
     <p class="center-align brown-text text-darken-4">Mode de tournoi</p>
     <p>
    <label>
      <input class="RadioAlign" name="group1" type="radio" />
      <span class="SpanAlignCreateEvent">OnLine</span>
    </label>
  </p>
  <p>
 <label>
   <input class="RadioAlign" name="group1" type="radio" />
   <span class="SpanAlignCreateEvent">EnSalle</span>
 </label>
</p>


  </div>
  <div class="input-field col s12 HeightSelect">
    <p class="center-align brown-text text-darken-4 labelTitle">Entrée</p>
    <p>
   <label>
     <input class="RadioAlign" name="group2" type="radio" />
     <span class="SpanAlignCreateEvent">Libre</span>
   </label>
   </p>
   <p>
   <label>
   <input class="RadioAlign" name="group2" type="radio" />
   <span class="SpanAlignCreateEvent">Invitation</span>
   </label>
   </p>
</div>
<div class="input-field col s12 HeightSelect">
  <p class="center-align brown-text text-darken-4 labelTitle">Format</p>
  <p>
  <label>
   <input class="RadioAlign" name="group3" type="radio" />
   <span class="SpanAlignCreateEvent">Standard</span>
  </label>
  </p>
  <p>
  <label>
  <input class="RadioAlign" name="group3" type="radio" />
  <span class="SpanAlignCreateEvent">Wild</span>
  </label>
  </p>
</div>
<div class="input-field col s12 HeightSelect">
  <p class="center-align brown-text text-darken-4 labelTitle">Round</p>
  <p>
  <label>
   <input class="RadioAlign" name="group1" type="radio" />
   <span class="SpanAlignCreateEvent">Swiss</span>
  </label>
  </p>
  <p>
  <label>
  <input class="RadioAlign" name="group1" type="radio" />
  <span class="SpanAlignCreateEvent">Eliminatoires</span>
  </label>
  </p>
</div>
<div class="row margin">
  <div class="input-field col s12">
    <!-- <i class="material-icons prefix">perm_identity</i> -->
    <input id="NumbCaracter" name="NumbCaracter" type="number" class="validate eventProperties" required />
    <label for="NumbCaracter" class="center-align brown-text text-darken-4">Nombre Max Participants :</label>
  </div>
</div>
<div class="input-field col s12 HeightSelect">
  <p class="center-align brown-text text-darken-4 labelTitle">Cash Prize</p>
  <p>
  <label>
   <input name="group1" type="radio" />
   <span class="SpanAlignCreateEvent">oui</span>
  </label>
  </p>
  <p>
  <label>
  <input name="group1" type="radio" />
  <span class="SpanAlignCreateEvent">non</span>
  </label>
  </p>
</div>
<div class="row margin">
  <div class="input-field col s12">
    <!-- <i class="material-icons prefix">perm_identity</i> -->
    <input id="EventCreator" name="EventCreator" type="text" class="validate eventProperties" required />
    <label for="EventCreator" class="center-align brown-text text-darken-4">Nom de l'organisateur :</label>
  </div>
</div>
<div class="row margin">
  <div class="input-field col s12">
    <!-- <i class="material-icons prefix">mail</i> -->
    <input id="Creator_email" name="Creator_email" type="email" class="validate eventProperties" required />
    <label for="Creator_email" class="center-align brown-text text-darken-4">Email :</label>
  </div>
</div>
<div class="input-field col s12">
    <p class="center-align brown-text text-darken-4 labelTitle">Date de début de l'event :</p>
<input type="text" class="datepicker">
<label for="datepicker"></label>
</div>
<div class="input-field col s12">
    <p class="center-align brown-text text-darken-4 labelTitle">Date de fin de l'event :</p>
<input type="text" class="datepicker brown-text">
<label for="datepicker"></label>
</div>
<label class="center-align brown-text text-darken-4 time" for="appt">Heure de début:</label><br/>
<input type="time" id="appt" name="appt" class="center eventProperties validate" min="9:00" max="18:00" required>
   </div>
   <div class="row ">
     <div class="input-field center col s12 l12">
       <input type="submit" class=" btn waves-effect waves-light col s6 formInscription buttonEventCreate" value="valider" />
     </div>
   </div>
 </form>

      <script src = "https://code.jquery.com/jquery-3.4.0.js" integrity = "sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin = "anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="assets/materialize.js"></script>
      <script src="assets/main.js"></script>
      </body>
      </html>
