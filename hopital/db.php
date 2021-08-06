<?php

    function connect()
    {
        $dns = "mysql:host=localhost;dbname=hopital_2";
        $user = "root";
        $pswd = "";
        try
        {
            $con = new PDO($dns,$user,$pswd);
            {
                if($con)
                {
                    return $con;
                }
            }
        }
        catch(PDOException $e)
        {
            die("erreur:".$e->getmessage());
        }
    }

?>