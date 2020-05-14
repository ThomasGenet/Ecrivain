<!--Grâce à moi on affiche la section chapitre de la page accueil-->
<?php $title = 'Accueil'; ?>

<?php ob_start();?>
<!--Header-->
<header>
    <img src="../Public/Img/Header.png" alt="">
</header>
<!--Extrait des chapitres-->
<section id="chapitre">
    <figure class="chap">
        <h1>Chapitre 1</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae hic possimus deleniti odit
            quod ipsum, sunt numquam ratione aspernatur architecto at magnam impedit quis eaque fuga velit quasi
            voluptas?
        </p>
    </figure>
    <figure class="chap">
        <h1>Chapitre 2</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae hic possimus deleniti odit
            quod ipsum, sunt numquam ratione aspernatur architecto at magnam impedit quis eaque fuga velit quasi
            voluptas?
        </p>
    </figure>
    <figure class="chap">
        <h1>Chapitre 3</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae hic possimus deleniti odit
            quod ipsum, sunt numquam ratione aspernatur architecto at magnam impedit quis eaque fuga velit quasi
            voluptas?
        </p>
    </figure>
    <figure class="chap">
        <h1>Chapitre 4</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae hic possimus deleniti odit
            quod ipsum, sunt numquam ratione aspernatur architecto at magnam impedit quis eaque fuga velit quasi
            voluptas?
        </p>
    </figure>


</section>
<?php $content = ob_get_clean()?>
<?php include('./template.php');?>
