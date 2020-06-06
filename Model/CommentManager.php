<?php

class CommentManager extends Database{

    public function addComment(){
        $bdd = $this -> bddconnect();
    // Insertion
        $req = $bdd->prepare('INSERT INTO comment() VALUES ()');
        $req->execute(array(
            ));
        return $req;
    }

    public function listComment(){
        //Faire function liste des commentires
    }
}