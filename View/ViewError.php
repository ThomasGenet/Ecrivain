<?php $titre = 'Mon Blog'; ?>

<?php ob_start() ?>
<p>Une erreur est survenue : <?= $msgErreur ?></p>

<?php $content = ob_get_clean(); ?>
<?php include ('template.php'); ?>