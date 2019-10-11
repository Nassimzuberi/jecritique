<div class="col mb-sm-3">
    <div class="row">
        <h3><?= $post['titre'] ;?> - <small><?= $post['lib'] ?></small></h3>
    </div>
    <div class="col">
        <small> Article de <a href="<?= $post['link'] ;?>" target="_blank"><?= $post['source'] ;?></a> </small>
    </div>
    <div class="col"><?= $post['text'] ; ?> </div>
    <div class="col"><small>
            <a href=""><?= $post['like'] ; ?> Like </a>
            <a href=""><?= $post['dislike'] ; ?> Dislike</a>
            <a href=""><?= $post['retweet'] ; ?> Retweet</a>

        </small>
    </div>
</div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php foreach ($critiques as $critique ) : ?>
        <div class="card mb-3">
            <div class="card-header">Critique de <strong><?= $critique['pseudo'] ; ?></strong></div>
            <div class="card-body">
                <p class="card-text"><?= $critique['text'] ; ?></p>
                <div class="card-text"><small>
                        <a href=""><?= $critique['like'] ; ?> Like </a>
                        <a href=""><?= $critique['dislike'] ; ?> Dislike</a>
                        <a href=""><?= $critique['retweet'] ; ?> Retweet</a>
                    </small>
                </div>
                <p>
                    <?= $critiqueFactory->nbComment($critique['id']) ; ?> commentaires |
                    <a href="?p=index.critique&id=<?= $critique[0] ;?>">Voir les commentaires</a>
                </p>
            </div>
        </div>

        <?php endforeach; ?>

        <form method="post" action="">
            <div class="row">
                <div class="col mx-sm-3">
                    <textarea name="text" class="form-control" placeholder="Ecrire une critique"></textarea>
                    <input type="hidden" name="idUser" class="form-control" value="<?php if(isset($_SESSION['user'])){
                        echo $_SESSION['user'] ;
                    } ?>">
                    <input type="hidden" name="idPost" class="form-control" value="<?= $_GET['id'] ; ?>">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary mb-2">Confirmer</button>
                </div>
            </div>
        </form>
    </div>
</div>