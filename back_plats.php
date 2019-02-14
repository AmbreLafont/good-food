<?php include('header.php');?>
        
<!-- barre de nav secondaire -->
        <nav class="navSecondaire">
        
            <a class="b" href="#entree">Entrée</a>
            <a class="b" href="#plat">Plats</a>
            <a class="b" href="#dessert">Dessert</a>
        
        </nav>
        
<!-- Contenu, tout dans une div -->
        
        <div>
            <article>
            
                <p class="texte">Aviez-vous imaginé un jour de rencontrer un grand Chef pour créer, avec lui, des SPAGHETTI ALLA SCAPARA dans l’ambiance d’une grande cuisine, dans l’intimité de la brigade ?</p>
                <p class="texte">
Vous réservez un carton d’invitation valable 1 an et/ou choisissez votre Chef et votre menu, selon affinités, sur notre calendrier évolutif. Notre Chef vous reçoit le matin autour d’un café (9h15-15h00) afin de réaliser ensemble le programme annoncé (jusqu’à 12 personnes). Vous serez accompagné, durant cette journée, d’un Maître d’hôtel et d’un commis de cuisine. Le principe des Cours de cuisine thématiques « techniques et produits » est de créer une rencontre très privilégiée et exclusive avec le Chef, en orientant la journée sur la création d’un menu de dégustation, autour d'un thème annoncé. 
                </p>
                
            </article>
        
        <!-------------------------------------->
        <!--------------- ENTREE --------------->
        <!--------------------------------------> 
            <article>
                <h1 id="entree">Entrée</h1>
                
                <?php

                if (($entree = fopen("../../csv/plats/entree.csv", "r")) != FALSE) {
                    //Tant que ça fait -2500 caractères et termes séparés par ,   

                    while (($data = fgetcsv($entree, 2500, ",")) != FALSE) {
                        $num = count($data);//compte le nombre de colonnes

                        for ($i = 0; $i < $num; $i++) {
                            
                            switch ($i) {
                                //titre
                                case 0:
                                    echo  "<h2>".$data[$i]."</h2>";
                                    break;
                                //image
                                case 1:
                                    echo "<img src='../../images/plats/".$data[$i]."'/>";
                                    break;
                                //description
                                case 2:
                                    echo "<p class='texte'>".$data[$i]."</p>";
                                    break;

                                    }
                        echo "";
                    }
                }
                }

                ?>
            
                <!---------------------------->
                <!------- AJOUT ENTREE ------->
                <!---------------------------->
                <form method="post" action="traitement-entree.php" enctype="multipart/form-data">
                    <label>Nom du plat : 
                       <input type="text" name="nom"> 
                    </label>
                    <label>Image : 
                       <input type="file" name="image">
                    </label>
                    <label>Description : 
                       <input type="textarea" name="description">
                    </label>
                    
                    <button type="submit">Ajouter</button>
                </form>
            </article>
            
        <!-------------------------------------->
        <!--------------- DESSERT -------------->
        <!-------------------------------------->
            <article>
                <h1 id="dessert">Desserts</h1>

                <h2>Nomduplat</h2>

                <img src="../images/Plats/spaghetti-alla-scapara.jpg"/>

                <p>Description du dessert</p>
        <!-- Bouton -->
                <a href="contact.html"><button>Réserver</button></a>
            </article>
            
            <article>
                <p class="texte">Et avec une technique qui fait le succès des grands Chefs : les sauces, les fonds, les jus et les bouillons, les apéritifs dinatoires, les verrines et le siphon, les cocottes, le snaking, les terrines, le barbecue, les dressages … Une occasion rêvée de développer ou approfondir des savoirs et savoirs-faire avec le Chef lui-même et de réaliser ensemble toute une déclinaison de plats et de mets raffinés. Une formule exclusive à destination des amateurs ou des professionnels (4 à 5 plats selon le niveau de technicité) et sans invité au repas, pour cuisiner et déguster ensemble en petit comité et vivre ainsi l’ambiance des grandes cuisines, dans le dynamisme et l’intimité de la brigade !</p>
            </article>
            
        
        </div>
        
<?php include ('footer.php') ?>