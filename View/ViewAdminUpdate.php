<?php $title = 'Admin vue chapitre'; ?>
<?php ob_start();?>

<!--Header-->
<header>
    <h1>Mon tableau de bord</h1>
</header>

<form action="../index.php?action=updateChapter" method="POST" id="formChapter">
    <?php  foreach($chapters as $chapter): ?>

    <input type="text" name="titleChapter" placeholder="<?=$chapter['title_chapter']?>">
    <textarea id='tinyMCE' name="contentChapter" id="" cols="30" rows="10">
        <?=$chapter['chapter_content']?>
    </textarea>

    <?php endforeach;?>
    <input type="submit" id="addChapter">
</form>

<?php $content = ob_get_clean() ?>
<?php include ('template.php');?>