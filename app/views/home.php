<div class="row">
    <div class="col-sm-8">
        <?php foreach($posts as $post): ?>
            <h4><?= $post['titre'] ;?> - <small><?= $post['lib'] ?></small></h4>
            <small> Provient de <?= $post['source'] ;?> </small>
            <a href="<?= $post['link'] ;?>" target="_blank">Lien d'origine</a>
            <p><?= substr($post['text'], 0, 400) ; ?> ... <a href="?p=index.post&id=<?= $post[0] ; ?>">Voir la suite</a></p>


        <?php endforeach ; ?>

    </div>
    <div class="col-sm-4">
        <ul class="list-group">
        <?php foreach($categories as $categorie) : ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="?p=index.categorie&id=<?= $categorie['id'] ; ?>"><?= $categorie['lib'] ; ?></a>
                    <span class="badge badge-primary badge-pill">
                        <?= $category->countPostByCat($categorie['id'])[0] ;?>
                    </span>
                </li>

        <?php endforeach ; ?>
        </ul>
    </div>
</div>
