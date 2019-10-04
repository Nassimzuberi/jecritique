<div class="row">
    <div class="col-sm-8">
        <?php foreach($posts as $post): ?>
            <h4><?= $post['titre'] ;?> - <small><?= $post['lib'] ?></small></h4>
            <small> Provient de <?= $post['source'] ;?> </small>
            <a href="<?= $post['link'] ;?>" target="_blank">Lien d'origine</a>
            <p><?= $post['text'] ; ?> </p>

        <?php endforeach ; ?>

    </div>
</div>