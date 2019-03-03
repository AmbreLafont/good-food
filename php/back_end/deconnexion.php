<?php 
session_start ();

// on stop la session et détruit les infos de la connexion
 	session_unset();
	session_destroy();
	
	header('Location:../../Index.php');



 ?>