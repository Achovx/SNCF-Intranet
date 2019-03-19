<?php
	include("modele/modele.php");

	function selectAllC($table)
	{
		if($table == "employer" || $table == "evenement" || $table== "annonce" || $table == "produit")
		{
			$resultats = selectAllM ($table);
			return $resultats;
		}
		else
		{
			return null;
		}
	}

	//Fonction Candidat
	function insertEmployerC($tab)
	{
		//Vérification des données
		insertEmployerModele($tab);
	}

	function deleteEmployerC($idEmployer)
	{
		//Vérification de l'ID
		deleteEmployerModele($idEmployer);
	}

	function selectWhereIdEmployerC($idEmployer)
	{
		//Vérification de l'ID
		$resultat = selectWhereIdEmployerModele($idEmployer);
		return $resultat;
	}

	function updateEmployerC($tab)
	{
		//Vérification des données
		updateEmployerModele($tab);
	}

	//Fonction Annonce
	function insertAnnonceC($tab)
	{
		//Vérification des données
		insertAnnonceModele($tab);
	}

	function deleteAnnonceC($idAnnonce)
	{
		//Vérification de l'ID
		deleteAnnonceModele($idAnnonce);
	}

	function selectWhereIdAnnonceC($idAnnonce)
	{
		//Vérification de l'ID
		$resultat = selectWhereIdAnnonceModele($idAnnonce);
		return $resultat;
	}

	function updateAnnonceC($tab)
	{
		//Vérification des données
		updateAnnonceModele($tab);
	}

	//Fonction evenement
	function insertEvenementC($tab)
	{
		//Vérification des données
		insertEvenementModele($tab);
	}

	function deleteEvenementC($idEvent)
	{
		//Vérification de l'ID
		deleteEvenementModele($idEvent);
	}

	function selectWhereIdEvenementC($idEvent)
	{
		//Vérification de l'ID
		$resultat = selectWhereIdEvenementModele($idEvent);
		return $resultat;
	}

	function updateEvenementC($tab)
	{
		//Vérification des données
		updateEvenementModele($tab);
	}

	//Fonction produit
	function insertProduitC($tab)
	{
		//Vérification des données
		insertProduitModele($tab);
	}

	function deleteProduitC($idProduit)
	{
		//Vérification de l'ID
		deleteProduitModele($idProduit);
	}

	function selectWhereIdProduitC($idProduit)
	{
		//Vérification de l'ID
		$resultat = selectWhereIdProduitModele($idProduit);
		return $resultat;
	}

	function updateProduitC($tab)
	{
		//Vérification des données
		updateProduitModele($tab);
	}