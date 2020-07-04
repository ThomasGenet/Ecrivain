 <?php $title = 'Chapitre'; ?>
 <?php ob_start();?>

 <!--Chapitre entier-->
 <section id="chapter">

     <?php foreach($chapters as $chapter): ?>
     <h1 id="titleChapter"><?= $chapter ['title_chapter'] ?></h1>

     <div id="completchap">
         <p> <?= $chapter['chapter_content'] ?> </p>
     </div>
     <?php endforeach ?>
 </section>

 <!--Ajouter un commentaire-->
 <?php if(isset($_SESSION['id_member'])){ ?>
 <section id="message">
     <form class="com" action="../index.php?action=addComment&id=<?= $_GET['id']?>" method="POST">
         <h2>Commentaire</h2>
         <textarea name="comment" placeholder="Rédiger un commentaire"></textarea>
         <input type="submit" value="Soumettre le commentaire">
     </form>
 </section>
 <?php } ?>
 <!--Commentaires liste-->
 <section id="commentaires">
     <?php foreach($listComments as $listComment): ?>
     <div class="excom">
         <p><?= $listComment['comment'] ?></p>
         <?php if(isset($_SESSION['id_member'])){ ?>
            <form action="../index.php?action=report&idComment=<?= $listComment['id']?>" method="POST">
            <input type="submit" value="Signaler le commentaire" >
        </form>
        <?php } ?>
     </div>
     <?php endforeach ?>
 </section>
 <?php $content = ob_get_clean()?>
 <?php include ('template.php'); ?>