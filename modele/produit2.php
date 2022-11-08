<!DOCTYPE html>
<html>
	<?php
		include('entete2.php');
	?>
	
<link rel="stylesheet" type="text/css" href="../sun/modele/style.css">
	<div class="body-produit">
		<div class="produit-container">
			<div class="produit-infos">
				<?php

					require_once '../controleur/control.php'; 

					  	// reception des donnees 
						$id=$_POST['id'];
						// $pwd_crypte=sha1($pwd);
						
						//tester de conformite de mot de passe et id
						$result=($id);
						$info_prod=seeData($result);
					    $id=$info_prod['id_fournisseur']; 
					    $nameitem=$info_prod['nameitem']; 
					    $catitem=$info_prod['catitem'];
					    $image=$info_prod['image'];
					    $image1=$info_prod['image1'];
					    $image2=$info_prod['image2'];
					    $image3=$info_prod['image3'];
					    $image4=$info_prod['image4'];
					    $commentaireitem=$info_prod['commentaireitem'];
					    $prixitem=$info_prod['prixitem'];
					    $prixfranc=$info_prod['prixfranc'];
					    $day=$info_prod['day'];
				?>
				Catégorie : <a href="<?php echo htmlspecialchars($catitem).'.php';?>"><?php echo htmlspecialchars($catitem);?></a><br>
				<?php echo htmlspecialchars($nameitem); ?>
			</div>
			<form action="identification2.php" method="POST">
				<input type="hidden" name="id" value="<?php echo htmlspecialchars($id);?>">
				<div class="produit-imgprincipal">
					<input type="image" src="../img/<?php echo htmlspecialchars($image); ?>">
				</div>
				<span class="produit-commentaire"><?php echo htmlspecialchars($commentaireitem); ?></span><br>
				<span class="produit-prix">$<?php echo htmlspecialchars($prixitem); ?> ou <?php echo htmlspecialchars($prixfranc);?>fc</span><br>
				<span class="produit-datestock">
					Publié le <?php echo htmlspecialchars($day);?>
				</span><br><br>
				<span class="btcommander">
					<input type="submit" value="Continuer">
				</span>
			</form>
		</div>
		<div class="sidebar-produit">
			<h2>Images du produit</h2>
			<div class="produit-img">
				<img src="../img/<?php echo htmlspecialchars($image1); ?>">
				<img src="../img/<?php echo htmlspecialchars($image2); ?>">
				<img src="../img/<?php echo htmlspecialchars($image3); ?>">
				<img src="../img/<?php echo htmlspecialchars($image4); ?>">
			</div>
		</div>
	</div>
<?php
	include('file:///C:/xampp/htdocs/sun/footer.php');
?>
</body>
</html>

<style type="text/css">


/*Concernant un seul produit*/
.produit-container{
	background: white;
	padding: 10px 20px;
	font-size: 16px;
}

.produit-infos{
	color: #000;
	font-weight: bold;
}

.produit-infos a{
	color: #817ce7;
	font-weight: normal;
}

.produit-imgprincipal{
	margin-top: 5px;
}

.produit-imgprincipal img, .produit-imgprincipal input[type="image"]{
	width: 100%;
}

.produit-commentaire{
	color: rgba(0,0,0,.8);
}

.produit-prix{
	font-size: 16px;
	font-weight: bold;
}

.btcommander{
	text-align: center;
	background: rgb(255,167,43);
	padding: 5px 20px;
	margin-top: 10px;
	clear: both;
	margin: auto;
	color: white;
	cursor: pointer;
}

.btcommander input{
	background: 0;
	border: 0;
	font-size: inherit;color: inherit;
	font-family: inherit;
	cursor: pointer;
}

.sidebar-produit{
	background: white;
	margin-top: 2px;
	padding: 0 20px;
}

.sidebar-produit h2{
	padding-top: 5px;
	margin-top: 0;
}
.produit-img img{
	width: 100%;
}

/*Concernant la page produit.php*/
	.body-produit{
		background: white;
		padding: 10px 2%;
		clear: both;
	}

	.produit-container{
		width: 50%;
		display: inline-block;
		vertical-align: top;
	}

	.sidebar-produit{
		width: 40%;
		display: inline-block;
	}

	.sidebar-produit img{
		width: calc(50% - 2px);
		display: inline-block;
	}
	/*Cocernant la page produit.php*/
	.body-produit{
		padding: 50px 5%;
	}
	.produit-container{
		width: 30%;
	}
	.sidebar-produit{
		width: 68%;
	}
	.sidebar-produit h2{
		text-align: center;
	}
	.sidebar-produit img{
		width: 24%;
	}
		*, *::before, *::after{
	box-sizing: border-box;
	text-decoration: none;
}   
input[type='submit']{
	cursor: pointer;
}
input[type='image']:hover{
	filter: brightnss(80%);
	transition: 1s;
}


a{
	color: inherit;
}


.container{
	max-width: 1080px;
	margin-left: auto;
	margin-right: auto;
} 




.container-item input{
	width: 100%;
}

.container-item, .container-magexpl{
	background: white;
	margin: 5px 0px;
	padding: 5px 10px;
}

.container-magexpl{
	border-bottom: 1px solid rgb(230,230,230);
}

.container-magexpl1{
	width: calc(50% - 2px);
	display: inline-block;
	padding-bottom: 10px;
	font-size: 20px;
}

.container-magexpl1:hover{
	transform: scale(0.9);
}

.item-title, .magexpl-title{
	font-size: 25px;
	padding: 15px 0; 
}

.container-item img{
	width: 100%;
	height: auto;
}

.container-magexpl img{
	width: 100%;
	height: auto;
}

.seemore{
	padding: 10px 0;
	cursor: pointer;
}

.seemore input{
	color: #817ce7;
	background: white;
	border: 0;
	cursor: pointer;
}

.seemore::after{
	content: ' '; 
	float: right;
 	background: no-repeat center center / cover url('../img/arrowmore.png');
 	height: 10px;
 	width: 10px;
 	position: absolute;
 	margin-top: 5px;
}

 
</style>


	<?php
		include('footer.php');
	?>
</body>
</html>

