<?php

require_once ('./Model/ChapterManager.php');
require_once ('./Model/CommentManager.php');

function addChapter(){
    $titleChapter = htmlspecialchars($_POST['titleChapter']);
    $contentChapter = ($_POST['contentChapter']);
    $resultat = new ChapterManager;
    $infoNewChapter = $resultat -> addChapter($titleChapter, $contentChapter);
    header('Location: http://localhost:8887/index.php');
    exit();
}

function admin(){
    $req = new ChapterManager;
    $chapters = $req -> listChapter();
    $request = new CommentManager;
    $listComments = $request -> listCommentReport();
    require ('./View/ViewAdmin.php');

}

function updateChapter(){
    $req = new ChapterManager;
    $chapters = $req -> updateChapter();
    require ('./View/ViewAdminUpdate.php');
}

