<!--Je suis le fichier template on passera par moi pour afficher les différentes vues-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../Public/CSS/style.css">
    <link rel="stylesheet" href="../Public/fonts/fontawesome-free-5.13.0-desktop/svgs/solid/">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ;?> </title>
    <script src="https://cdn.tiny.cloud/1/ze3sv9g6vjofffrg492wv8zh17as3c37b727diwq6ea0kszl/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            language: "fr_FR",
            selector: '#tinyMCE'
        });
    </script>
</head>

<body>
    <nav>
        <h2> <a href="../index.php">Jean Forteroche</a> </h2>
        <ul>
            <li> <a href="../index.php">Accueil</a> </li>

            <?php 
            if (isset($_SESSION)) {
                
                if (isset($_SESSION['id_member'])) {
                    ?>
            <li>
                <div id="decon">
                    <a href="../index.php?action=destroy">
                        <img src="../Public/fonts/fontawesome-free-5.13.0-desktop/svgs/solid/power-off.svg"
                            alt="icon log" id="iconlog">
                    </a>
                    <a href="../index.php?action=destroy" id="login">Déconnexion</a>
                </div>
            </li>
            <?php
                } else {
                    ?>
            <li>
                <a href="../index.php?action=FormLog">
                    <img src="../Public/fonts/fontawesome-free-5.13.0-desktop/svgs/solid/sign-in-alt.svg" alt="icon log"
                        id="iconlog">
                </a>
                <a href="../index.php?action=FormLog" id="login">Log-in</a>
            </li>
            <?php
                }
                if (isset($_SESSION['admin'])) {
                    if ($_SESSION['admin']== 1) {
                        ?>
            <li><a href="../index.php?action=admin">Edition</a></li>
            <?php
                    }
                }
            }
            ?>
        </ul>


    </nav>


    <?= $content ;?>

    <footer>
        <p>Copyright Thomas Genet Openclassrooms 2020</p>
    </footer>
</body>

</html>