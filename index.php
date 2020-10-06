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
        <title>N'Voté</title>
  </head>
  <body>
    <div class="container-fluid">
<!-------------------------------------------------------Header----------------------------------------------------------------->
    <header id="header">
      <div class="row">
        <div class="col-sm-12 text-center">
          <img src="logo.png" alt="N'Voté" class="img-fluid " id="logo">
        </div>
      </div>
      </header>






<!-------------------------------------------------------Accueil----------------------------------------------------------------->

      <div id="partie1">

        <div class="row boutons">
          <div class="col-sm-12 text-center">
            <button type="button" class="bouton" id="voter">Voter</button>
            <button type="button" class="bouton" id="resultats">Résultats</button>

          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">
            <button type="button" name="apropos" id="apropos">A Propos</button>

          </div>
        </div>
      </div>






<!-------------------------------------------------------Formulaire----------------------------------------------------------------->

        <div id="partie2">
        <div class="row justify-content-md-center">
          <form action="traitement.php" id="formulaire" method="post">
            <div class="form-group" id="matricule_div">
              <input type="text" name="matricule" class="form-control text-center" id="matricule" placeholder="Matricule" maxlength="10" pattern=".{10}" TITLE="Le matricule doit etre composer de 10 chiffres"  required onkeypress="verifierMatricule(event); return false;">
            </div>
              <div class="form-group" id="nom_div">
                <input type="text" name="nom" class="form-control text-center" id="nom" placeholder="Nom" maxlength="20" required onkeypress="verifierCaracteres(event); return false;">
              </div>
              <div class="form-group" id="prenom_div">
                <input type="text" name="prenom" class="form-control text-center" id="prenom" placeholder="Prénom" maxlength="20" required onkeypress="verifierCaracteres(event); return false;">
              </div>
              <div class="form-group" id="email_div">
                <input type="email" name="email" class="form-control text-center" id="email" placeholder="E-Mail" maxlength="30" required>
              </div>
              <div class="demo" id="radio_div">
                <label>
                  <input type="radio" class="option-input radio" name="day" id="sam" value="samedi" required/>
                  <b><i>Samedi</i></b> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </label>
                <label>
                  <input type="radio" class="option-input radio" name="day" id="dim" value="dimanche" required/>
                  <b><i>Dimanche</i></b> </label>
              </div>

            <div class="row justify-content-md-center" id="submit_div">
              <button type="submit" class="btn btn-outline-success btn-block text-center" id="submit">Submit</button>
            </div>
            <div class="row" id="retour_div">
              <div class="col-sm-12 text-center">
                <button type="button" name="retour" class="retour" id="retour_form"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button>
              </div>
            </div>

            </form>
            <div class="col-sm-12 text-center">
              <p id="incform">© 2017 N'Voté Inc.</p>
            </div>
             </div>
      </div>



<!-------------------------------------------------------A Propos----------------------------------------------------------------->




      <div id="partie3">
        <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h4 id="equipe">L'équipe</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">
            <p style="font-weight:bold;">N'Voté a été realiser par :</p>
          </div>
        </div>
         <div class="row">
          <div class="col-sm-2 text-center partition" id="younes">
            <img src="younes.JPG" alt="younes" name="younes" class="img rounded" height="180px" width="130px" id="profil1">
            <h6 class="equipe_nom">Younes Agabi</h6>
          </div>
          <div class="col-sm-2 text-center partition" id="akram">
            <img src="akram.JPG" alt="akram" name="akram" class="img rounded" height="180px" width="130px" id="profil2">
            <h6 class="equipe_nom">Mohamed Akram Arar</h6>
          </div>
          <div class="col-sm-2 text-center partition" id="amine">
            <img src="amine.JPG" alt="amine" name="amine" class="img rounded" height="180px" width="130px" id="profil3">
            <h6 class="equipe_nom">Amine Yahouni</h6>
          </div>
          <div class="col-sm-2 text-center partition" id="khaled">
            <img src="khaled.JPG" alt="khaled" name="khaled" class="img rounded" height="180px" width="130px" id="profil4">
            <h6 class="equipe_nom">Khaled Chenouf</h6>
          </div>
          <div class="col-sm-2 text-center partition" id="ahmed">
            <img src="ahmed.JPG" alt="ahmed" name="ahmed" class="img rounded" height="180px" width="130px" id="profil5">
            <h6 class="equipe_nom">Ahmed Dahdouh</h6>
          </div>
          <div class="col-sm-2 text-center partition" id="yani">
            <img src="yani.png" alt="yani" name="yani" class="img rounded" height="180px" width="130px"id="profil6">
            <h6 class="equipe_nom">Mohamed Yani Morsli</h6>
          </div>

        </div>

      <div class="bas">
          <div class="row">
            <div class="col-sm-12 text-center">
              <button type="button" name="retour" class="retour" id="retour_aporpos"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button>
            </div>
          </div>
          <footer>
            <div class="row">
              <div class="col-sm-12 text-center">
                <p id="incpropos">© 2017 N'Voté Inc.</p>
              </div>
            </div>
          </footer>
      </div>
    </div>

    </div>

<!------------------------------------------------Resultats-------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->

<div id="partieresultats">


<div class="container">
<div id="header-tab">
  <div class="row">
    <div class="col-sm-4" id="title_result">
      <h1 id="resultat-titre">Résultats</h1>
    </div>
    <div class="col-sm-4" id="afficherstat">
      <button type="button" class="btn btn-outline-success" id="bouton-stats">Afficher/Masquer les statistiques</button>
    </div>
    <div class="col-sm-4" >
      <form action="" class="search-form" id="barresearch">
        <input type="search" name="" placeholder="Recherche" id="search" oninput="w3.filterHTML('#dev-table', '.item', this.value)">
        <button type="button" name="button"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
    </div>
  </div>
</div>
<div class="tableau" id="tabmasc">


    <div class="panel panel-primary">
      <div class="panel-body">

    <table class="table table-hover" id="dev-table">
      <thead>
        <tr>
          <th>Matricule</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>E-Mail</th>
          <th>Vote</th>
          <th>Date du vote</th>
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
      </thead>
      <tbody>
<?php
try
{
   $bdd= new PDO('mysql:host=localhost;dbname=mabase', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : '. $e->getMessage());
}

$table=$bdd->query('SELECT * FROM resultats ORDER BY date');
while ($donnee= $table->fetch())
{
  ?>
<tr class="item">
  <td><?php  echo strip_tags($donnee['matricule']); ?></td>
  <td><?php  echo strip_tags($donnee['nom']); ?></td>
  <td><?php  echo strip_tags($donnee['prenom']); ?></td>
  <td><?php  echo strip_tags($donnee['email']); ?></td>
  <td><?php  echo strip_tags($donnee['vote']); ?></td>
  <td><?php  echo strip_tags($donnee['date']); ?></td>
  <td>
    <form class="" action="modifier.php" method="post">
      <input type="hidden" name="mathidden" value="<?php  echo strip_tags($donnee['matricule']); ?>">
      <input type="hidden" name="nomhidden" value="<?php  echo strip_tags($donnee['nom']); ?>">
      <input type="hidden" name="prenomhidden" value="<?php  echo strip_tags($donnee['prenom']); ?>">
      <input type="hidden" name="emailhidden" value="<?php  echo strip_tags($donnee['email']); ?>">
      <input type="hidden" name="votehidden" value="<?php  echo strip_tags($donnee['vote']); ?>">
      <input type="submit" class="btn btn-outline-warning" value="Modifier" name="">
    </form>

  </td>
  <td>
    <form class="" action="supprimer.php" method="post">
      <input type="hidden" name="mathidden" value="<?php  echo strip_tags($donnee['matricule']); ?>">
      <input type="submit" class="btn btn-outline-danger" value="Supprimer" name="">
    </form>
  </td>
</tr>
  <?php
}
$table->closeCursor();
?>




</tbody>
</table>
</div>
</div>

<div class="bas">
<div class="row">
  <div class="col-sm-12 text-center">
    <button type="button" name="retour" class="retour" id="retour_resultats"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button>
  </div>
</div>
<div>
  <div class="row">
    <div class="col-sm-12 text-center">
      <p id="incresult">© 2017 N'Voté Inc.</p>
    </div>
  </div>
</div>
</div>
</div>
</div>

</div>
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!---------------------------------------Debut Statistiques-------------------------------------------------->
<?php
try
{
   $bdd= new PDO('mysql:host=localhost;dbname=mabase', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : '. $e->getMessage());
}
$sam=0;
$dim=0;
$i=0;
$table=$bdd->query('SELECT vote FROM resultats');
while ($donnee= $table->fetch())
{
  if ($donnee['vote']=="Dimanche") {
    $dim++;
  }
  if($donnee['vote']=="Samedi")
  {
    $sam++;
  }

  $i=$i+1;
}
$som=$sam+$dim;
$prssam=($sam/$i)*100;
$prsdim=($dim/$i)*100;

$prsdim=round($prsdim,2);
$prssam=round($prssam,2);
 ?>
 <script>
 var dim=<?php echo $dim; ?>;
 var sam=<?php echo $sam; ?>;
   $(document).ready(function(){
     var ctx = $("#mycanvas").get(0).getContext("2d");

     //pie chart data
     //sum of values = 360
     var data = [
       {
         value: dim,
         color: "cornflowerblue",
         highlight: "lightskyblue",
         label: "Dimanche"
       },
       {
         value: sam,
         color: "yellowgreen",
         highlight: "lightgreen",
         label: "Samedi"
       }
     ];

     //draw
     var piechart = new Chart(ctx).Pie(data);
   });
 </script>
<div id="stats">
   <div class="row">
     <div class="col-sm-12 text center">
       <canvas id="mycanvas" width="225" height="225">
     </div>
   </div>
   <div class="row">
     <div class="col-sm-12 text-center pourcentage">
       <p><span id="dimp">Dimanche : <?php echo $prsdim; ?>%</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="samp">Samedi : <?php echo $prssam; ?>%</span></p>
     </div>
   </div>
   <div class="row">
     <div class="col-sm-12 text-center">
       <p id="incresult">© 2017 N'Voté Inc.</p>
     </div>
   </div>

</div>

<!---------------------------------------Fin Statistiques-------------------------------------------------->
</div>
  </body>

</html>
