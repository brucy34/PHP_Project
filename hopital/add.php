<?php
include_once("db.php");
//fonction pour ajouter un medecin
    function Insert_medecin($code,$nom,$prenom,$sexe,$adresse,$tel,$email,$specialisation)
    {
        try
        {
            $sql = "I87sation) VALUES ('$code','$nom','$prenom','$sexe','$adresse','$tel','$email','$specialisation')";
            $con = Connect();
            $exec_sql = $con->exec($sql);
            return $exec_sql;
        }
        catch(PDOException $e)
        {
            die("erreur: ".$e->getmessage());
        }
    }

//fonction pour ajouter un patint il cre un dossier automatique aussi
    function Insert_patient($code,$nom,$prenom,$sexe,$date_naissance,$adresse,$telephone,$nom_jeune_fille)
    {
        try
        {
            
            $sql = "INSERT INTO patient(id_patient,nom,prenom,sexe,date_naissance,adresse,telephone,nom_jeune_fille) VALUES ('$code','$nom','$prenom','$sexe','$date_naissance','$adresse','$telephone','$nom_jeune_fille')";
            $con = Connect();
            $exec_sql = $con->exec($sql);
            if($exec_sql == 1)
            {
                add_dossier($code);
            }
            return $exec_sql;
        }
        catch(PDOException $e)
        {
            die("erreur: ".$e->getmessage());
        }
        
    }

//fonction pour ajouter un dossier il faut creer un patiemt pour ajouter un nouveau dossier
    function add_dossier($id_patient)
    {
        try
        {
            
            $sql = "INSERT INTO dossier(id_patient) VALUES ('$id_patient')";
            $con = Connect();
            $exec_sql = $con->exec($sql);
            return $exec_sql;
        }
        catch(PDOException $e)
        {
            die("erreur: ".$e->getmessage());
        }
    }
//fonction pour ajouter une nouvelle consultation


    function new_consultation($no_dossier, $id_medecin, $symptome, $date_consultation, $ordonnance)
    {
        try
        {
            $sql = "INSERT INTO consultation(no_dossier, id_medecin,symptome, date_consultation) VALUES ('$no_dossier','$id_medecin','$symptome','$date_consultation')";
            $con = Connect();
            $exec_sql = $con->exec($sql);
            if($exec_sql == 1)
            {
                new_prescription($ordonnance);
            }
            return $exec_sql;
        }
        catch(PDOException $e)
        {
            die("erreur: ".$e->getmessage());
        }
    }
    function new_prescription($ordonnance)
    {
        try
        {
            $sql = "INSERT INTO prescription(ordonnance) VALUES ('$ordonnance')";
            $con = Connect();
            $exec_sql = $con->exec($sql);
            return $exec_sql;
        }
        catch(PDOException $e)
        {
            die("erreur: ".$e->getmessage());
        }
    }
    

     //$m = Insert_medecin(2,"Julien","sanon","Masculin","L3","grg","rgrtg","erfe");
    // $n = Insert_patient(2,"sdgfsdfg","sdffs","sdf","sdf","sdf","sdf","treg3");
    // $k = new_consultation(2,2,"koli","erf","poil");


     //echo "medecin: "."$m";
    // echo "patient: "."$n";
    // echo "consultation: "."$k";

    // $k = new_consultation(1,1,"vfvdf","2-2-2000","hcgv");
    // echo($k);
?>