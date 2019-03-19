<center>
	<h2> Liste des événements </h2>
	</br>
	<table border = 1>
		<tr>
			<td> Id Evenement </td>
			<td> Libelle </td>
			<td> Date début </td>
			<td> Date fin </td>
			<td> Heure début </td>
			<td> Heure fin </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idEvent"]. "</td>
				<td>" .$unResultat["libelle"]. "</td>
				<td>" .$unResultat["dateDebut"]. "</td>
				<td>" .$unResultat["dateFin"]. "</td>
				<td>" .$unResultat["heureDebut"]. "</td>
				<td>" .$unResultat["heureFin"]. "</td>
				<td> <a href='index.php?page=3&action=X&idEvent=".$unResultat["idEvent"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='index.php?page=3&action=E&idEvent=".$unResultat["idEvent"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>
	<br/>

	<h2> Ajout d'un événement </h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Libelle : </td> <td><input type= "text" name= "libelle" value = "<?php if (isset($resultat)) echo $resultat['libelle'] ; ?>"></td></tr>
			<tr><td> Date debut : </td> <td><input type= "date" name= "dateDebut" value = "<?php if (isset($resultat)) echo $resultat['dateDebut'] ; ?>"></td></tr>
			<tr><td> Date fin : </td> <td><input type= "date" name= "dateFin" value = "<?php if (isset($resultat)) echo $resultat['dateFin'] ; ?>"></td></tr>
			<tr><td> Heure debut : </td> <td><input type= "time" name= "heureDebut" value = "<?php if (isset($resultat)) echo $resultat['heureDebut'] ; ?>"></td></tr>
			<tr><td> Heure fin : </td> <td><input type= "time" name= "heureFin" value = "<?php if (isset($resultat)) echo $resultat['heureFin'] ; ?>"></td></tr>
			
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idEvent" value = "<?php if (isset($resultat)) echo $resultat['idEvent'] ; ?>">
	</form>
</center>