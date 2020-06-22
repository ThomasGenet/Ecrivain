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
function removeReport($id){
    $req = new CommentManager;
    $reportreq = $req -> removeReport($id);
    header('Location: http://localhost:8887/index.php?action=getChapter&id='. $id);
    exit();
}
function deleteComment($id){
    $req = new CommentManager;
    $deletereq = $req -> deleteComment($id);
    header('Location: http://localhost:8887/index.php?action=getChapter&id='. $id);
    exit();
}
function updateChapterView($id){
    $req = new ChapterManager;
    $chaptersUpdate = $req -> updateChapterView($id);
    
    require ('./View/ViewAdminUpdate.php');
}
function updateChapter($id){
    require ('./View/ViewAdminUpdate.php');
}
