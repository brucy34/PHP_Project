<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Polyclinique LaRochelle</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="Asset/bootstrap-5.0.0-beta3-dist/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
<link href="Asset/Css/index.css" rel="stylesheet" type="text/css">
<script src="Asset/bootstrap-5.0.0-beta3-dist/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="Asset/Image/exp_logo_16290_fr_2019_05_14_13_59_51.webp" type="image/x-icon">

</head>

<body> 
  <!-- utilisation de la classe bootstrap "fixed-top header" pour maintenir la section header en avant de page -->
	 <header id="header" class="fixed-top header">
			<h1 class="univ-name">
        <p id="Titre"><a href="index.php">Polyclinique LaRochelle</a> </p>
      </h1>
          <nav id="nav">
            <ul>
              
              <li style="margin-top: 250px; margin-bottom: 300px;" >
                <form  action = "ui_search.php" method = "post" class="form-inline my-2 my-lg-0">
                    <input name = "input_search" style="margin-bottom: 10px; text-align: center;" class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button  name = "search_patient" class="btn btn-success">Rechercher Patient</button>
                    <button  name = "search_medecin" class="btn btn-warning">Recherchre Medecin</button>
                    <button  name = "search_consultation" class="btn btn-info">Rechercher Consultation</button>    
                </form>
              </li>
            
			      </ul>
          </nav>
  </header>
  <!-- utilisation des carousel de bootstrap -->
  
</body>
</html>


<!-- //script php -->
<?php
  if(isset($_POST["search_patient"]))
  {
    
    if(isset($_POST["input_search"]))
    {
      
      $id_patient = $_POST["input_search"];
      include_once("search.php");
      if(exist_id_patient($id_patient))
      {
      
        include_once("result_search.php");
        display_patient($id_patient);
      }
      else
      {
         echo "<script> alert(\"cet id n'existe pas dans la base de donne\")</script>";
      }
    }
  }
  else if(isset($_POST["search_medecin"]))
  {
    
    if(isset($_POST["input_search"]))
    {
      
      $id_med = $_POST["input_search"];
      include_once("search.php");
      if(exist_id_med($id_med))
      {
       
        include_once("result_search.php");
        display_medecin($id_med);
      }
      else
      {
         echo "<script> alert(\"cet id n'existe pas dans la base de donne\")</script>";
      }
    }
  }
  else if(isset($_POST["search_consultation"]))
  {
  
    if(isset($_POST["input_search"]))
    {
     
      $id_consul = $_POST["input_search"];
      include_once("search.php");
      if(exist_id_consult($id_consul))
      {
        
        include_once("result_search.php");
        display_consultation($id_consul);
      }
      else
      {
         echo "<script> alert(\"cet id n'existe pas dans la base de donne\")</script>";
      }
    }
  }
?>