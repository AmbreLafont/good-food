<?php $page = "back_galerie" ?>
<?php include('header.php') ?>
<!-- filtres -->
        <div class="filtre">
        <form  method="post" action="#">
            <select name="filtre" id="filtre">
                <option value="empty" disabled selected>filtre</option>
                    <optgroup label="Plats">
                        <option value="entree">Entrée</option>
                        <option value="plats">Plats</option>
                        <option value="dessert">Dessert</option>
                    </optgroup> 
                    <optgroup label="activite">
                        <option value="salon">Salon</option>
                        <option value="atelier">Atelier</option>
                        <option value="repas">Repas</option>
                    </optgroup>
                    <optgroup label="actualite">
                        <option value="salon">Salon</option>
                        <option value="atelier">Atelier</option>
                        <option value="repas">Repas</option>
                    </optgroup>
                <option value="actualite">Actualité</option>
            </select>
        </form>
        </div>
<!--    section contenant les images -->
        <section class="gal">
            <?php

                if (($gal = fopen("../../csv/galerie.csv", "r")) != FALSE) {
                    //Tant que ça fait -2500 caractères et termes séparés par $ 

                    while (($data = fgetcsv($gal, 2500, "$")) != FALSE) {
                        $num = count($data);//compte le nombre de colonnes

                        
                            
                            echo "<img src='".$data[0]."'/>";

                        
                    }
                }
                

                ?>
        </section>

        <!---------------------------->
        <!------- AJOUT ENTREE ------->
        <!---------------------------->
        <form method="post" action="traitement-galerie.php" enctype="multipart/form-data">
                    <label>Image à ajouter : 
                       <input type="file" name="imageGal">
                    </label>
                    
                    <button type="submit">Ajouter</button>
                </form>
<!-- footer -->
<?php include('footer.php') ?>