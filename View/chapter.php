<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../Public/CSS/style.css">
    <link rel="stylesheet" href="../Public/CSS/stylechapitre.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre</title>
</head>

<body>
    <!--Navigation-->
    <?php require('./_header.php') ?>
    <!--Header-->
    <header>
        <h1>Chapitre 1</h1>
        <p>Vous êtes sur la page du chapitre 1</p>
    </header>
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
    <!--Footer-->
    <?php require('./_footer.php') ?>
</body>

</html>