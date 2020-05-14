<?php $title = 'Admin'; ?>    
<?php ob_start();?>
 <!--Navigation-->
    <nav>
        <h1> <a href="../index.html">Jean Forteroche</a> </h1>
        <ul>
            <li> <a href="../index.html">Ajouter un chapitre</a> </li>
            <li>L'auteur</li>
            <li id="Chapitres"> <a href="./chapitre.html">Vos commentaires</a></li>
        </ul>
        <div id="decon">
            <a href="./IndexView.php">
                <img src="../Public/fonts/fontawesome-free-5.13.0-desktop/svgs/solid/power-off.svg" alt="icon log"
                    id="iconlog">
            </a>
            <a href="./pagelogin.php" id="login">Déconnexion</a>
        </div>
    </nav>
    <!--Header-->
    <header>
        <h1>Mon tableau de bord</h1>
    </header>
    
<?php $content = ob_get_clean() ?>
<?php include ('template.php');?>