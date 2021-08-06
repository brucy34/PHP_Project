<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Asset/Css/new_med.css">
    <title>Nouveau Patient</title>
</head>
<body>

<nav class="navbar navbar-dark bg-success">
        <ul class="nav justify-content-center" style="text-align: center;">
        <li style="margin-right: 280px; color: white;" class="nav-item">
                <h4>Polyclinique LaRochelle</h4>
            </li>
            <li class="nav-item">
                <a class="nav-link active" style="color: black;" aria-current="page" href="index.php">Acceuil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="ui_search.php">Rechercher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="list_patient.php">Liste Patient</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  style="color: black;" href="list_medecin.php" >Liste Medecin</a>
            </li>
        </ul>
    </nav>
    <div  class="box-grid centered" style=" height: 520px;">
          
      <h1 style="margin-top: 10px;  text-align: center; color: rgba(7, 7, 7, 0.699);">Entre les informations pour enregistrer la consultation</h1>
          <div class="center-box" style=" height: 100px; width: 500px;text-align: center;margin-left: 420px;">
             <form action ="new_consultation.php" method="POST">
              <div style="margin-top: 25px;" class="form-group">
                <input name ="no_dossier" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID patient">
                <input name ="id_medecin" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID du medecin">
                <input type="date" name="date_consultation" style="margin-top: 5px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date consultation">
                <input name="ordonance" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ordonance du medecin">
                <input name="symptome" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="symptome">
              </div>
              <button style="margin-top: 10px;" type="submit" name = "valider" class="btn btn-success">Enregistrer</button>
            </form>
          </div>
        </div>
</body>
</html>










<?php
    if(isset($_POST['valider']))
    {
        include_once("add.php");
        include_once("search.php");
        if(isset($_POST['no_dossier'])&&isset($_POST['id_medecin'])&&isset($_POST['date_consultation'])&&isset($_POST['ordonance'])&&isset($_POST['symptome']))
        {
           if((exist_id_med($_POST['id_medecin']))&&(exist_no_dossier($_POST['no_dossier'])))
           {
                $reponse = new_consultation($_POST['no_dossier'],$_POST['id_medecin'],$_POST['symptome'],$_POST['date_consultation'],$_POST['ordonance']);
                if($reponse != 1)
                {
                  echo "<script> alert(\"la prescription n'as pas ete enregistrer\")</script>";
                }
                else
                {
                  echo "<script> alert(\"prescription enregistrer avec succes\")</script>";
                }
           }
           else
           {
              echo "<script> alert(\"verifiez le formulaire ce medcin ou ce numero de patient n'existe pas\")</script>";
           }
        }
    }
  

?>