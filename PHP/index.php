
<?php 
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ecrivain;charset=utf8', 'root', 'root');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Vérification de la validité des informations

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass_member'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO membre(pseudo_member, pass_member, mail_member, date_inscription) VALUES(:pseudo_member, :pass_member, :mail_member, CURDATE())');
$req->execute(array(
    'pseudo_member' => $pseudo,
    'pass_member' => $pass_hache,
    'mail_member' => $mail));
    echo 'info ok';
    
?>
