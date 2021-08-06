<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Liste des consultation</title>
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
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
    <h5 style="text-align:center;">La liste des patients</h5>
    <?php
    	// id_medecin
        // nom
        // prenom
        // sexe
        // adresse
        // tel
        // email
        // specialisation
        
        try
        {
            
	
// id_patient
// nom
// prenom
// sexe
// date_naissance
// adresse
// telephone
// nom_jeune_fille
            $sql = mysqli_connect("localhost","root","","hopital_2");
            $result = mysqli_query($sql,"SELECT * FROM patient");
            echo "<table class=\"table table-success table-striped\">
            <thead>
                <tr>
                  <th scope=\"col\">ID Patient</th>
                  <th scope=\"col\">No Nom</th>
                  <th scope=\"col\">ID Prenom</th>
                  <th scope=\"col\">Sexe</th>
                  <th scope=\"col\">Date Naissance</th>
                  <th scope=\"col\">Adresse</th>
                  <th scope=\"col\">Telephone</th>
                  <th scope=\"col\">Nom de Jeune Fille Mere</th>
                  </tr></thead></tbody>";
                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<tr><td>".$row['id_patient'].
                      "</td><td>".$row['nom'].
                      "</td><td>".$row['prenom'].
                      "</td><td>".$row['sexe'].
                      "</td><td>".$row['date_naissance'].
                      "</td><td>".$row['adresse'].
                      "</td><td>".$row['telephone'].
                      "</td><td>".$row['nom_jeune_fille'].
                      "</td></tr>";
                  }
                  echo "</tbody></table>";
        }
        catch(PDOException $e)
        {
            die("Erreur: ".$e->getmessage());
        }
    ?>
