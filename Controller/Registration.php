<?php 
function registration(){
// Connexion à la base de données

require ('../Model/bdd.php');

// Vérification de la validité des informations
$pseudo = htmlspecialchars($_POST['pseudo_member']);
$mail = htmlspecialchars($_POST['mail_member']);
// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass_member'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO membre(pseudo_member, pass_member, mail_member, date_inscription) VALUES(:pseudo_member, :pass_member, :mail_member, CURDATE())');
$req->execute(array(
    'pseudo_member' => $pseudo,
    'pass_member' => $pass_hache,
    'mail_member' => $mail));
    
    if (isset($_SESSION['pseudo_member']))
        {
            echo 'Bonjour ' . $_SESSION['pseudo_member'] . 'ok';
            //header('Location: ./chapitre.html');
        }
}

//Se connecter

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

//Se déconnecter
                            //A finir !!!!!!!!!!! 
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');




