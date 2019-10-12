<div class="col mb-sm-3">
    <div class="row">
        <h3> <strong><?= $critique['pseudo'] ;?></strong> sur l'article <a target="_blank" href="?p=index.post&id=<?= $post[0] ; ?>"><?= $post['titre']; ?> </h3></a>
    </div>
    <div class="row">
        <p><?= $critique['text'] ; ?> </p>
    </div>
    <div class="row"><small>
            <?= $critique['like'] ; ?> Like <a href="?p=like&id=<?= $post[0] ; ?>&objet=critique">
                <?php if($userFactory->action($critique[0],'like','critique')) :?>
                    <i class="fas fa-heart"></i>
                <?php else : ?>
                    <i class="far fa-heart"></i>
                <?php endif ; ?>
            </a>
            <?= $critique['dislike'] ; ?> Dislike <a href="?p=dislike&id=<?= $post[0] ; ?>&objet=critique">
                <?php if($userFactory->action($critique[0],'dislike','critique')) :?>
                    <i class="fas fa-thumbs-down"></i>
                <?php else : ?>
                    <i class="far fa-thumbs-down"></i>
                <?php endif ; ?>
            </a>
            <?= $critique['retweet'] ; ?> Retweet <a href=""><i class="fas fa-retweet"></i></a>

        </small>
    </div>
</div>
<hr>

<div class="row">

        <?php foreach ($comments as $critique ) : ?>
    <div class="col-sm-1 mx-auto"><i class="far fa-user fa-5x "></i></div>
    <div class="col-sm-11">
            <div class="card mb-3">
                <div class="card-header">Commentaire de <strong><?= $critique['pseudo'] ; ?></strong></div>
                <div class="card-body">
                    <p class="card-text"><?= $critique['text'] ; ?></p>
                    <div class="card-text"><small>
                            <?= $critique['like'] ; ?> Like <a href="?p=like&id=<?= $post[0] ; ?>&objet=comment">
                                <?php if($userFactory->action($critique[0],'like','comment')) :?>
                                    <i class="fas fa-heart"></i>
                                <?php else : ?>
                                    <i class="far fa-heart"></i>
                                <?php endif ; ?>
                            </a>
                            <?= $critique['dislike'] ; ?> Dislike <a href="?p=dislike&id=<?= $post[0] ; ?>&objet=comment">
                                <?php if($userFactory->action($critique[0],'dislike','comment')) :?>
                                    <i class="fas fa-thumbs-down"></i>
                                <?php else : ?>
                                    <i class="far fa-thumbs-down"></i>
                                <?php endif ; ?>
                            </a>
                            <?= $critique['retweet'] ; ?> Retweet <a href=""><i class="fas fa-retweet"></i></a>
                        </small>
                    </div>
                </div>
            </div>
    </div>
        <?php endforeach; ?>

    <div class="col-sm-1 mx-auto"><i class="fas fa-user fa-5x "></i></div>
    <div class="col-sm-11">
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