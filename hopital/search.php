<?php
//retoune vrai si l''id existe dans la database
    function exist_id_med($idmed)
    {
        $sql = mysqli_connect("localhost","root","","hopital_2");
        $verify = mysqli_query($sql,"SELECT * FROM medecin WHERE id_medecin = '".$idmed."'");
        if(mysqli_num_rows($verify))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //return true sil le numero de dossier existe dans la database
    function exist_no_dossier($nodossier)
    {
        $sql = mysqli_connect("localhost","root","","hopital_2");
        $verify = mysqli_query($sql,"SELECT * FROM dossier WHERE no_dossier = '".$nodossier."'");
        if(mysqli_num_rows($verify))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    //retoune true si id patient existe
    function exist_id_patient($idpatient)
    {
        $sql = mysqli_connect("localhost","root","","hopital_2");
        $verify = mysqli_query($sql,"SELECT * FROM patient WHERE id_patient = '".$idpatient."'");
        if(mysqli_num_rows($verify))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    //verifier si id consultation existe
    function exist_id_consult($id_consult)
    {
        $sql = mysqli_connect("localhost","root","","hopital_2");
        $verify = mysqli_query($sql,"SELECT * FROM consultation WHERE id_consultation = '".$id_consult."'");
        if(mysqli_num_rows($verify))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
        
    // $k = exist_id_med(1);
    //$l = exist_no_dossier(65);
    // echo "reponse id med = $k";
    //echo " reponse no dossier = $l";


?>