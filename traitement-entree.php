<?php 
// récupération des données du formulaire de contact
$nom = htmlspecialchars($_POST['nom']);
$description = htmlspecialchars($_POST['description']); 

//Là où on range l'image (dans quel dossier)
$dossierDeDirection = "../../images/Plats/";
//on met l'image au bon endroit
$image = $dossierDeDirection.basename($_FILES["image"]["name"]);

$uploadOk = 1;

//regarde si c'est une image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Le fichier n'est pas une image";
        $uploadOk = 0;
    } 
}

// inscription des données dans un tableau 
$tabEntree = array ( array ($nom,$image,$description));

// génération du csv et écriture 
// utilisation du "a" pour une écriture à la fin du fichier et non pour supprimer à chaque nouvel envoi
$entree = fopen('../../csv/entree.csv', 'a');
// encodage pour la lecture sur excel 
fprintf($contact, chr(0xEF).chr(0xBB).chr(0xBF));
//boucle permettant d'enregistrer les données dans le fichier
foreach ($tabEntree as $fields) {
	fputcsv($entree, $fields);
}
// fermeture du fichier csv
fclose($entree); 
//redirection une fois le traitement effectué 
header('Location:back_plats.php');
?>