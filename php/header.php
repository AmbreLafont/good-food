<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Develop'web"/>
        <meta name="description" content="Page d'accueil de l'entreprise goodfood"/>
        
        <?php if ($page == "Accueil") { //  si c'est la page d'accueil?>
        
        <!-- style du carousel -->
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <!-- ajout le  slick-theme.css pour le style par défaut -->
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Emilys+Candy|Rochester" rel="stylesheet"> 
        
<!--        liens au css et à la police titre + sloggan-->
        <link rel="stylesheet" href="css/style.css"/>
<!--        met une icone sur l'onglet-->
        <link rel="icon" href="images/logo/gf.ico" />
        
        <?php } 
        else {  //Pour les autres pages ?>
        
<!-- style du carousel -->
        <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
        <!-- ajout le  slick-theme.css pour le style par défaut -->
        <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
<!--        liens au css et à la police titre + sloggan-->
        <link rel="stylesheet" href="../css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Emilys+Candy|Rochester" rel="stylesheet"> 
<!--        met une icone sur l'onglet-->
        <link rel="icon" href="../images/logo/gf.ico" />
        
        <?php  }?>
        
        
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Emilys+Candy|Rochester" rel="stylesheet"> 

<!--        nom de la page  -->
        <title><?php echo "Goodfood - ".$page  ?></title>
    </head>
    
    <body>
<!-- Header sur toutes les pages -->
        <header>
            <?php if ($page == "Accueil") { //si c'est la page d'accueil ?>
                <!-- div du bandeau au-dessus de la barre de nav-->
                <div id="haut">
                    <!--logo-->
                    <img id="logo" src="images/logo/logo.png"/>
                    <!-- div titre + sloggan-->
                    <div id="titreSoustitre">
                        <!-- titre -->
                        <p id="titre">Goodfood</p>
                        <!-- sloggan -->
                        <p id="soustitre">Good mood</p>
                    </div>
                </div>
    <!-- Nav sur toutes les pages -->
            <nav id="navPrimaire">
                
                    <div class="onglet">
                        <a id="accueil" href="index.php">Accueil</a>
                    </div>

                    <div class="onglet">
                        <a id="plats" href="php/plats.php">Nos plats</a>
                    </div>

                    <div class="onglet">
                        <a id="activite" href="php/activite.php">Nos activités</a>
                    </div>

                    <div class="onglet">
                        <a id="actu" href="php/actu.php">Actualités</a>
                    </div>

                    <div class="onglet">
                        <a id="contact" href="php/contact.php">Contacts / Réservation</a>
                    </div>

                    <div class="onglet">
                        <a id="equipe" href="php/notreEquipeCandidat.php">Notre équipe / recrutement</a>
                    </div>

                    <div class="onglet">
                        <a id="galerie" href="php/galerie.php">Galerie</a>
                    </div>

                <?php }

                else { //sinon ?>
                
                    <!-- div du bandeau au-dessus de la barre de nav-->
                <div id="haut">
                    <!--logo-->
                    <img id="logo" src="../images/logo/logo.png"/>
                    <!-- div titre + sloggan-->
                    <div id="titreSoustitre">
                        <!-- titre -->
                        <p id="titre">Goodfood</p>
                        <!-- sloggan -->
                        <p id="soustitre">Good mood</p>
                    </div>
                </div>
    <!-- Nav sur toutes les pages -->
            <nav id="navPrimaire">
                    <div class="onglet">
                        <a id="accueil" href="../index.php">Accueil</a>
                    </div>

                    <div class="onglet">
                        <a id="plats" href="plats.php">Nos plats</a>
                    </div>

                    <div class="onglet">
                        <a id="activite" href="activite.php">Nos activités</a>
                    </div>

                    <div class="onglet">
                        <a id="actu" href="actu.php">Actualités</a>
                    </div>

                    <div class="onglet">
                        <a id="contact" href="contact.php">Contacts / Réservation</a>
                    </div>

                    <div class="onglet">
                        <a id="equipe" href="notreEquipeCandidat.php">Notre équipe / recrutement</a>
                    </div>

                    <div class="onglet">
                        <a id="galerie" href="galerie.php">Galerie</a>
                    </div>
               <?php } ?>
            </nav>
</header>