<?php $title = htmlspecialchars(utf8_encode($truc->getTitle())); ?>

<?php ob_start(); ?>
<h1><?php echo($title); ?></h1>
<p>
    <a href="index.php"> Retour à la liste</a>
</p>

<div class="news">
    <h3>
        <?=htmlspecialchars(utf8_encode( $truc->getTitle())) ?>
        <em> le <?= $truc->getCreationDate() ?></em>
    </h3>
    <p>
        <?= nl2br(htmlspecialchars(utf8_encode($truc->getContent()))) ?>
    </p>

</div>

<h2> Commentaires</h2>

<form action="index.php?action=addComment&amp;id= <?=$truc->getId()?>" method="post">
    <div>
        <label for="author"> Auteur</label> <br>
        <input type="text" id="author" name="author"/>
    </div>
    <div>
        <label for="comment">Commentaire</label> <br>
        <textarea id="comment" name="comment">

        </textarea>
    </div>
    <div>
        <input type="submit"/>
    </div>
</form>

<?php foreach ($trucs as $data):?>

<p>
    <strong> <?=htmlspecialchars($data->getAuthor()) ?> </strong>
    le <?= $data->getCommentDate() ?>
</p>
<p>
    <?= nl2br(htmlspecialchars($data->getComment())) ?>
</p>

<?php  endforeach;
$content = ob_get_clean();
require('template.php');
?>