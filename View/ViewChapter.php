 <?php $title = 'Chapitre'; ?>
 <?php ob_start();?>




 <!--Chapitre entier-->
 <section id="chapter">

     <?php foreach($chapters as $chapter): ?>
     <h1 id="titleChapter"><?= $chapter ['title_chapter'] ?></h1>

     <div id="completchap">
         <p> <?= $chapter['chapter_content'] ?> </p>
     </div>

 </section>
 <?php endforeach ?>
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
 <?php include ('template.php'); ?>