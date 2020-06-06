<?php 
require_once ('./Model/UserManager.php');
require_once ('./Model/ChapterManager.php');
require_once ('./Model/CommentManager.php');


function registration(){

    
    // Vérification de la validité des informations
    $admin = 0;
    $pseudo = htmlspecialchars($_POST['pseudo_member']);
    // Hachage du mot de passe
    $pass_hache = password_hash($_POST['pass_member'], PASSWORD_DEFAULT);
    $mail = htmlspecialchars($_POST['mail_member']);

    $req = new UserManager;
    $req -> registration($admin, $pseudo, $pass_hache, $mail);
    
    session_start();
    //Mettre un lien header location
    header('Location: ../View/IndexView.php');
    
}

function connect(){
    $pseudo_signin = htmlspecialchars($_POST['mail_member_signin']);

    // Comparaison du pass envoyé avec la base via le formulaire 
    $request = new UserManager;
    $request -> connect($pseudo_signin);

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
                header ('Location: http://localhost:8887/index.php');

            }
            else {
                echo 'Mauvais identifiant ou mot de passe !';
            }
        }

    
    require ('./View/ViewLog.php');
    
}
function logout(){
    $req = new UserManager;
    $req -> logout();
}

function getChapter(){
    
}
function addComment(){
    $comment = htmlspecialchars($_POST['comment']);
    $id = $_GET['id'];
    $resultat = new CommentManager;
    $resultat -> addComment($comment, $id);
    header ('Location: http://localhost:8887/index.php?action=getChapter&id='. $id);
    exit();
}
function ListChapter(){
    $title = ' ';
    $content = ' ';
    require ('./View/template.php');
    //Faire la fonction liste des chapitres
}
function FormPage(){
    require ('./View/ViewLog.php');
}








