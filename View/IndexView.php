<!--Grâce à moi on affiche la section chapitre de la page accueil-->
<?php $title = 'Accueil'; ?>

<?php ob_start();?>
<!--Header-->
<header>
    <img src="../Public/Img/Header.png" alt="">
</header>
<!--Extrait des chapitres-->
<section id="chapitre">
    <?php foreach($chapitres as $chapitre): ?>
    <article class="chap">
        <h1>Chapitre 1</h1>
        <p>
            <?= $chapitre= ['chapter_content']?>
        </p>
    </article>
    <?php endforeach ?>

</section>
<?php $content = ob_get_clean()?>
<?php include('./template.php');?>
