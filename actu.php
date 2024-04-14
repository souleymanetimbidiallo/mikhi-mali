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
                <li class="breadcrumb-item active">Actualités</li>
            </ul>
            <div class="row">
                <div class="ml-4 col-4">
                    <h1 class="h3">Actualités</h1>
                </div>
                <div class="offset-4 col-2">
                    <h1 class="h3">Les publicités</h1>
                </div>
            </div>
            <div class="row  my-3 mx-3">
                <div class="col-8 list-group list-group-flush">
                    <!--Begin div.list-group-item-->
                    <div class="list-group-item list-group-item-action mb-3">
                        <div class="row">
                            <figure class="col-4 figure">
                                <img src="images/printers-344016_960_720.jpg" alt="" class="img-fluid img-thumbnail">
                            </figure>
                            <div class="col-6">
                                <h1 class="h3"><a href="actu-contenu.php">Titre de l'article</a></h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Asperiores, reprehenderit.
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Asperiores, reprehenderit.
                                </p>
                                <a href="actu-contenu.php" class="btn btn-info">En savoir plus</a>
                            </div>
                        </div>
                    </div><!--End div.list-group-item-->
                    
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