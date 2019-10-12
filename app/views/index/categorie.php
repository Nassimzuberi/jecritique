<h1 class="text-center mb-3">Articles de la catégorie : <?= $lib ; ?></h1>
<div class="row">
    <div class="col">
        <?php foreach($posts as $post): ?>
            <div class="card mb-sm-2">
                <?php if($post['imgname']) : ?>
                    <img style="max-height:400px;" class="card-img-top" src="../app/static/image/post/<?=$post['imgname'] ?>">
                <?php else : ?>
                    <img style="max-height:600px;" class="card-img-top" src="../app/static/image/no-image.jpg">
                <?php endif; ?>
                <h4 class="card-header"><?= $post['titre'] ;?> - <small><?= $post['lib'] ?></small></h4>
                <div class="card-body">
                    <small> Article de <a href="<?= $post['link'] ;?>" target="_blank"><?= $post['source'] ;?></a> </small>
                    <p><?= substr($post['text'], 0, 400) ; ?> ... <a href="?p=index.post&id=<?= $post[0] ; ?>">Voir la suite</a></p>
                    <small>
                        <?= $post['like'] ; ?> Like <a href="?p=like&id=<?= $post[0] ; ?>&objet=post">
                            <?php if($userFactory->action($post[0],'like','post')) :?>
                                <i class="fas fa-heart"></i>
                            <?php else : ?>
                                <i class="far fa-heart"></i>
                            <?php endif ; ?>
                        </a>
                        <?= $post['dislike'] ; ?> Dislike <a href="?p=dislike&id=<?= $post[0] ; ?>&objet=post">
                            <?php if($userFactory->action($post[0],'dislike','post')) :?>
                                <i class="fas fa-thumbs-down"></i>
                            <?php else : ?>
                                <i class="far fa-thumbs-down"></i>
                            <?php endif ; ?>
                        </a>
                        <?= $post['retweet'] ; ?> Retweet <a href=""><i class="fas fa-retweet"></i></a>

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