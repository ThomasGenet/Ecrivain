<?php $title = 'Admin'; ?>    
<?php ob_start();?>
 <!--Navigation-->
    
    <!--Header-->
    <header>
        <h1>Mon tableau de bord</h1>
    </header>

    <form action="../index.php?action=addChapter" method="POST" id="formChapter">
        <input type="text" name="titleChapter" placeholder="Titre du Chapitre">
        <textarea id='tinyMCE' name="contentChapter" id="" cols="30" rows="10"></textarea>
        <input type="submit" id="addChapter">
    </form>
    
<?php $content = ob_get_clean() ?>
<?php include ('template.php');?>