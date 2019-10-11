<h1 class="text-center mb-3">Articles de la catégorie : <?= $lib ; ?></h1>
<div class="row">
    <div class="col">
        <?php foreach($posts as $post): ?>
            <div class="card mb-sm-2">
                <h4 class="card-header"><?= $post['titre'] ;?> - <small><?= $post['lib'] ?></small></h4>
                <div class="card-body">
                    <small> Article de <a href="<?= $post['link'] ;?>" target="_blank"><?= $post['source'] ;?></a> </small>
                    <p><?= substr($post['text'], 0, 400) ; ?> ... <a href="?p=index.post&id=<?= $post[0] ; ?>">Voir la suite</a></p>
                    <small>
                        <a href=""><?= $post['like'] ; ?> Like </a>
                        <a href=""><?= $post['dislike'] ; ?> Dislike</a>
                        <a href=""><?= $post['retweet'] ; ?> Retweet</a>

                    </small>
                </div>
                <div class="card-footer">
                    <p>
                        <?= $postFactory->nbCritique($post[0]) ; ?> Critique
                        | <a href="?p=index.post&id=<?= $post[0] ; ?>">Voir les critiques</a>
                    </p>
                </div>
            </div>
        <?php endforeach ; ?>

    </div>
</div>