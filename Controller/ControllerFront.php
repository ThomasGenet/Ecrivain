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
    $mail_signin = htmlspecialchars($_POST['mail_member_login']);
    $pass_member = htmlspecialchars($_POST['pass_member_login']);
    
    
    // Comparaison du pass envoyé avec la base via le formulaire 
    $request = new UserManager;
    $infoUser = $request -> connect($mail_signin);
    
        if (!$infoUser)
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else
        {
            if (password_verify($pass_member, $infoUser['pass_member'])) {
                session_start();
                $_SESSION['id_member'] = $infoUser['id'];
                $_SESSION['admin'] = $infoUser['admin_member'];
                $_SESSION['pseudo'] = $infoUser['pseudo_member'];
                header ('Location: http://localhost:8887/index.php');
                exit();
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
    header ('Location: http://localhost:8887/index.php');
    exit();
}

function listChapter(){
    $req = new ChapterManager;
    $chapitres = $req -> listChapter();
    require ('./View/IndexView.php');
}
function getChapter($id){
    $req = new ChapterManager;
    $chapters = $req -> getChapter($id);
    $request = new CommentManager;
    $listComments = $request -> listComment($id);
    //die(var_dump($id));
    require ('./View/ViewChapter.php');
   
}
function addComment($id){
    $contentComment = htmlspecialchars($_POST['comment']);
    $id_member = $_SESSION['id_member'];
    $resultat = new CommentManager;
    $commentreq = $resultat -> addComment($contentComment, $id, $id_member);
    //die(var_dump($resultat));
    header ('Location: http://localhost:8887/index.php?action=getChapter&id='. $id);
    exit();
}

function FormPage(){
    require ('./View/ViewLog.php');
}








