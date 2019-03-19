<?php
	include("controleur/controleur.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Intranet de l'entreprise SNCF </title>
</head>
<body>
	<center>
		<h1> Panneau de l'entreprise SNCF </h1>
	</center>
	</br>
	<a href="index.php?page=1"> Liste des employés </a></br>
	<a href="index.php?page=2"> Liste des annonces </a></br>
	<a href="index.php?page=3">	Liste des événements </a></br>
	<a href="index.php?page=4"> Liste des produits </a></br>
	
	<?php
		if (isset($_GET["page"]))
		{
			$page = $_GET["page"];
		}
		else
		{
			$page = 0;
		}

		switch ($page)
		{
			case 1:
				if (isset($_GET["action"]) && isset($_GET["idEmployer"]))
				{
					$action = $_GET["action"];
					$idEmployer = $_GET["idEmployer"];
					if ($action == "X")
					{
						deleteEmployerC($idEmployer);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdEmployerC($idEmployer);

					}
				}
				if (isset($_POST["Modifier"]))
				{
					updateEmployerC($_POST);
					$resultat = null;
				}
				if (isset($_POST["Enregistrer"]))
				{
					//Appel de la fonction insert du controleur avec envoi du tableau POST
					insertEmployerC($_POST);
				}
				$resultats = selectAllC("employer");
				include ("vue/vueemployer.php");
			break;

			case 2:
				if (isset($_GET["action"]) && isset($_GET["idAnnonce"]))
				{
					$action = $_GET["action"];
					$idAnnonce = $_GET["idAnnonce"];
					if ($action == "X")
					{
						deleteAnnonceC($idAnnonce);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdAnnonceC($idAnnonce);

					}
				}
				if (isset($_POST["Modifier"]))
				{
					updateAnnonceC($_POST);
					$resultat = null;
				}
				if (isset($_POST["Enregistrer"]))
				{
					//Appel de la fonction insert du controleur avec envoi du tableau POST
					insertAnnonceC($_POST);
				}
				$resultats = selectAllC("annonce");
				include ("vue/vueannonce.php");
			break;

			case 3:
				if (isset($_GET["action"]) && isset($_GET["idEvent"]))
				{
					$action = $_GET["action"];
					$idEvent = $_GET["idEvent"];
					if ($action == "X")
					{
						deleteEvenementC($idEvent);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdEvenementC($idEvent);

					}
				}
				if (isset($_POST["Modifier"]))
				{
					updateEvenementC($_POST);
					$resultat = null;
				}
				if (isset($_POST["Enregistrer"]))
				{
					//Appel de la fonction insert du controleur avec envoi du tableau POST
					insertEvenementC($_POST);
				}
				$resultats = selectAllC("evenement");
				include ("vue/vueevenement.php");
			break;

			case 4:
				if (isset($_GET["action"]) && isset($_GET["idProduit"]))
				{
					$action = $_GET["action"];
					$idProduit = $_GET["idProduit"];
					if ($action == "X")
					{
						deleteProduitC($idProduit);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdProduitC($idProduit);

					}
				}
				if (isset($_POST["Modifier"]))
				{
					updateProduitC($_POST);
					$resultat = null;
				}
				if (isset($_POST["Enregistrer"]))
				{
					//Appel de la fonction insert du controleur avec envoi du tableau POST
					insertProduitC($_POST);
				}
				$resultats = selectAllC("produit");
				include ("vue/vueproduit.php");
			break;
		}
	?>
</body>
</html>