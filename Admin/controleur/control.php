<?php
	function formatDate($day,$mois,$year,$hour,$min,$sec){
		$Date=$day."-".$mois."-".$year." ".$hour.":".$min.":".$sec;
		return $Date;
	}

	function verification($login,$pwd,$siege,$verif){
		// connexion a la BD
		$connect= new PDO('mysql:dbname=sun;host=localhost','root','');
		$connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		//preparation de la requete de selection
		$requete = $connect->prepare($verif);
		$requete->bindValue(':login', $login);
		$requete->bindValue(':pwd', $pwd);
		$requete->bindValue(':siege', $siege);
		$requete->execute();

		if ($result = $requete->fetch(PDO::FETCH_ASSOC)) {
				$requete->closeCursor();
				return $result['idfsseur'];
			
		}else{return false;}
	}

	function verifsupp($id_fournisseur,$commande){
		// connexion a la BD
		$connect= new PDO('mysql:dbname=sun;host=localhost','root','');
		$connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		//preparation de la requete de selection
		$requete = $connect->prepare($commande);
		$requete->bindValue(':id_fournisseur', $id_fournisseur);
		$requete->execute();
	}

	function verifsuppfsseur($idfsseur,$commande){
		// connexion a la BD
		$connect= new PDO('mysql:dbname=sun;host=localhost','root','');
		$connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		//preparation de la requete de selection
		$requete = $connect->prepare($commande);
		$requete->bindValue(':idfsseur', $idfsseur);
		$requete->execute();
	}

	function verifsuppachat($id_achat,$commande){
		// connexion a la BD
		$connect= new PDO('mysql:dbname=sun;host=localhost','root','');
		$connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		//preparation de la requete de selection
		$requete = $connect->prepare($commande);
		$requete->bindValue(':id_achat', $id_achat);
		$requete->execute();
	}

	function seeData($id_fournisseur){
		// connexion a la BD
		$connect= new PDO('mysql:dbname=sun;host=localhost','root','');
		$connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$requete = $connect->prepare("SELECT * FROM mag WHERE $id_fournisseur = :id_fournisseur");
		$requete->bindValue(':id_fournisseur', $id_fournisseur);
		$requete->execute();

		if ($result = $requete->fetch(PDO::FETCH_ASSOC)) {
			$requete->closeCursor();
			return $result;
		}else {return false;}
	}

	function seeDatafsseurs($idfsseur){
		// connexion a la BD
		$connect= new PDO('mysql:dbname=sun;host=localhost','root','');
		$connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$requete = $connect->prepare("SELECT * FROM fournisseurs WHERE idfsseur = :idfsseur");
		$requete->bindValue(':idfsseur', $idfsseur);
		$requete->execute();

		if ($result = $requete->fetch(PDO::FETCH_ASSOC)) {
			$requete->closeCursor();
			return $result;
		}else {return false;}
	}
?>




