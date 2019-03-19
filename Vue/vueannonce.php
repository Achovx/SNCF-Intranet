<center>
	<h2> Liste des annonces </h2>
	</br>
	<table border = 1>
		<tr>
			<td> Id Annonce </td>
			<td> Libelle </td>
			<td> Date Annonce </td>
			<td> Heure Annonce </td>
			<td> Description </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idAnnonce"]. "</td>
				<td>" .$unResultat["libelle"]. "</td>
				<td>" .$unResultat["dateAnnonce"]. "</td>
				<td>" .$unResultat["heureAnnonce"]. "</td>
				<td>" .$unResultat["description"]. "</td>
				<td> <a href='index.php?page=2&action=X&idAnnonce=".$unResultat["idAnnonce"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='index.php?page=2&action=E&idAnnonce=".$unResultat["idAnnonce"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>
	<br/>

	<h2> Ajout d'une annonce </h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Libelle : </td> <td><input type= "text" name= "libelle" value = "<?php if (isset($resultat)) echo $resultat['libelle'] ; ?>"></td></tr>
			<tr><td> Date : </td> <td><input type= "date" name= "dateAnnonce" value = "<?php if (isset($resultat)) echo $resultat['dateAnnonce'] ; ?>"></td></tr>
			<tr><td> Heure : </td> <td><input type= "time" name= "heureAnnonce" value = "<?php if (isset($resultat)) echo $resultat['heureAnnonce'] ; ?>"></td></tr>
			<tr><td> Description : </td> <td><input type= "text" name= "description" value = "<?php if (isset($resultat)) echo $resultat['description'] ; ?>"></td></tr>
			
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idAnnonce" value = "<?php if (isset($resultat)) echo $resultat['idAnnonce'] ; ?>">
	</form>
</center>