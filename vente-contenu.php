<?php
    $id = $_GET['id'];
    include_once("connecterPDO.inc.php");
    $connexion = connecter("mikhi-mali", "parametre");
    $sql = "SELECT id_or, nom_or, description_or, quantite_or, images,
            DATE_FORMAT(date_prop, '%d/%m/%Y') AS date_prop 
            FROM ordures 
            WHERE id_or = ?";
    $resultat = $connexion->prepare($sql);
    $resultat->execute(array($id));
    $donnees = $resultat->fetch();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ventes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <!-- include HEADER -->
        <?php include_once("header.inc.php") ?>

        <main class="container-fluid mt-5">
            <ul class="breadcrumb" style="font-size:14px;">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item"><a href="ventes.php">Ventes</a></li>
                <li class="breadcrumb-item active"><?= $donnees['nom_or'] ?></li>
            </ul>
            <div class="row">
                <div class="ml-4 col-4">
                    <h1 class="h3"><?= $donnees['nom_or'] ?></h1>
                </div>
            </div>
            <div class="row  my-3 mx-3">
                <div class="col-8">
                    <p class="text-muted"><?= $donnees['date_prop'] ?></p>
                    <figure class="w-25 table-success"> 
                        <img src="images/<?= $donnees['images'] ?>" class="img-fluid img-thumbnail">
                    </figure>
                    <p class="p-3"><?= $donnees['description_or'] ?></p>
                    <p><strong>Quantité: </strong> <?= $donnees['quantite_or'] ?></p>
                    <p>
                        <a href="contact.php" class="btn btn-secondary mx-auto">
                            <span class="fas fa-envelope"></span> Contactez-nous
                        </a>
                    </p>
                    Nous suivre sur:
                    <a href="www.facebook.com" class="btn btn-primary">
                        <span class="fab fa-facebook-f"></span> Facebook
                    </a>
                    <a href="www.twitter.com" class="btn btn-info">
                        <span class="fab fa-twitter"></span> Twitter
                    </a>
                </div>

                <!-- Include publicite.inc.php -->
                <?php include_once("publicite.inc.php") ?>
                
            </div>
        </main>
        
        <!-- include FOOTER -->
        <?php include_once("footer.inc.php") ?>

        <!-- include JS Files -->
        <?php include_once("js-file.inc.php") ?>
        
    </body>
</html>