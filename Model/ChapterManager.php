<?php 

class ChapterManager extends Database{
    public function addChapter($titleChapter, $contentChapter){
        $bdd = $this -> bddconnect();
        // Insertion
        $req = $bdd->prepare('INSERT INTO chapter(title_chapter, chapter_content,date_chapter) VALUES (:title_chapter, :content_chapter, CURDATE())');
        $req->execute(array(
            'title_chapter' => $titleChapter,
            'content_chapter' => $contentChapter));
        return $req;
    }
    public function listChapter(){

        //Faire function liste des chapitres
    }
    
}
