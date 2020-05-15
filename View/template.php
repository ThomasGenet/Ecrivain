<!--Je suis le fichier template on passera par moi pour afficher les différentes vues-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../Public/CSS/style.css">
    <link rel="stylesheet" href="../Public/fonts/fontawesome-free-5.13.0-desktop/svgs/solid/">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ;?> </title>
</head>

<body>
    <nav>
        <h1> <a href="../index.php">Jean Forteroche</a> </h1>
        <ul>
            <li> <a href="../index.php">Accueil</a> </li>
            <li>L'auteur</li>
            

            <li> <a href="../index.php?action=listChapter">Chapitres</a> </li>
        </ul>
        <a href="../index.php?action=FormLog">
            <img src="../Public/fonts/fontawesome-free-5.13.0-desktop/svgs/solid/sign-in-alt.svg" alt="icon log"
                id="iconlog">
        </a>
        <a href="../index.php?action=FormLog" id="login">Log-in</a>
    </nav>


    <?= $content ;?>

    <footer>
        <p>Copyright Thomas Genet Openclassrooms 2020</p>
    </footer>
</body>

</html>