<?php

require_once ('./Model/ChapterManager.php');
require_once ('./Model/CommentManager.php');

function addChapter(){
    $titleChapter = htmlspecialchars($_POST['titleChapter']);
    $contentChapter = htmlspecialchars($_POST['contentChapter']);
    $resultat = new ChapterManager;
    $infoNewChapter = $resultat -> addChapter($titleChapter, $contentChapter);
    header('Location: http://localhost:8887/index.php');
    exit();
}
function updateChapter(){
    
}
