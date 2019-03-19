<center>
	<h2> Liste des produits </h2>
	</br>
	<table border = 1>
		<tr>
			<td> Id produit </td>
			<td> Nom produit </td>
			<td> Prix (€) </td>
			<td> Quantité restant </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idProduit"]. "</td>
				<td>" .$unResultat["nomProduit"]. "</td>
				<td>" .$unResultat["prix"]. "</td>
				<td>" .$unResultat["qteRestant"]. "</td>
				<td> <a href='index.php?page=4&action=X&idProduit=".$unResultat["idProduit"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='index.php?page=4&action=E&idProduit=".$unResultat["idProduit"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>
	<br/>

	<h2> Ajout d'un produit </h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Nom : </td> <td><input type= "text" name= "nomProduit" value = "<?php if (isset($resultat)) echo $resultat['nomProduit'] ; ?>"></td></tr>
			<tr><td> Prix : </td> <td><input type= "number" name= "prix" value = "<?php if (isset($resultat)) echo $resultat['prix'] ; ?>"></td></tr>
			<tr><td> Quantité restant : </td> <td><input type= "number" name= "qteRestant" value = "<?php if (isset($resultat)) echo $resultat['qteRestant'] ; ?>"></td></tr>
			
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idProduit" value = "<?php if (isset($resultat)) echo $resultat['idProduit'] ; ?>">
	</form>
</center>