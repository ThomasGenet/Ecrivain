<?php
//Je me connecte à la base de donnée

try
    {
            $bdd = new PDO('mysql:host=localhost;dbname=ecrivain;charset=utf8', 'root', 'root');
            $bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    }
    
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    
?>

