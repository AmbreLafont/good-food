<?php include('header.php');?>
        
<!--    contenant général de la page-->
    <section class="reserv">
<!--    partie coordonnées-->
          
            <?php

            if (($contact = fopen("../../csv/contact.csv", "r")) != FALSE) {
                    //Tant que ça fait -1000 caractères et termes séparés par ,
                $j = 0;    
            
        while (($data = fgetcsv($contact, 2500, ",")) != FALSE) {
            $num = count($data);//compte le nombre de colonnes
            echo "<article class='contact'>";
                
            for ($i = 0; $i < $num; $i++) {
                
                switch ($i) {
                    
                    case 0:
                        echo "Nom : ";
                        break;
                    
                    case 1:
                        echo "Prénom : ";
                        break;
                    
                    case 2:
                        echo "Mail : ";
                        break;
                    
                    case 3:
                        echo "Type d'événement : ";
                        break;
                    
                    case 4:
                        echo "Date : ";
                        break;
                    
                    case 5:
                        echo "Précisions : ";
                        break;
                }
                
                
                    echo $data[$i]."<br>";
                    
                    //echo "<input type=''>";
                
                        }
            echo "";
            echo "</article>";
            $j++;
                    }
                }

            ?>

</section>
        
<?php include('footer.php'); ?>