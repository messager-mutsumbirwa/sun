<?php
// --------------- Étape 2 ---------------

		$nombredesitemsParPage = 10; // Essayez de changer ce nombre pour voir :o)
		// On récupère le nombre total de messages
		$retour = $bdd->query('SELECT COUNT(*) AS nb_nameitem FROM mag WHERE catitem="divers"');

		$donnees = $retour->fetch();

		$totalDesMessages = $donnees['nb_nameitem'];
		// On calcule le nombre de pages à créer
		$nombreDePages = ceil($totalDesMessages / $nombredesitemsParPage);
?>