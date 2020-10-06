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
        <title>N'Voté -Supprimer</title>
  </head>
  <body>
    <div class="container-fluid">
    <header id="header">
      <div class="row">
        <div class="col-sm-12 text-center">
          <img src="logo.png" alt="N'Voté" class="img-fluid " id="logo-supp" height="80px" width="150px">
        </div>
      </div>
      </header>
      <div class="row">
        <div class="col-sm-12">
          <img src="warning.png" alt="checked" height="200px" width="200px" class="checked-ico" id="logo_danger_supp">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center">
          <p id="message_supp">Voulez-vous vraiment supprimer le vote ?</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <form class="" action="traitement_supp.php" method="post">
            <input type="hidden" name="mathiddensupp" value="<?php

            if(!empty($_POST['mathidden']))
            {
              $matricule=$_POST['mathidden'];
              echo $matricule;
            }?>">
            <input type="submit" class="btn btn-outline-danger" id="bouton-oui" value="Oui">
          </form>
        </div>
        <div class="col-sm-6">
          <button type="button" class="btn btn-outline-success" id="bouton_non">Non</button>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center">
          <p id="incsupp">© 2017 N'Voté Inc.</p>
        </div>
      </div>
      </div>
  </body>
</html>
