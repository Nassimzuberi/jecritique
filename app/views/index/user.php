<h1 class="text-center"> Profil de <?= $user['pseudo'] ?> </h1>

<ul class="list-group">
    <li>
        Nom : <?= $user['nom'] ; ?>
    </li>
    <li>
        Prenom : <?= $user['prenom'] ; ?>
    </li>
    <li>
        Email : <?= $user['email'] ; ?>
    </li>
    <li>
        Date d'inscription : <?= $user['dateinscription'] ; ?>
    </li>
</ul>