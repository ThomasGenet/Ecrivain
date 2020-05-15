<?php 


function registration(){

    $bdd = dbconnect();
    echo ('registration');

// Vérification de la validité des informations
$pseudo = htmlspecialchars($_POST['pseudo_member']);
$mail = htmlspecialchars($_POST['mail_member']);
$admin = 0;
// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass_member'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO membre(admin_member,pseudo_member, pass_member, mail_member, date_inscription) VALUES (:admin_member,:pseudo_member, :pass_member, :mail_member, CURDATE())');
$req->execute(array(
    'admin_member' => $admin,
    'pseudo_member' => $pseudo,
    'pass_member' => $pass_hache,
    'mail_member' => $mail));
    return $req;

    echo ('enregistrer sur sql');

    if (isset($_SESSION['pseudo_member']))
        {
            echo 'Bonjour ' . $_SESSION['pseudo_member'] . 'ok';
            header('Location: ../View/IndexView');
        }
        echo ('Inscrit');
    
}
//Se connecter
function connect($pseudo_signin){
    
    $bdd = dbconnect();
   
    //  Récupération de l'utilisateur et de son pass hashé
    $request = $bdd->prepare('SELECT id_member, pass_member FROM membre WHERE pseudo_member = :pseudo_member');
    $request->execute(array(
        'pseudo_member' => $pseudo_signin));
    $resultat = $request->fetch();
    return $resultat;
    
}

function logout(){
    //A finir !!!!!!!!!!! 
   session_start();
   // Suppression des variables de session et de la session
   $_SESSION = array();
   session_destroy();
                               
   // Suppression des cookies de connexion automatique
   setcookie('login', '');
   setcookie('pass_hache', '');
                               
}

//Connecté à la base de donnée
function dbconnect(){
    try
    {
            $bdd = new PDO('mysql:host=localhost;dbname=ecrivain;charset=utf8', 'root', 'root');
            $bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    }
    
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    
}