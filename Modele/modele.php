<?php
    function connexion ()
    {
        $con = mysqli_connect("localhost", "root", "", "SNCF");
        return $con;
    }

    function deconnexion ($con)
    {
        mysqli_close($con);
    }

    function selectAllM ($table)
    {
        $con = connexion();
        $requete = "select * from " .$table. ";";
        $resultats = mysqli_query($con, $requete);
        deconnexion($con);
        return $resultats;
    }

    //Fonction Candidat
    function insertEmployerModele($tab)
    {
        $con = connexion();
        $requete = "insert into employer values (null, '".$tab["nom"]."',' ".$tab["prenom"]."','".$tab["telephone"]."','".$tab["adresse"]."','".$tab["codePostal"]."', '".$tab["email"]."');";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteEmployerModele($idEmployer)
    {
        $con = connexion();
        $requete = "delete from employer where idEmployer = ".$idEmployer.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdEmployerModele($idEmployer)
    {
        $con = connexion();
        $requete = "select *from employer where idEmployer = " .$idEmployer. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function updateEmployerModele($tab)
    {
        $con = connexion();
        $requete = "update employer set nom = '".$tab['nom']."',
        prenom = '".$tab['prenom']."',
        telephone = '".$tab['telephone']."',
        adresse = '".$tab['adresse']."',
        codePostal = '".$tab['codePostal']."',
        email = '".$tab['email']."' 
        where idEmployer = ".$tab['idEmployer'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    //Fonction Annonce
    function insertAnnonceModele($tab)
    {
        $con = connexion();
        $requete = "insert into annonce values (null, '".$tab["libelle"]."',' ".$tab["dateAnnonce"]."','".$tab["heureAnnonce"]."','".$tab["description"]."');";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteAnnonceModele($idAnnonce)
    {
        $con = connexion();
        $requete = "delete from annonce where idAnnonce = ".$idAnnonce.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdAnnonceModele($idAnnonce)
    {
        $con = connexion();
        $requete = "select *from annonce where idAnnonce = " .$idAnnonce. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function updateAnnonceModele($tab)
    {
        $con = connexion();
        $requete = "update annonce set libelle = '".$tab['libelle']."',
        dateAnnonce = '".$tab['dateAnnonce']."',
        heureAnnonce = '".$tab['heureAnnonce']."',
        description = '".$tab['description']."'
        where idAnnonce = ".$tab['idAnnonce'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    //Fonction Evenement
    function insertEvenementModele($tab)
    {
        $con = connexion();
        $requete = "insert into evenement values (null, '".$tab["libelle"]."',' ".$tab["dateDebut"]."','".$tab["dateFin"]."','".$tab["heureDebut"]."','".$tab["heureFin"]."');";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteEvenementModele($idEvent)
    {
        $con = connexion();
        $requete = "delete from evenement where idEvent = ".$idEvent.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdEvenementModele($idEvent)
    {
        $con = connexion();
        $requete = "select *from evenement where idEvent = " .$idEvent. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function updateEvenementModele($tab)
    {
        $con = connexion();
        $requete = "update evenement set libelle = '".$tab['libelle']."',
        dateDebut = '".$tab['dateDebut']."',
        dateFin = '".$tab['dateFin']."',
        heureDebut = '".$tab['heureDebut']."',
        heureFin = '".$tab['heureFin']."'
        where idEvent = ".$tab['idEvent'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    //Fonction Produit
    function insertProduitModele($tab)
    {
        $con = connexion();
        $requete = "insert into produit values (null, '".$tab["nom"]."',' ".$tab["prix"]."','".$tab["qteRestant"]."');";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteProduitModele($idProduit)
    {
        $con = connexion();
        $requete = "delete from produit where idProduit = ".$idProduit.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdProduitModele($idProduit)
    {
        $con = connexion();
        $requete = "select *from produit where idProduit = " .$idProduit. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function updateProduitModele($tab)
    {
        $con = connexion();
        $requete = "update produit set nomProduit = '".$tab['nomProduit']."',
        prix = '".$tab['prix']."',
        qteRestant = '".$tab['qteRestant']."'
        where idProduit = ".$tab['idProduit'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    