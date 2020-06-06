<?php

require_once ('./Model/ChapterManager.php');
require_once ('./Model/CommentManager.php');

function addChapter(){
    $titleChapter = htmlspecialchars($_POST['titleChapter']);
    $contentChapter = htmlspecialchars($_POST['contentChapter']);
    $resultat = new ChapterManager;
    $resultat -> addChapter($titleChapter, $contentChapter);
    
}