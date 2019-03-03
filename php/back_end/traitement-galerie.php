<?php 

//Là où on range l'image (dans quel dossier)
$dossierDeDirection = "../../images/galerie/";
//on met l'image au bon endroit
$image = $_FILES["imageGal"];
$cheminDeDirection = $dossierDeDirection.$image["name"];
move_uploaded_file($image["tmp_name"],$cheminDeDirection);

//regarde si c'est une image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageGal"]["tmp_name"]);
    if($check !== false) {
        if (!file_exists($target_file)) {
            move_uploaded_file($image["tmp_name"],$cheminDeDirection);
        }
    }
}

// inscription des données dans un tableau 
$tab = array( array($cheminDeDirection) );

// génération du csv et écriture 
// utilisation du "a" pour une écriture à la fin du fichier et non pour supprimer à chaque nouvel envoi
$gal = fopen('../../csv/galerie.csv', 'a');
// encodage pour la lecture sur excel 
fprintf($gal, chr(0xEF).chr(0xBB).chr(0xBF));
//boucle permettant d'enregistrer les données dans le fichier
foreach ($tab as $fields) {
	fputcsv($gal, $fields, "$");
}
// fermeture du fichier csv
fclose($gal); 
//redirection une fois le traitement effectué 
header('Location:back_galerie.php');
?>