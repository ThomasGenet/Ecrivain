<?php

class CommentManager extends Database{
    public function addComment($contentComment,$id, $id_member){
        $bdd = $this -> bddconnect();
    // Insertion
        $req = $bdd->prepare('INSERT INTO comment(id_member, comment,date_comment, report_comment, id_chapter) VALUES (:id_member, :comment,CURDATE(),0, :id_chapter)');
        $req->execute(array(
            'id_member'=> $id_member,
            'id_chapter'=> $id,
            'comment'=> $contentComment));
        return $req;
    }

    public function listComment($id){
        $bdd = $this -> bddconnect();
        // Insertion
        $req = $bdd->prepare('SELECT * FROM comment WHERE id_chapter = :id');
        $req->execute(array(
            'id'=> $id));
        return $req;
    }
}