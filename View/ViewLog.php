
<?php 
        session_start();
    include('../Controller/Registration.php');
  
        if (isset($_SESSION['pseudo_member']))
        {
            echo 'Bonjour ' . $_SESSION['pseudo_member'];
        }
    //Regarder le fonctionnement    
?>

 <?php $title = 'Log'; ?>    
 <?php ob_start();?>
<!--Log in-->
<section id="log">
    <form action="../index.php" method="POST" class="login">
        <h2>Connexion</h2>
        <label for="pseudo_member_signin">
            <input type="text" name="pseudo_member_login" class="pseudo" placeholder="Pseudo" />
        </label>
        <label for="pass_member_signin">
            <input type="password" name="pass_member_login" class="mdp" placeholder="Mot de passe" />
        </label>
        <p>Mot de passe oublié ?</p>
        <a href="../index.php">
        <input type="submit" name="submit" value="Se connecter" class="button"> 
        </a>
    </form>



    <!--Log out-->
    <form action="../index.php" method="POST" class="login">
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
        <a href="../index.php">
        <input type="submit" name="submit" value="S'inscrire" class="button" />
        </a>
    </form>

<?php $content = ob_get_clean();?> 
<?php require ('template.php');?>