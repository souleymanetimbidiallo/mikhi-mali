<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>
        
        <!-- include HEADER -->
        <?php include_once("header.inc.php") ?>
        
        <main class="container-fluid my-5">
            <ul class="breadcrumb" style="font-size:14px;">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ul>
            
            <div class="row">
                <div class="col-6">
                    <h1 class="h3">Contactez-nous</h1>
                    <h1 class="h4">GUI-PLUS Entreprise</h1>
                        <p>
                            <em>Adresse: </em>
                            Guinée/Conakry/Ratoma/Kobaya
                        </p>
                        <p>
                        <em>Téléphone: </em>
                            628-50-75-80 / 662-74-87-29
                        </p>
                        <p>
                            <em>Email: </em>souleymanetimbidiallo@gmail.com
                        </p>      
                    </address>
                </div>
                <div class="col-6">
                    <form action="">
                        <h1 class="h3">Formulaire de contact</h1>
                        <div class="form-group">
                            <label for="nom">Nom:</label>
                            <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" 
                            class="form-control" value="<?php if(isset($_POST['nom'])) echo $_POST['nom']?>" required autocomplete>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom:</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse électronique</label>
                            <input type="text" name="email" id="email" placeholder="exemple@bidule.com" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            <span class="fas fa-envelope"></span> Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </main>

       <!-- include FOOTER -->
       <?php include_once("footer.inc.php") ?>

        <!-- include JS Files -->
        <?php include_once("js-file.inc.php") ?>

        <!--File JS-->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/fontawesome-all.min.js"></script>
    </body>
</html>