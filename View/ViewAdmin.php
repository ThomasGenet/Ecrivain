<?php $title = 'Admin'; ?>
<?php ob_start();?>

<!--Header-->
<header>
    <h1>Mon tableau de bord</h1>
</header>

<form action="../index.php?action=addChapter" method="POST" id="formChapter">
    <input type="text" name="titleChapter" placeholder="Titre du Chapitre">
    <textarea id='tinyMCE' name="contentChapter" id="" cols="30" rows="10"></textarea>
    <input type="submit" id="addChapter">
</form>
<section id="admin">
    <div id="listChapters">
        <h2>Liste des chapitres </h2>
        <?php foreach($chapters as $chapter): ?>
            
        <article class="chap">
            <a href="index.php?action=getChapter&id=<?= $chapter['id']?>">

                <h1><?= $chapter ['title_chapter']?></h1>
            </a>
            <a href="">Modifier</a>
            <a href="">Supprimer</a>
        </article>

        <?php endforeach ?>

    </div>
    <div id="listComments">
    <h2>Liste des commentaires signalés</h2>
        <?php foreach($listComments as $listComment): ?>
            
        <div class="excom">
            
            <p><?= $listComment['comment'] ?></p>
            
            <a href="../index.php?action=removereport&idReport=<?= $listComment['id'] ?>">Retirer le signalement</a>
            <a href="../index.php?action=deleteComment&idDeleteComment=<?= $listComment['id'] ?>">Supprimer</a>
        </div>
        <?php endforeach ?>
    </div>
</section>

<?php $content = ob_get_clean() ?>
<?php include ('template.php');?>