<div class="row">

    <div class="col-sm-8">
        <?php foreach($posts as $post): ?>
        <div class="card mb-sm-2">
            <h4 class="card-title mx-auto"><?= $post['titre'] ;?> - <small><?= $post['lib'] ?></small></h4>
            <?php if($post['imgname']) : ?>
                <img style="max-height:400px;" class="card-img-top" src="../app/static/image/post/<?=$post['imgname'] ?>">
            <?php else : ?>
                <img style="max-height:600px;" class="card-img-top" src="../app/static/image/no-image.jpg">
            <?php endif; ?>
            <div class="card-body">
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
                    <?= $postFactory->nbCritique($post[0]) ; ?> critiques
                    | <a href="?p=index.post&id=<?= $post[0] ; ?>">Voir les critiques</a>
                </p>
            </div>
        </div>
<hr>
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

