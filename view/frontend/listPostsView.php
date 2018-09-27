<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>



<?php foreach ($trucs as $data):?>
  <div class="news">
      <h3>
          <?= htmlspecialchars( utf8_encode($data->getTitle())) ?>
          <em> le <?= $data->getCreationDate() ?></em>
      </h3>
      <p>
          <?= nl2br(htmlspecialchars(utf8_encode($data->getContent()))) ?> <br>
          <em> <a href="index.php?action=post&amp;id= <?= $data->getId() ?>">
                  Comentaires
              </a>
          </em>
      </p>
  </div>
<?php endforeach;?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php');
