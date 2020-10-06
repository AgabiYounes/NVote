<!DOCTYPE html>
<html id="html">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="5; URL=index.php"> -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <link rel="icon" type="image/png" href="icon.png" />
        <title>N'Voté -Supprimer</title>
  </head>
  <body>
    <div class="container-fluid">


    <header id="header">
      <div class="row">
        <div class="col-sm-12 text-center">
          <img src="logo.png" alt="N'Voté" class="img-fluid " id="logo-trait" height="80px" width="150px">
        </div>
      </div>
      </header>
<?php
///////////////////////////////////////////////////////////Connexion BDD/////////////////////////////////////////////////////////
try
{
   $bdd= new PDO('mysql:host=localhost;dbname=mabase', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : '. $e->getMessage());
}
///////////////////////////////////////////////////////Suppression BDD/////////////////////////////////////////////////////////////////////////////////
if(!empty($_POST['mathiddensupp']))
{
  $matricule=$_POST['mathiddensupp'];
}
else {
  echo "Error";
}
$req= $bdd->prepare('DELETE FROM resultats WHERE matricule=:matricule');
$req->execute(array(
  'matricule'=>$matricule
));










?>

<div class="row">
  <div class="col-sm-12">
    <img src="ok.png" alt="checked" height="200px" width="200px" class="checked-ico">
  </div>
</div>
<div class="row">
  <div class="col-sm-12 text-center">
    <p class="msg-redirct">Bravo ! La suppression du vote a été bien effectuer.<br> Vous allez etre rediriger vers la page d'acceuil dans <span id="affichage"></span> secondes</p>
  </div>
</div>
<script type="text/javascript" language="JavaScript">

    setTimeout(function () {location.href = 'index.php';}, 11000);

</script>
    </div>
  </body>
</html>
