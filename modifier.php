<!DOCTYPE html>
<html id="html">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script src="Chart.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="icon.png">
        <title>N'Voté -Modifier</title>
  </head>
  <body>


<?php

try
{
   $bdd= new PDO('mysql:host=localhost;dbname=mabase', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : '. $e->getMessage());
}

/***************************************************************************************************************************/
if(!empty($_POST['mathidden']))
{
  $matricule=$_POST['mathidden'];
}
else {
  $matricule=0000000000;
}
if(!empty($_POST['nomhidden']))
{
  $nom=$_POST['nomhidden'];
}
else {
  $nom='Error';
}
if(!empty($_POST['prenomhidden']))
{
  $prenom=$_POST['prenomhidden'];
}
else {
  $prenom='Error';
}
if(!empty($_POST['emailhidden']))
{
  $email=$_POST['emailhidden'];
}
else {
  $email='error@error.com';
}
if(!empty($_POST['votehidden']))
{
  $vote=$_POST['votehidden'];
}
else {
  $vote='erreur';
}
 ?>
<div class="container-fluid">
  <header id="header">
    <div class="row">
      <div class="col-sm-12 text-center">
        <img src="logo.png" alt="N'Voté" class="img-fluid " id="logo" height="150px" width="250px">
      </div>
    </div>
    </header>

 <div class="row justify-content-md-center">
   <form action="traitement_mod.php" id="formulaire" method="post">
     <div class="form-group" id="matricule_div">
       <input type="text" name="matriculemod" class="form-control text-center" id="matricule" value="<?php  echo strip_tags($matricule); ?>"  readOnly="readOnly" maxlength="10" pattern=".{10}" TITLE="Le matricule doit etre composer de 10 chiffres"  required onkeypress="verifierMatricule(event); return false;">
     </div>
       <div class="form-group" id="nom_div">
         <input type="text" name="nommod" class="form-control text-center" id="nom" value="<?php  echo strip_tags($nom); ?>" maxlength="20" required onkeypress="verifierCaracteres(event); return false;">
       </div>
       <div class="form-group" id="prenom_div">
         <input type="text" name="prenommod" class="form-control text-center" id="prenom" value="<?php  echo strip_tags($prenom); ?>" maxlength="20" required onkeypress="verifierCaracteres(event); return false;">
       </div>
       <div class="form-group" id="email_div">
         <input type="email" name="emailmod" class="form-control text-center" id="email" value="<?php  echo strip_tags($email); ?>" maxlength="30" required>
       </div>
       <div class="demo" id="radio_div">
         <label>
           <input type="radio" class="option-input radio" name="day" id="sam" value="samedi" required <?php if($vote=='Samedi'){echo ('checked');} ?> />
           <b><i>Samedi</i></b> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </label>
         <label>
           <input type="radio" class="option-input radio" name="day" id="dim" value="dimanche" required <?php if($vote=='Dimanche'){echo ('checked');} ?>/>
           <b><i>Dimanche</i></b> </label>
       </div>

     <div class="row justify-content-md-center" id="submit_div">
       <button type="submit" class="btn btn-outline-success btn-block text-center" id="submit">Submit</button>
     </div>
     <div class="row" id="retour_div">
       <div class="col-sm-12 text-center">
         <button type="button" name="retour" class="retour" id="retour_form_mod"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button>
       </div>
     </div>

     </form>
     <div class="col-sm-12 text-center">
       <p id="incmod">© 2017 N'Voté Inc.</p>
     </div>
      </div>
     </div>
   </body>
</html>
