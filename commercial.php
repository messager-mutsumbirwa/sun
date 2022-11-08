<!DOCTYPE html>
<html>
	<?php
		include('entete.php');
	?>
	<link rel="stylesheet" type="text/css" href="css/container.css">
	<div class="body-mag">
		<div class="mag-topbar">
			<div class="mag-topbar-title">Technologie</div>
			<div class="mag-topbar-comment">Découvrer toutes les production de la maison Apple à un prix abordable</div>
		</div>
		<div class="mag-sidebar">
			<div class="mag-sidebar-title">Produit de stock illimité</div>
			<div class="mag-sidebar-item-defils">
				<div class="container-site">
				<?php
					require_once 'file:///C:/xampp/htdocs/sun/Admin/modele/connect_bd.php';
					require_once 'file:///C:/xampp/htdocs/sun/modele/stockillTechnologie.php';
					require_once 'file:///C:/xampp/htdocs/sun/controleur/stockillTechnologie.php';
					while ($donnees = $reponse->fetch())
					{
						echo '
						<form action="produit2.php" method="POST">
							<input type="hidden" name="id" value="'.htmlspecialchars($donnees['id_fournisseur']).'">
							<input type="image" src="../sun/img/'.htmlspecialchars($donnees['image']).'">
						</form>';
					}
					?>
			</div>

			<div class="mag-items">
				<?php
					require_once 'file:///C:/xampp/htdocs/sun/Admin/modele/connect_bd.php';
					require_once 'file:///C:/xampp/htdocs/sun/modele/commercial.php';
					require_once 'file:///C:/xampp/htdocs/sun/controleur/commercial.php';
					while ($donnees = $reponse->fetch())
					{
						echo '<div class="mag-item">
								<form action="produit2.php" method="POST">
											<input type="hidden" name="id" value="'.htmlspecialchars($donnees['id_fournisseur']).'">
									<div class="mag-item-img">
										<input type="image" src="../sun/img/'.htmlspecialchars($donnees['image']).'">
									</div>
									<div class="mag-item-text">
										<div class="mag-item-comment">
											'.$donnees['commentaireitem'].'
										</div>
										<div class="mag-vendeur"><strong>'.$donnees['ets'].'</strong></div>
										<div class="mag-item-title"><input type="submit" value="'.$donnees['nameitem'].'"></div>
										<div class="mag-item-price">$'.$donnees['prixitem'].' ou '.$donnees['prixfranc'].'fc</div>
									</div>
								</form>
							</div>';


					}
					echo '<div class="getpage">Page : ';

						for ($i = 1 ; $i <= $nombreDePages ; $i++)
						{
						echo '<a href="vetement.php?page=' . $i . '">' . $i . '</a> ';
						}'</div>';
				?>
			</div>
			</div>
		</div>
	</div>

	<?php
		include('footer.php');
	?>
</body>
</html>



<style type="text/css">
	
*, *::before, *::after {
    box-sizing: border-box;
    text-decoration: none;
}
   input[type='image']:hover{
  filter: brightnss(80%);
  transition: 1s;
}
.produit-imgprincipal img, .produit-imgprincipal input[type="image"]{
  width: 100%;
}

.mag-item-img input[type="image"]{
    width: 70%;
    padding-bottom: 10px;
  }

  .mag-sidebar-item-defils input[type='image']{
  flex-wrap: wrap;
  margin-right: 5px;
  height: 160px;
}
.mag-item-img input[type="image"]{
  width: 100%;
  height: auto;
}

.mag-item-text{
  width: 55%;
  display: inline-block;
  height: 0;
  flex-wrap: wrap;
  font-size: 16px;
  font-family: Arial;
  margin-left: 10px;
}

.mag-item-comment, .mag-vendeur, .mag-item-title, .mag-item-price{
  width: 100%;
}

.mag-item-comment{  
  color: rgba(0,0,0,.9);
}

.mag-item-title{
  color: rgba(0,0,0,.8);
}

.mag-item-title input{
  word-wrap: break-word;
  white-space: normal;
  text-align: left;
  font-family: inherit;
  border: 0;
  background: 0;
  padding: 0;
  font-size: inherit;
  color: #817ce7;
  text-decoration: underline;
  cursor: pointer;
}

.mag-item-price{
  color: #000;
}

/*Concernant la page listemagsins.php*/
.topbar-magsin{
  height: 165px;
  background: no-repeat center / cover url('../img/poulet.jpg') ;
  color: white;
  text-align: center;
  padding: 50px 5px;
  font-size: 20px;
}
.body-listemagsins{
  padding: 10px 20px;
}
.item-magsin{
  background: white;
  display: inline-block;
  width: calc(50% - 2px);
  height: auto;
  padding: 10px;
  border-radius: 5px 5px 0px 0px;
  margin-top: 10px;
}
.magsin-name{
  border-bottom: 4px solid rgb(255,167,43);
  text-align: center;
  width: 100%;
  color: #000;
  font-weight: bold;
}
.magsin-commentaire{
  line-height: 20px;
}
.magsin-img{
  width: 100%;
}
.magsin-img img{
  width: 10%;
}
.btexplore-magsin{
  text-align: center;
  color: blue;
}
.item-title, .magexpl-title{
  font-size: 25px;
  padding: 15px 0;
  color: white; 
}

.container-item img{
  width: 100%;
  height: auto;
}

.container-magexpl img{
  width: 100%;
  height: auto;
}


</style>