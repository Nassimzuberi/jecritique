<div class="row">
    <div class="col-sm-8">
        <?php foreach($posts as $post): ?>
        <div class="card mb-sm-2">
            <h4 class="card-header"><?= $post['titre'] ;?> - <small><?= $post['lib'] ?></small></h4>
            <div class="card-body">
                <small> Article de <a href="<?= $post['link'] ;?>" target="_blank"><?= $post['source'] ;?></a> </small>
                <p><?= substr($post['text'], 0, 400) ; ?> ... <a href="?p=index.post&id=<?= $post[0] ; ?>">Voir la suite</a></p>
                <small>
                    <a href="?p=like&id=<?= $post[0] ; ?>&objet=post"><?= $post['like'] ; ?> Like</a>
                    <a href="?p=dislike&id=<?= $post[0] ; ?>&objet=post"><?= $post['dislike'] ; ?> Dislike</a>
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
    <div class="col-sm-4">
        <ul class="list-group">
        <?php foreach($categories as $categorie) : ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="?p=index.categorie&id=<?= $categorie['id'] ; ?>"><?= $categorie['lib'] ; ?></a>
                    <span class="badge badge-primary badge-pill">
                        <?= $category->countPostByCat($categorie['id']) ;?>
                    </span>
                </li>

        <?php endforeach ; ?>
        </ul>
    </div>
</div>

