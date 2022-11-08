<!DOCTYPE html>
<html>
	<?php
		include('entete2.php');
	?>
	
	<div class="body-ocacs">
		<div class="Occasions-container">
			<div class="occas-top">
				<div class="occas-top-title">
					Location et logement
				</div>
				<div class="occas-top-comment">
					Touver des belles maisons, en temps utiles et en tout lieu sur tout le site. Votre avenitr, c'est maintenant. 
				</div>
			</div>
			<div class="sidebar-occas">
				
				<?php
				require_once 'file:///C:/xampp/htdocs/sun/Admin/modele/connect_bd.php';
				require_once 'file:///C:/xampp/htdocs/sun/Admin/modele/location.php';
				require_once 'file:///C:/xampp/htdocs/sun/Admin/controleur/location.php';
				while ($donnees = $reponse->fetch())
					{
						echo '	<div class="occas-item">
									<form action="../sun/modele/produit2.php" method="POST">
										<input type="hidden" name="id" value="'.htmlspecialchars($donnees['id_fournisseur']).'">
												<div class="occas-item-comment">
													'.htmlspecialchars($donnees['commentaireitem']).'
												</div>
												<input type="image" src="../sun/img/'.htmlspecialchars($donnees['image']).'" class="occas-item-img">
												<div class="occas-item-price">
													$'.htmlspecialchars($donnees['prixitem']).' ou '.htmlspecialchars($donnees['prixfranc']).'fc
												</div>
									</form>
								</div>';
					}
				?>
				
			</div>

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
	/*Concernant la page occasion.php*/
	.main-return{
		height: 50px;
		padding-left: 20px;
		float: left;
		width: 100%;
	}
	.occas-top{
		width: 150px;
		float: left;
		border-bottom: 0;
		padding: 10px 5px;
		clear: both;
	}
	.occas-top-title{
		font-size: 20px;
		font-weight: bold;
		color: rgba(0,0,0);
		padding-bottom: 10px;
	}
	.sidebar-occas{
		width: calc(100% - 170px);
		border-left: 1px solid rgb(230,230,230);
		display: inline-block;
		padding-top: 20px;
		padding-bottom: 20px; 
	}
	.occas-item{
		width: 26%;
		margin: 20px 3%;
	}







.occas-item-img{
	width: 100%;
	height: auto;
}
.occas-item-price{
	font-weight: bold;
	font-size: 16px;
	margin-top: 10px;
}
input[type='submit']{
	cursor: pointer;
}
input[type='image']:hover{
	filter: brightness(80%);
	transition: 1s;
}
.container-item input{
	width: 100%;
}
.container-item img{
	width: 100%;
	height: auto;
}
.Occasions-container{
	padding: 10px 0px;
	background: white;
}
.occas-top{
	color: #000;	
	margin: 0 10px;
	padding-bottom: 10px;
	border-bottom: 1px solid rgba(220,220,220);
	background: white;
}
.occas-top-title{
	font-size: 25px;
}
.occas-item{
	margin-top: 10px;
	width: calc(50% - 30px);
	display: inline-block;
	margin-left: 20px;
}
.occas-item-comment{
	padding-bottom: 10px;
	color: #000;
}
.container-site{
  background-image: url("../sun/images/Logo.jpg");
  background-repeat: repeat;
  background-attachment: fixed;
  background-position: center;


</style>