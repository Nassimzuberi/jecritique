

<div class="col text-center">
    <h1 class="ml-3"><?= $post['titre'] ;?></h1>
    <div class="row">
        <?php if($post['imgname']) : ?>
            <img style="max-height:400px;" class="card-img-top" src="../app/static/image/post/<?=$post['imgname'] ?>">
        <?php else : ?>
            <img style="max-height:600px;" class="card-img-top" src="../app/static/image/no-image.jpg">
        <?php endif; ?>
    </div>


    <div class="row mb-1">
                <?= $post['text'] ; ?>
    </div>

    <div class="row mb-3">
        <div class="col-sm-10"></div>
        <small class="float-right"> Article de <a href="<?= $post['link'] ;?>" target="_blank"><?= $post['source'] ;?></a> </small>

    </div>

    <div class="text-center">
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

    </div>
</div>
<hr>
<div class="row">

        <?php foreach ($critiques as $critique ) : ?>
    <div class="col-sm-1"><i class="far fa-user fa-5x "></i></div>
    <div class="col-sm-11">
        <div class="card mb-3">
            <div class="card-header">Critique de <strong><?= $critique['pseudo'] ; ?></strong></div>
            <div class="card-body">
                <p class="card-text"><?= $critique['text'] ; ?></p>
                <div class="card-text"><small>
                        <?= $critique['like'] ; ?> Like <a href="?p=like&id=<?= $post[0] ; ?>&objet=critique">
                            <?php if($userFactory->action($post[0],'like','critique')) :?>
                                <i class="fas fa-heart"></i>
                            <?php else : ?>
                                <i class="far fa-heart"></i>
                            <?php endif ; ?>
                        </a>
                        <?= $critique['dislike'] ; ?> Dislike <a href="?p=dislike&id=<?= $post[0] ; ?>&objet=critique">
                            <?php if($userFactory->action($post[0],'dislike','critique')) :?>
                                <i class="fas fa-thumbs-down"></i>
                            <?php else : ?>
                                <i class="far fa-thumbs-down"></i>
                            <?php endif ; ?>
                        </a>
                        <?= $critique['retweet'] ; ?> Retweet <a href=""><i class="fas fa-retweet"></i></a>
                    </small>
                </div>
            </div>
            <div class="card-footer">
                <?= $critiqueFactory->nbComment($critique['id']) ; ?> commentaires |
                <a href="?p=index.critique&id=<?= $critique[0] ;?>">Voir les commentaires</a>
            </div>
        </div>
    </div>


        <?php endforeach; ?>

    <style>
        @media(max-width:544px){
            i{
                font-size:0.3em;
            }
        }
    </style>
    <div class="col-sm-1"><i class="fas fa-user fa-5x"></i></div>
    <div class="col-sm-11">
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