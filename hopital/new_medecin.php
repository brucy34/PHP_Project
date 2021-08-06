<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Asset/Css/new_med.css">
    <title>Liste des consultations</title>
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
          
      <h1 style="margin-top: 10px;  text-align: center; color: rgba(7, 7, 7, 0.699);">Entre les informations du medecin</h1>
          <div class="center-box" style=" height: 100px; width: 500px;text-align: center;margin-left: 450px;">
             <form action ="new_medecin.php" method="POST">
              <div style="margin-top: 25px;" class="form-group">
                <input name ="id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
                <input name ="nom" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                <input name ="prenom" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">
                <input name ="adresse" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Adresse">
                <input name ="tel" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number">
                <input name="email" style="margin-top: 5px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <input name="specialisation" style="margin-top: 5px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Specialisation">
              </div>
              <div class="form-group">
                  <label for="inputState">Sexe</label>
                  <select name ="sexe" id="inputState" class="form-control">
                    <option >Masculin</option>
                    <option >Feminin</option>
                  </select>
              </div>
              <button style="margin-top: 10px;" type="submit" name = "valider" class="btn btn-primary">Enregistrer</button>
            </form>
          </div>
        </div>
</body>
</html>




<!-- script php pour enregistrer chaque medecin -->
<?php


  if(isset($_POST['valider']))
  {
      include_once("add.php");
      if(isset($_POST['id'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['sexe'])&&isset($_POST['adresse'])&&isset($_POST['tel'])&&isset($_POST['email'])&&isset($_POST['specialisation']))
      {
         $reponse = Insert_medecin($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['adresse'],$_POST['tel'],$_POST['email'],$_POST['specialisation']);
         $name = $_POST['nom'];
         if($reponse != 1)
         {
            echo "<script> alert(\"le medecin n'est pas enregistrer\")</script>";
         }
         else
         {
            echo "<script> alert(\"le medecin $name enregistrer avec succes\")</script>";
         }
      }
  }



?>

