<h1>Inscription</h1>
<?php if($success){ ?>
    <div class="alert alert-success">Vous êtes bien inscrit</div>
<?php } elseif($success === false){ ?>

    <div class="alert alert-danger">Il y a une erreur</div>
<?php
} elseif(!$success){} {}?>



<form method="post" action="" >
    <label>Nom :</label>
    <input type="text" name="nom" class="form-control">
    <label>Prenom :</label>
    <input type="text" name="prenom" class="form-control">
    <label>Pseudo :</label>
    <input type="text" name="pseudo" class="form-control">
    <label>Email :</label>
    <input type="text" name="email" class="form-control">
    <label>Mot de passe :</label>
    <input type="password" name="mdp" class="form-control">
    <input type="hidden" name="dateinscription" value="<?= date('Y-m-d') ;?>">
    <button type="submit" class="btn btn-success">S'incrire</button>
</form>
