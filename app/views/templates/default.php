<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="footer, address, phone, icons" />

    <title>Je critique</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script 	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/0a9da0bbd4.js" crossorigin="anonymous"></script>


</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Je critique</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION['user'])){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="?p=index.user">Mon compte
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?p=deconnexion">Deconnexion
                        </a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="?p=connexion">Connexion
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?p=inscription">Inscription
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>



<div>
    <div class="container" style="padding-top: 30px;padding-bottom:30px;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->



</body>
</html>