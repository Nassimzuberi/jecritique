<h1>Ajouter une catégorie</h1>
<?php if($success){ ?>
    <div class="alert alert-success">Vous avez ajouter une catégorie</div>
<?php } elseif($success === false){ ?>

    <div class="alert alert-danger">Il y a une erreur</div>
    <?php
} elseif(!$success){} {}?>



<form method="post" action="" >
    <label>Titre :</label>
    <input type="text" name="lib" class="form-control">
    <button type="submit" class="btn btn-success">Ajouter</button>
</form>
