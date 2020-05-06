<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/stylelog.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre</title>
    <?php 
        session_start();

    include('../PHP/Signin.php');
    include('../PHP/Identify.php');
    include('../PHP/Logout.php');
  
        if (isset($_SESSION['pseudo_member']))
        {
            echo 'Bonjour ' . $_SESSION['pseudo_member'];
        }
    //Regarder le fonctionnement
    
    ?>

</head>

<body>

    <!--Navigation-->

    <nav>
        <h1> <a href="../index.html">Jean Forteroche</a> </h1>
        <ul>
            <li> <a href="../index.html">Accueil</a> </li>
            <li>L'auteur</li>
            <li id="Chapitres"> <a href="./chapitre.html">Chapitres</a> </li>
        </ul>
        <a href="login.html">
            <img src="../fonts/fontawesome-free-5.13.0-desktop/svgs/solid/sign-in-alt.svg" alt="icon log" id="iconlog">
        </a>
        <a href="login.html" id="login" >Log-in</a>
    </nav>
    <!--Log in-->
    <section id="log">
        <form action="../PHP/Signin.php" method="POST" class="login">
            <h2>Connexion</h2>
            <label for="pseudo_member_signin">
                <input type="text" name="pseudo_member_login" class="pseudo" placeholder="Pseudo" />
            </label>
            <label for="pass_member_signin">
                <input type="password" name="pass_member_login" class="mdp" placeholder="Mot de passe" />
            </label>
            <p>Mot de passe oublié ?</p>
            <input type="submit" name="submit" value="Se connecter" class="button" />
        </form>
        <!--Log out-->
        <form action="../PHP/Registration.php" method="POST" class="login">
            <h2>Inscription</h2>
            <label for="pseudo_member">
                <input type="text" name="pseudo_member" class="pseudo" placeholder="Pseudo">
            </label>
            <label for="mail_member">
                <input type="email" name="mail_member" class="mail" placeholder="Mail">
            </label>
            <label for="pass_member">
                <input type="password" name="pass_member" class="mdp" placeholder="Mot de passe">
            </label>
            <input type="submit" name="submit" value="S'inscrire" class="button" />
        </form>
    </section>
    <!--Footer-->
    <footer>
        <p>Copyright Thomas Genet Openclassrooms 2020</p>
    </footer>
</body>

</html>