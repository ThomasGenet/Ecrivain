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
        elseif($_GET['action']=='updateChapterView'){
            if(isset($_GET['idUpdate'])){
                updateChapterView($_GET['idUpdate']);
            }
            else{
                echo "Pas d'identifiant de chapitre à modifier";
            }
        }
        elseif($_GET['action']== 'updateChapter'){
            if(isset($_GET['idUpdateChapter'])){
                updateChapter($_GET['idUpdateChapter']);
            }
            else{
                echo "pas d'id";
            }
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
        elseif($_GET['action']=='removereport'){
            if(isset($_GET['idReport'])){

                removeReport($_GET['idReport']);
            }
            else{
                echo 'Pas signalé';
            }
            
        }
        elseif ($_GET['action']=='deleteComment'){
            if(isset($_GET['idDeleteComment'])){
                
                deleteComment($_GET['idDeleteComment']);
            }
            else{
                echo 'Le commentaire ne peut pas être supprimé';
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
