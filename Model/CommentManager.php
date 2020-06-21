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
        $req = $bdd->prepare('SELECT * FROM comment WHERE id_chapter = :id_chapter');
        $req->execute(array(
            'id_chapter'=> $id));
        return $req;
    }
    
    public function report($id){
        $bdd = $this -> bddconnect();
       
        $req = $bdd->prepare('UPDATE comment SET report_comment= "1" WHERE id = :id');
        $req->execute(array(
            'id'=> $id));
        return $req;
    }
    public function listCommentReport(){
        $bdd = $this -> bddconnect();
        
        $req = $bdd->query('SELECT * FROM comment WHERE report_comment = 1');
        return $req;
    }
    public function removeReport($id){
        $bdd = $this -> bddconnect();
        
        $req = $bdd->prepare('UPDATE comment SET report_comment= "0" WHERE id = :id');
        $req->execute(array(
            'id'=> $id));
        return $req;
    }
    public function deleteComment($id){
        $bdd = $this -> bddconnect();
        
        $req = $bdd->prepare('DELETE FROM comment WHERE id = :id');
        $req->execute(array(
            'id'=> $id));
        return $req;
    }

    
}