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
        $bdd = $this -> bddconnect();
        // Insertion
        $req = $bdd->query('SELECT * FROM chapter ORDER BY id asc');
        return $req;
    }
    public function getChapter($id){
        $bdd = $this -> bddconnect();
        $req = $bdd->prepare('SELECT * FROM chapter WHERE id = :id');
        $req->execute(array(
            'id'=> $id));
        return $req;
    }
    public function updateChapterView($id){
        $bdd = $this -> bddconnect();
        $req = $bdd->prepare('SELECT title_chapter, chapter_content, id FROM chapter WHERE id = :id');
        $req->execute(array(
            'id'=> $id));
        return $req;
    }
    public function updateChapter($id){
        $bdd = $this -> bddconnect();
        $req = $bdd->prepare('UPDATE chapter(title_chapter, chapter_content) SET ');
    }
    
    
}