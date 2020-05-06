<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ecrivain;charset=utf8', 'root', 'root');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$pseudo_signin = htmlspecialchars($_POST['pseudo_member_signin']);
//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id_member, pass_member FROM membre WHERE pseudo_member = :pseudo_member');
$req->execute(array(
    'pseudo_member' => $pseudo_signin));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
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
        //echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
