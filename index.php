<?php //Je suis le fichier routeur du site blog ecrivain
session_start();

require('./Controller/ControllerFront.php');
require('./Controller/ControllerBack.php');
try{
    //Si Log 
    if (isset($_GET['action'])){
        if($_GET['action'] == 'login'){
            //S'incrire sur la bdd
            registration();
        }
        elseif($_GET['action'] == 'signin'){
            if(isset($_POST['id']) && $_POST['id'] < 0 ){
                //Se connecter
                connect();
            }
            else{
                echo "Erreur: pas d'identifiant reconnu";
            }
        }
        elseif($_GET['action']== 'ListChapter'){

        }
        elseif($_GET['action']== 'FormLog'){
            FormPage();
        }
    }
    else{
        ListChapter();
    }

    }
catch(Exception $e){
        die(var_dump('Erreur : '.$e->getMessage()));
    }
