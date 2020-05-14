
 <?php $title = 'Log'; ?>    
 <?php ob_start();?>
<!--S'identifier-->
<section id="log">
    <form action="../index.php?actionlog=signin" method="POST" class="login">
        <h2>Connexion</h2>
        <label for="pseudo_member_signin">
            <input type="text" name="pseudo_member_login" class="pseudo" placeholder="Pseudo" />
        </label>
        <label for="pass_member_signin">
            <input type="password" name="pass_member_login" class="mdp" placeholder="Mot de passe" />
        </label>
        <p>Mot de passe oublié ?</p>

        <a href="../index.php?actionlog=signin">
        <input type="submit" name="submit" value="Se connecter" class="button"> 
        </a>
    </form>



    <!--S'enregistrer-->
    <form action="../index.php?actionlog=login" method="POST" class="login">
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
    </form>
    <a href="../index.php?actionlog=login">
        <input type="submit" name="submit" value="S'inscrire" class="button" />
    </a>

<?php $content = ob_get_clean();?> 
<?php require ('template.php');?>