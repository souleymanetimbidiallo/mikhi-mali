<?php
    include_once("connecterPDO.inc.php");
    $connexion = connecter("mikhi-mali", "parametre");
    $sql = "SELECT id_or, nom_or, description_or, quantite_or, images,
            DATE_FORMAT(date_prop, '%d/%m/%Y') AS date_prop 
            FROM ordures 
            ORDER BY id_or desc";
    $resultat = $connexion->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ventes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <!-- include HEADER -->
        <?php include_once("header.inc.php") ?>

        <main class="container-fluid mt-5">
            <ul class="breadcrumb" style="font-sisze:14px;">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item active">Ventes</li>
            </ul>
            <div class="row">
                <div class="ml-4 col-4">
                    <h1 class="h3">Les ventes</h1>
                </div>
                <div class="offset-4 col-2">
                    <h1 class="h3">Les publicités</h1>
                </div>
            </div>
            <div class="row  my-3 mx-3">
                <div class="col-8 list-group list-group-flush">
                    <?php
                        while($donnees = $resultat->fetch()) {
                    ?>
                    <!--Begin div.list-group-item-->
                    <div class="list-group-item list-group-item-action mb-3">
                        <div class="row">
                            <figure class="col-4 figure">
                                <img src="images/<?= $donnees['images'] ?>" alt="" class="img-fluid img-thumbnail">
                            </figure>
                            <div class="col-6">
                                <h1 class="h3"><a href="vente-contenu.php?id=<?=$donnees['id_or']?>"><?= $donnees['nom_or']?></a></h1>
                                <p>
                                    <?php
                                        $contenu = $donnees['description_or'];
                                        $lg_max = 125;
                                        if(strlen($contenu)>$lg_max){
                                            $contenu = substr($contenu, 0, $lg_max);
                                            $espace = strrpos($contenu, " ");
                                            $contenu = substr($contenu, 0, $lg_max);
                                            $contenu .= "...";
                                        }
                                        echo $contenu;
                                    ?>
                                    <br>
                                    <em><?= $donnees['date_prop'] ?>&nbsp;&nbsp;&nbsp;</em>
                                    <strong>Quantité: </strong><?= $donnees['quantite_or'] ?>
                                </p>
                                <a href="vente-contenu.php?id=<?= $donnees['id_or'] ?>" class="btn btn-info">En savoir plus</a>
                            </div>
                        </div>
                    </div><!--End div.list-group-item-->
                    <?php
                        } 
                    ?>
                    
                    <!--Begin pagination-->
                    <ul class="pagination justify-content-start m-4">
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                    </ul>
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