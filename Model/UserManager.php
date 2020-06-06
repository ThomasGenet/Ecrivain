<?php 
require ('Model/Database.php');

class UserManager extends Database{
    public function registration($admin, $pseudo, $pass_hache, $mail){
        
        $bdd = $this -> bddconnect();
    // Insertion
        $req = $bdd->prepare('INSERT INTO membre(admin_member,pseudo_member, pass_member, mail_member, date_inscription) VALUES (:admin_member,:pseudo_member, :pass_member, :mail_member, CURDATE())');
        $req->execute(array(
            'admin_member' => $admin,
            'pseudo_member' => $pseudo,
            'pass_member' => $pass_hache,
            'mail_member' => $mail));
        return $req;

    }
    //Se connecter
    public function connect($pseudo_signin){

        $bdd = $this -> bddconnect();
        //  Récupération de l'utilisateur et de son pass hashé
        $request = $bdd->prepare('SELECT id_member, pass_member FROM membre WHERE pseudo_member = :pseudo_member');
        $request->execute(array(
            'pseudo_member' => $pseudo_signin));
        $resultat = $request->fetch();
        return $resultat;
        
    }
    
    public function logout(){
        //A finir !!!!!!!!!!! 
       session_start();
       // Suppression des variables de session et de la session
       $_SESSION = array();
       session_destroy();
                                   
       // Suppression des cookies de connexion automatique
       setcookie('login', '');
       setcookie('pass_hache', '');
                                   
    }
    
}
