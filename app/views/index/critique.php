<div class="col mb-sm-3">
    <div class="row">
        <h3><?= $critique['pseudo'] ;?> </h3>
    </div>
    <div class="row">
        <p><?= $critique['text'] ; ?> </p>
    </div>
    <div class="row"><small>
            <a href=""><?= $critique['like'] ; ?> Like </a>
            <a href=""><?= $critique['dislike'] ; ?> Dislike</a>
            <a href=""><?= $critique['retweet'] ; ?> Retweet</a>

        </small>
    </div>
</div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <?php foreach ($comments as $critique ) : ?>
            <div class="card mb-3">
                <div class="card-header">Commentaire de <strong><?= $critique['pseudo'] ; ?></strong></div>
                <div class="card-body">
                    <p class="card-text"><?= $critique['text'] ; ?></p>
                    <div class="card-text"><small>
                            <a href=""><?= $critique['like'] ; ?> Like</a>
                            <a href=""><?= $critique['dislike'] ; ?> Dislike</a>
                            <a href=""><?= $critique['retweet'] ; ?> Retweet</a>
                        </small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <form method="post" action="">
            <div class="row">
                <div class="col mx-sm-3">
                    <textarea name="text" class="form-control" placeholder="Ecrire un commentaire"></textarea>
                    <input type="hidden" name="idUser" class="form-control" value="<?php if(isset($_SESSION['user'])){
                        echo $_SESSION['user'] ;
                    } ?>">
                    <input type="hidden" name="idCritique" class="form-control" value="<?= $_GET['id'] ; ?>">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary mb-2">Confirmer</button>
                </div>
            </div>
        </form>
    </div>
</div>