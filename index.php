<?php
    include_once("connecterPDO.inc.php");
    $connexion = connecter("mikhi-mali", "parametre");
    $sql = "SELECT id_or, nom_or, description_or, quantite_or, images,
            DATE_FORMAT(date_prop, '%d/%m/%Y') AS date_prop 
            FROM ordures 
            LIMIT 4";
    $resultat = $connexion->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Accueil- Mikhi Mali</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>
        
        <!-- include HEADER -->
        <?php include_once("header.inc.php") ?>

        <main class="container my-5">
            <div class="row my-5">
                <section class="col-7">
                    <!--Begin Carousel-->
                    <div class="carousel slide show fade" data-ride="carousel" id="myCarousel" class="h-100">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/image3.jpg" alt="" class="img-fluid d-block w-100">
                                <p class="carousel-caption text-warning font-weight-bold">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Alias, porro?
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/image4.jpg" alt="" class="img-fluid d-block w-100">
                                <p class="carousel-caption text-warning font-weight-bold">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Alias, porro?
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/image9.jpg" alt="" class="img-fluid d-block w-100">
                                <p class="carousel-caption text-warning font-weight-bold">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Alias, porro?
                                </p>
                            </div>
                            <div class="carousel-item">
                                <img src="images/image10.jpg" alt="" class="img-fluid d-block w-100">
                                <p class="carousel-caption text-warning font-weight-bold">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Alias, porro?
                                </p>
                            </div>
                        </div>
                        <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                        <!--End Carousel-->
                    </div>
                </section>
                <!--Begin Carousel-->
                <aside class="col-5 jumbotron h-100 w-100">
                    <h1 class="h4">Bienvenue sur la plateforme Mikhi Maali</h1>
                    <p>Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Aliquam obcaecati incidunt
                         facilis distinctio fugiat assumenda nostrum 
                         unde qui deleniti necessitatibus.
                    </p>
                </aside>
                <!--End Carousel-->
            </div>
            <!-- Begin First-Line -->
            <section class="row mt-3">
                <h1 class="h3">Les dernières ventes</h1>
                <div class="row">
                    <?php
                        while($donnees = $resultat->fetch()){
                    ?>
                    <div class="col-12 col-md-6 col-lg-3 d-flex">
                        <article class="card">
                                <img src="images/<?= $donnees['images'] ?>" alt="" class="card-img-top img-thumbnail" style="max-height:175px;">
                            <div class="card-body bg-light d-flex flex-column">
                                <h1 class="card-title h6"><?= $donnees['nom_or'] ?></h1>
                                <p class="card-text h-100">
                                    <?php
                                        $contenu = $donnees['description_or'];
                                        $lg_max = 50;
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
                                <a href="vente-contenu.php?id=<?=$donnees['id_or']?>" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </article>
                    </div>
                    <?php
                        }
                    ?>
                </div>       
            </section>
            <!-- End First-Line -->
            <hr class="mt-5">
            <!-- Begin First-Line -->
            <section class="row mt-5">
                <h1 class="h3">Top des actualités</h1>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 d-flex">
                        <article class="card">
                                <img src="images/logo-2.JPG" alt="" class="card-img-top img-thumbnail">
                            <div class="card-body bg-light d-flex flex-column">
                                <h1 class="card-title h5">Lorem ipsum dolor sit.</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Magni quia animi reiciendis
                                </p>
                                <a href="#" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex">
                        <article class="card">
                                <img src="images/logo-2.JPG" alt="" class="card-img-top img-thumbnail">
                            <div class="card-body bg-light d-flex flex-column">
                                <h1 class="card-title h5">Lorem ipsum dolor sit.</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Magni quia animi reiciendis
                                </p>
                                <a href="#" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex">
                        <article class="card">
                                <img src="images/logo-2.JPG" alt="" class="card-img-top img-thumbnail">
                            <div class="card-body bg-light d-flex flex-column">
                                <h1 class="card-title h5">Lorem ipsum dolor sit.</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Magni quia animi reiciendis
                                </p>
                                <a href="#" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex">
                        <article class="card">
                                <img src="images/logo-2.JPG" alt="" class="card-img-top img-thumbnail">
                            <div class="card-body bg-light d-flex flex-column">
                                <h1 class="card-title h5">Lorem ipsum dolor sit.</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Magni quia animi reiciendis
                                </p>
                                <a href="#" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </article>
                    </div>
                </section>
            <!-- End First-Line -->
        </main>

        <!-- include FOOTER -->
        <?php include_once("footer.inc.php") ?>

        <!-- include JS Files -->
        <?php include_once("js-file.inc.php") ?>

    </body>
</html>