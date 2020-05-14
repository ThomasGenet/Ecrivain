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
        <div class="com">
            <h2>Commentaire</h2>
            <textarea name="subject" placeholder="Rédiger un comentaire"> </textarea>
            <input type="submit" value="Soumettre le commentaire">
        </div>
    </section>
    <!--Commentaires liste-->
    <section id="commentaires">
        <div id="excom">
            <p>Exemple de commentaire</p>
        </div>

    </section>
<?php $content = ob_get_clean()?>
<?php include ('./template.php'); ?>

