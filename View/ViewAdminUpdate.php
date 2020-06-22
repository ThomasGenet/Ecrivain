<?php $title = 'Admin vue chapitre'; ?>
<?php ob_start();?>

<!--Header-->
<header>
    <h1>Mon tableau de bord</h1>
</header>

<form action="../index.php?action=updateChapter&idUpdateChapter=<?= $_GET['idUpdate'] ?>" method="POST" id="formChapter">
    <?php  foreach($chaptersUpdate as $chapterUpdate): ?>

    <input type="text" name="titleChapter" placeholder="<?=$chapterUpdate['title_chapter']?>"> </input >
    <textarea id='tinyMCE' name="contentChapter" id="" cols="30" rows="10">
        <?=$chapterUpdate['chapter_content']?>
    </textarea>
    <input type="submit" id="addChapter" value="Modifier">
    <?php endforeach;?>
    
</form>

<?php $content = ob_get_clean() ?>
<?php include ('template.php');?>