
<?php //Je suis le fichier routeur du site blog ecrivain


session_start();

require ('./Model/Database.php');


//Si Log 
if (isset($_GET['actionlog'])){
    if($_GET['actionlog'] == 'login'){
        require('./Controller/ControllerLog.php');
        registration();
        //S'incrire sur la bdd
        echo ('Login');
        
    }
    elseif($_GET['actionlog'] == 'signin'){
        if(isset($_POST['id']) && $_POST['id'] < 0 ){
            require('./Controller/ControllerLog.php');
            connect();
           //Se connecter
           echo ('Signin');
           
        }
        else{
            echo "Erreur: pas d'identifiant reconnu";
            //header ('Location:./View/IndexView.php');
        }
    }
}
else{
    //require ('./View/IndexView.php');
    echo "Pas d'action";
}
//Si comment


//Envoi vers l'affichage des prochains commentaires

//Require vers les bons controllers à faire !!!

require ('./View/template.php'); //Futur template.php