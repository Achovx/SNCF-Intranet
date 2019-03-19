<center>
	<h2> Liste des employés </h2>
	</br>
	<table border = 1>
		<tr>
			<td> Id Employer </td>
			<td> Nom </td>
			<td> Prenom </td>
			<td> Telephone </td>
			<td> Adresse </td>
			<td> Code postal </td>
			<td> Email </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idEmployer"]. "</td>
				<td>" .$unResultat["nom"]. "</td>
				<td>" .$unResultat["prenom"]. "</td>
				<td>" .$unResultat["telephone"]. "</td>
				<td>" .$unResultat["adresse"]. "</td>
				<td>" .$unResultat["codePostal"]. "</td>
				<td>" .$unResultat["email"]. "</td>
				<td> <a href='index.php?page=1&action=X&idEmployer=".$unResultat["idEmployer"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='index.php?page=1&action=E&idEmployer=".$unResultat["idEmployer"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>
	<br/>

	<h2> Ajout d'un employer </h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Nom employer : </td> <td><input type= "text" name= "nom" value = "<?php if (isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
			<tr><td> Prenom employer : </td> <td><input type= "text" name= "prenom" value = "<?php if (isset($resultat)) echo $resultat['prenom'] ; ?>"></td></tr>
			<tr><td> Telephone employer : </td> <td><input type= "number" name= "telephone" value = "<?php if (isset($resultat)) echo $resultat['telephone'] ; ?>"></td></tr>
			<tr><td> Adresse employer : </td> <td><input type= "text" name= "adresse" value = "<?php if (isset($resultat)) echo $resultat['adresse'] ; ?>"></td></tr>
			<tr><td> Code postal : </td> <td><input type= "number" name= "codePostal" value = "<?php if (isset($resultat)) echo $resultat['codePostal'] ; ?>"></td></tr>
			<tr><td> Email : </td> <td><input type= "text" name= "email" value = "<?php if (isset($resultat)) echo $resultat['email'] ; ?>"></td></tr>
			
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idEmployer" value = "<?php if (isset($resultat)) echo $resultat['idEmployer'] ; ?>">
	</form>
</center>