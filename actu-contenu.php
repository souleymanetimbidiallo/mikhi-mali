<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Articles</title>
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
                <li class="breadcrumb-item"><a href="actu.php">Actualités</a></li>
                <li class="breadcrumb-item active">Titre de l'actu</li>
            </ul>
            <div class="row">
                <div class="ml-4 col-4">
                    <h1 class="h3">Titre de l'actu </h1>
                </div>
            </div>
            <div class="row  my-3 mx-3">
                <div class="col-8">
                    <p class="text-muted">21 Mai 2019</p>
                    <figure class="w-25 table-success"> 
                        <img src="images/RaceforWater_Pollution_ChristopheLaunay.jpg" class="img-fluid img-thumbnail">
                    </figure>
                    <p class="p-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Aspernatur quasi in animi adipisci dolores dolorem quis obcaecati pariatur,
                        dicta doloremque? Quaerat alias, cum autem aspernatur temporibus 
                        exercitationem sequi. Corporis, ut!
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Aspernatur quasi in animi adipisci dolores dolorem quis obcaecati pariatur,
                        dicta doloremque? Quaerat alias, cum autem aspernatur temporibus 
                        exercitationem sequi. Corporis, ut!
                    </p>
                   
                    <p>
                        Nous suivre sur:
                        <a href="www.facebook.com" class="btn btn-primary">
                            <span class="fab fa-facebook-f"></span> Facebook
                        </a>
                        <a href="www.twitter.com" class="btn btn-info">
                            <span class="fab fa-twitter"></span> Twitter
                        </a>
                    </p>
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