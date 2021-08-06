<?php
  function display_patient($id_patient)
{
    try
    {
      echo "<h1>les informations de ce patient sont</h1>";
      $sql = mysqli_connect("localhost","root","","hopital_2");
            $result = mysqli_query($sql,"SELECT * FROM patient WHERE id_patient = '".$id_patient."'");
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

    echo "<h1>les consultation de ce patient sont</h1>";

    try
    {
      
// Full texts	
// id_consultation
// no_dossier
// id_medecin
// symptome
// date_consultation
      $sql = mysqli_connect("localhost","root","","hopital_2");
            $result = mysqli_query($sql,"SELECT * FROM consultation WHERE no_dossier = '".$id_patient."'");
            echo "<table class=\"table table-success table-striped\">
            <thead>
                <tr>
                  <th scope=\"col\">ID Consultation</th>
                  <th scope=\"col\">No Dossier</th>
                  <th scope=\"col\">ID Medecin</th>
                  <th scope=\"col\">Symtome</th>
                  <th scope=\"col\">Date de Consultation</th>
                  </tr></thead></tbody>";
                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<tr><td>".$row['id_consultation'].
                      "</td><td>".$row['no_dossier'].
                      "</td><td>".$row['id_medecin'].
                      "</td><td>".$row['symptome'].
                      "</td><td>".$row['date_consultation'].
                      "</td></tr>";
                  }
                  echo "</tbody></table>";
    }
    catch(PDOException $e)
    {
        die("Erreur: ".$e->getmessage());
    }


}

function display_medecin($id_med)
{
  try
    {
      echo "<h1>les informations de ce medecin sont</h1>";
      $sql = mysqli_connect("localhost","root","","hopital_2");
            $result = mysqli_query($sql,"SELECT * FROM medecin WHERE id_medecin = '".$id_med."'");
            echo "<table class=\"table table-success table-striped\">
            <thead>
                <tr>
                  <th scope=\"col\">ID Medecin</th>
                  <th scope=\"col\">Nom</th>
                  <th scope=\"col\">Prenom</th>
                  <th scope=\"col\">Sexe</th>
                  <th scope=\"col\">Adresse</th>
                  <th scope=\"col\">Telephone</th>
                  <th scope=\"col\">Email</th>
                  <th scope=\"col\">Specialisation</th>
                  </tr></thead></tbody>";
                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<tr><td>".$row['id_medecin'].
                      "</td><td>".$row['nom'].
                      "</td><td>".$row['prenom'].
                      "</td><td>".$row['sexe'].
                      "</td><td>".$row['adresse'].
                      "</td><td>".$row['tel'].
                      "</td><td>".$row['email'].
                      "</td><td>".$row['specialisation'].
                      "</td></tr>";
                  }
                  echo "</tbody></table>";
    }
    catch(PDOException $e)
    {
        die("Erreur: ".$e->getmessage());
    }
    

    try
    {
//       id_consultation
// no_dossier
// id_medecin
// symptome
// date_consultation
      echo "<h1>les consultation fait par ce medecin sont</h1>";
      $sql = mysqli_connect("localhost","root","","hopital_2");
            $result = mysqli_query($sql,"SELECT * FROM consultation WHERE id_medecin = '".$id_med."'");
            echo "<table class=\"table table-success table-striped\">
            <thead>
                <tr>
                  <th scope=\"col\">ID Consultation</th>
                  <th scope=\"col\">NO Dossier</th>
                  <th scope=\"col\">ID Medecin</th>
                  <th scope=\"col\">Symptome</th>
                  <th scope=\"col\">Date Consutation</th>
                  </tr></thead></tbody>";
                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<tr><td>".$row['id_consultation'].
                      "</td><td>".$row['no_dossier'].
                      "</td><td>".$row['id_medecin'].
                      "</td><td>".$row['symptome'].
                      "</td><td>".$row['date_consultation'].
                      "</td></tr>";
                  }
                  echo "</tbody></table>";
    }
    catch(PDOException $e)
    {
        die("Erreur: ".$e->getmessage());
    }

}


function display_consultation($id_consul)
{
  // id_consultation	no_dossier	id_medecin	symptome	date_consultation
  try
    {
      echo "<h1>les informations de ce consultation sont</h1>";
      $sql = mysqli_connect("localhost","root","","hopital_2");
            $result = mysqli_query($sql,"SELECT * FROM consultation WHERE id_consultation = '".$id_consul."'");
            echo "<table class=\"table table-success table-striped\">
            <thead>
                <tr>
                  <th scope=\"col\">ID Consultation</th>
                  <th scope=\"col\">NO Dossier</th>
                  <th scope=\"col\">ID Medecin</th>
                  <th scope=\"col\">Symtome</th>
                  <th scope=\"col\">Date Consultation</th>
                  </tr></thead></tbody>";
                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<tr><td>".$row['id_consultation'].
                      "</td><td>".$row['no_dossier'].
                      "</td><td>".$row['id_medecin'].
                      "</td><td>".$row['symptome'].
                      "</td><td>".$row['date_consultation'].
                      "</td></tr>";
                  }
                  echo "</tbody></table>";
    }
    catch(PDOException $e)
    {
        die("Erreur: ".$e->getmessage());
    }
    

    try
    {
//       id_consultation
// no_dossier
// id_medecin
// symptome
// date_consultation

// id_consultation	ordonnance	

      echo "<h1>les prescription de cette consultation</h1>";
      $sql = mysqli_connect("localhost","root","","hopital_2");
            $result = mysqli_query($sql,"SELECT * FROM prescription WHERE id_consultation = '".$id_consul."'");
            echo "<table class=\"table table-success table-striped\">
            <thead>
                <tr>
                  <th scope=\"col\">ID Consultation</th>
                  <th scope=\"col\">Ordonnance</th>
                  </tr></thead></tbody>";
                  while($row = mysqli_fetch_array($result))
                  {
                      echo "<tr><td>".$row['id_consultation'].
                      "</td><td>".$row['ordonnance'].
                      "</td></tr>";
                  }
                  echo "</tbody></table>";
    }
    catch(PDOException $e)
    {
        die("Erreur: ".$e->getmessage());
    }

}

?>