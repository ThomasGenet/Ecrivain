<?php $title = 'Log'; ?>
<?php ob_start();?>
<!--S'identifier-->
<section id="log">
    <form action="/index.php?action=signin&id" method="POST" class="login">
        <h2>Connexion</h2>
        
        <input type="text" name="mail_member_login" class="mail" placeholder="Mail" />
        <input type="password" name="pass_member_login" class="mdp" placeholder="Mot de passe" />
        <input type="submit" name="submit" value="Se connecter" class="button">

    </form>

    <!--S'enregistrer-->
    <form action="/index.php?action=login" method="POST" class="login">
        <h2>Inscription</h2>
        
        <input type="text" name="pseudo_member" class="pseudo" placeholder="Pseudo">
        <input type="email" name="mail_member" class="mail" placeholder="Mail">
        <input type="password" name="pass_member" class="mdp" placeholder="Mot de passe">
        <input type="submit" name="submit" value="S'inscrire" class="button" />

    </form>

</section>
    <?php $content = ob_get_clean();?>
    <?php require ('template.php');?>