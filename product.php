<!DOCTYPE html>
<html>
	<?php
		include('entete2.php');
	?>
	<div class="body-ocacs">
		<div class="Occasions-container">
			<div class="occas-top">
				<div class="occas-top-title">
					Deals and promotion
				</div>
				<div class="occas-top-comment">
					Shoose today the first plan of year on SUN.com. 
				  
				</div>
			</div>
			<div class="sidebar-occas">
				<?php

				require_once 'file:///C:/xampp/htdocs/sun/Admin/modele/connect_bd.php';
				require_once 'file:///C:/xampp/htdocs/sun/Admin/modele/occasion.php';
				require_once 'file:///C:/xampp/htdocs/sun/Admin/controleur/occasion.php';
				while ($donnees = $reponse->fetch())
					{
						echo '	<div class="occas-item">
									<form action="produit2.php" method="POST">
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

	<?php
		include('footer.php');
	?>
</body>
</html>