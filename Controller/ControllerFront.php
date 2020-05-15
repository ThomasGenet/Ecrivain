<?php 
require_once ('./Model/ModelLog.php');

function registration(){
    // Vérification de la validité des informations
    $admin = 0;
    $pseudo = htmlspecialchars($_POST['pseudo_member']);
    // Hachage du mot de passe
    $pass_hache = password_hash($_POST['pass_member'], PASSWORD_DEFAULT);
    $mail = htmlspecialchars($_POST['mail_member']);
    
    $req = registration($admin, $pseudo, $pass_hache, $mail);
    
    if (isset($_SESSION['pseudo_member']))
        {
            echo 'Bonjour ' . $_SESSION['pseudo_member'] . 'ok';
            header('Location: ../View/IndexView');
        }
    
}

function connect(){
    $pseudo_signin = htmlspecialchars($_POST['pseudo_member_signin']);

    // Comparaison du pass envoyé avec la base via le formulaire 
    $request = connect($pseudo_signin);

        if (!$request)
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else
        {
            $isPasswordCorrect = password_verify($_POST['pass_member_signin'], $request['pass_member']);
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['id_member'] = $request['id'];
                $_SESSION['admin'] = $request['admin_member'];
                $_SESSION['pseudo'] = $request['pseudo_member'];
                header ('Location: ./index.php');

            }
            else {
                echo 'Mauvais identifiant ou mot de passe !';
            }
        }

    
    require ('./View/ViewLog.php');
    
}
function FormPage(){
    require ('./View/ViewLog.php');
}
function ListChapter(){
    $title = ' ';
    $content = ' ';
    require ('./View/template.php');
    //Faire la fonction liste des chapitres
}








