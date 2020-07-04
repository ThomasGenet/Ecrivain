<!--Grâce à moi on affiche la section chapitre de la page accueil-->
<?php $title = 'Accueil'; ?>

<?php ob_start();?>
<!--Header-->
<header>
    <img src="../Public/Img/Header.png" alt="">
</header>
<!--Extrait des chapitres-->
<section id="chap">
    <h1>Liste des chapitres</h1>
    <div id="chapitre">
    <?php foreach($chapitres as $chapitre): ?>

    <article class="chap">
        <a href="index.php?action=getChapter&id=<?= $chapitre['id']?>">

            <h2><?= $chapitre ['title_chapter']?></h2>
        </a>
    </article>
        
    <?php endforeach ?>
    </div>
</section>
<?php $content = ob_get_clean()?>
<?php include('template.php');?>