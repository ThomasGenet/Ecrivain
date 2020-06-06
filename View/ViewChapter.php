 <?php $title = 'Chapitre'; ?>    
 <?php ob_start();?>
     <div>
        <h1>Chapitre 1</h1>
        <p>Vous êtes sur la page du chapitre 1</p>
    </div>
    <!--Chapitre entier-->
    <section id="completchap">
        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis dicta aut ex corrupti ipsum blanditiis
            eum facere. Fugit similique odio accusantium. Doloremque libero excepturi quibusdam nihil sequi, vel soluta
            sapiente.</p>
    </section>
    <!--Ajouter un commentaire-->
    <section id="message">
        <form class="com" action="../index.php?action=addComment&id=<?=$_GET['id']?>" method="POST">
            <h2>Commentaire</h2>
            <textarea name="subject" placeholder="Rédiger un comentaire"> </textarea>
            <input type="submit" value="Soumettre le commentaire">
        </form>
    </section>
    <!--Commentaires liste-->
    <section id="commentaires">
        <div id="excom">
            <p>Exemple de commentaire</p>
        </div>

    </section>
<?php $content = ob_get_clean()?>
<?php include ('./template.php'); ?>

