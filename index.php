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
            if(isset($_GET['id'])){
                //Se connecter
                connect();
            }
            else{
                echo "Erreur: pas d'identifiant reconnu";
            }
        }
        elseif($_GET['action']== 'destroy'){
            logout();
        }
        elseif($_GET['action']== 'addChapter'){
            addChapter();
        }
        elseif ($_GET['action']== 'admin'){
            admin();
        }
        elseif ($_GET['action']== 'updateChapter'){
            updateChapter();
        }
        elseif($_GET['action']== 'getChapter'){
            if(isset($_GET['id'])){
                getChapter($_GET['id']);
            }
            else{
                echo "pas d'id chapter";
            }
        }
        elseif($_GET['action']=='addComment'){
            if(isset($_GET['id'])){
                addComment($_GET['id']);
            }
            else{
                echo 'pas de commentaire';
            }
        }
        elseif ($_GET['action']=='report'){
            if(isset($_GET['idComment'])){
                
                report($_GET['idComment']);
                
            }
            else{
                echo 'pas de signalement';
            }
            
        }
        elseif($_GET['action']== 'FormLog'){
            FormPage();
        }
    }
    else{
        listChapter();
    }

}
catch(Exception $e){
        die(var_dump('Erreur : '.$e->getMessage()));
    }
