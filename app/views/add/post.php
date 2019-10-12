<h1>Ajouter un article</h1>
<?php if($success){ ?>
    <div class="alert alert-success">Vous avez ajouter un article</div>
<?php } elseif($success === false){ ?>

    <div class="alert alert-danger">Il y a une erreur</div>
    <?php
} elseif(!$success){} {}?>



    <form method="post" action=""  enctype="multipart/form-data">
        <div class="form-group">
        <label>Titre :</label>
        <input type="text" name="titre" class="form-control">
        <label>Source :</label>
        <input type="text" name="source" class="form-control">
        <label>Lien original de l'article :</label>
        <input type="text" name="link" class="form-control">
        <label>Catégorie :</label>
        <select class="form-control" name="idCategorie" >
            <?php foreach($categories as $categorie) : ?>
                <option value="<?= $categorie['id'] ;?>"><?= $categorie['lib'] ; ?></option>
            <?php endforeach; ?>
        </select>
            <label>Ajouter un média :</label>
            <input type="file" name="image" class="form-control">
        <label>Texte :</label>
        <textarea name="text" class="form-control"></textarea>

        <button type="submit" class="btn btn-success">Ajouter</button>
        </div>
    </form>

