
<?php //Je suis le fichier routeur du site blog ecrivain


session_start();

require ('./Model/Log.php');


//Si Log 
if (isset($_GET['actionlog'])){
    if($_GET['actionlog']== 'signin'){
        require('./Controller/Registration.php');
        $registration = registration();
        //S'incrire sur la bdd
        echo ('connecté');
        
    }
    elseif($_GET['actionlog']== 'login'){
        if(isset($_POST['id']) && $_POST['id'] < 0 ){
            require('./Controller/Registration.php');
            $connect = connect();
           //Se connecter
           echo ('');
           
        }
        else{
            echo "Erreur: pas d'identifiant reconnu";
        }
    }
}
else{
    require ('./View/IndexView.php');
    echo "Pas d'action";
}
//Si comment


//Envoi vers l'affichage des prochains commentaires

//Require vers les bons controllers à faire !!!

require ('./View/template.php'); //Futur template.php