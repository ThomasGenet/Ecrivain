<?php
//Je me connecte à la base de donnée

function connect(){
        try
        {
                $bdd = new PDO('mysql:host=localhost;dbname=ecrivain;charset=utf8', 'root', 'root');
        }
        
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
}