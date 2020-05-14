<?php 

function registration(){
    
    try
    {
            $bdd = new PDO('mysql:host=localhost;dbname=ecrivain;charset=utf8', 'root', 'root');
            $bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    }
    
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    

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

    echo ('enregistrer sur sql');

    if (isset($_SESSION['pseudo_member']))
        {
            echo 'Bonjour ' . $_SESSION['pseudo_member'] . 'ok';
            header('Location: ../View/IndexView');
        }
        echo ('Inscrit');
    require ('../View/ViewLog.php');
}

//Se connecter
function connect(){
    include ('../Model/Database.php');
    
    $pseudo_signin = htmlspecialchars($_POST['pseudo_member_signin']);
    //  Récupération de l'utilisateur et de son pass hashé
    $request = $bdd->prepare('SELECT id_member, pass_member FROM membre WHERE pseudo_member = :pseudo_member');
    $request->execute(array(
        'pseudo_member' => $pseudo_signin));
    $resultat = $request->fetch();
    
    // Comparaison du pass envoyé avec la base via le formulaire 
    $isPasswordCorrect = password_verify($_POST['pass_member_signin'], $resultat['pass_member']);
    
    if (!$resultat)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id_member'] = $resultat['id_member'];
            $_SESSION['pseudo_member_signin'] = $pseudo_signin;
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }
    require ('../View/ViewLog.php');
}


//Se déconnecter
function logout(){
 //A finir !!!!!!!!!!! 

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
                            
// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');
                            
}
