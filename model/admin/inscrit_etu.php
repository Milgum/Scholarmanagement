 <?php
  require_once("../model/connectDB.php");

    if(isset($_POST["inscriptionbtn"])){


    //first page  + table etudiant      
    $parcours_etu=$_POST['parcours_etu'];
    $niveau_etu=$_POST['niveau_etu'];
    $bacc_etu=$_POST['bacc_etu'];

    $nom_etu=$_POST['nom_etu'];
    $prenom_etu=$_POST['prenom_etu'];
    $date_naissance_etu=$_POST['date_naissance_etu'];
    
    $cin_etu=$_POST['cin_etu'];
    $sexe_etu=$_POST['sexe_etu'];
    
    $adresse_etu=$_POST['adresse_etu'];
    $email_etu=$_POST['email_etu'];
    $tel_etu=$_POST['tel_etu'];

    $date_inscription_etu=$_POST['date_inscription_etu'];
    $statut_paiement_etu=$_POST['statut_paiement_etu'];

        
      //second and third page  + table parent
    

    $nom_pere=$_POST['nom_pere'];
    $prenom_pere=$_POST['prenom_pere'];
    $adresse_pere=$_POST['adresse_pere'];
    $email_pere=$_POST['email_pere'];
    $tel_pere=$_POST['tel_pere'];
    $profession_pere=$_POST['profession_pere'];
    
    $nom_mere=$_POST['nom_mere'];
    $prenom_mere=$_POST['prenom_mere'];
    $adresse_mere=$_POST['adresse_mere'];
    $email_mere=$_POST['email_mere'];
    $tel_mere=$_POST['tel_mere'];
    $profession_mere=$_POST['profession_mere'];
        

    //fourth page  + table payement
    $montant_paye=$_POST['montant_paye'];
    $date_paiement=$_POST['date_paiement'];	
    $type_paiement=$_POST['type_paiement'];	
    $reste_a_payer=$_POST['reste_a_payer'];
    $date_limite_paiement=$_POST['date_limite_paiement']; 
    
    $selectetu=$db->prepare('SELECT * FROM `etudiant` WHERE nom_etu=:nom_etu and prenom_etu=:prenom_etu  and date_naissance_etu=:date_naissance_etu and cin_etu=:cin_etu and sexe_etu=:sexe_etu and adresse_etu=:adresse_etu and email_etu=:email_etu and tel_etu=:tel_etu and niveau_etu=:niveau_etu and parcours_etu=:parcours_etu and bacc_etu=:bacc_etu and date_inscription_etu=:date_inscription_etu and statut_paiement_etu=:statut_paiement_etu');
    $selectetu->execute(array(
        ':nom_etu'=>$nom_etu,
        ':prenom_etu'=>$prenom_etu,
        ':adresse_etu'=> $adresse_etu,
        ':email_etu'=>$email_etu,
        ':tel_etu'=>$tel_etu,
        ':date_naissance_etu'=>$date_naissance_etu,
        ':cin_etu'=>$cin_etu,
        ':parcours_etu'=>$parcours_etu,
        ':niveau_etu'=>$niveau_etu,
        ':date_inscription_etu'=>$date_inscription_etu,
        ':statut_paiement_etu'=>$statut_paiement_etu,
        ':bacc_etu'=>$bacc_etu,
        ':sexe_etu'=>$sexe_etu
    ));

    if(!empty($_POST["nom_etu"]) && !empty($_POST["prenom_etu"]) && !empty($_POST["adresse_etu"]) &&
     !empty($_POST["email_etu"]) && !empty($_POST["tel_etu"]) && !empty($_POST["parcours_etu"])&&
     !empty($_POST["niveau_etu"]) && !empty($_POST["date_inscription_etu"]) && !empty($_POST["statut_paiement_etu"] &&
     !empty($_POST["bacc_etu"])) && !empty($_POST['date_limite_paiement']) &&
     !empty($_POST['type_paiement']) && !empty($_POST['montant_paye']) && !empty($_POST['date_paiement']) ){
        if ($selectetu->fetch()) {
            $error= "Cette etudiant existe deja";
            echo $error;
        } else {
        
        $addetu=$db->prepare("INSERT INTO `etudiant`(`nom_etu`, `prenom_etu`, `adresse_etu`, `email_etu`, `tel_etu`, `date_naissance_etu`, `cin_etu`, `parcours_etu`, `niveau_etu`, `date_inscription_etu`, `statut_paiement_etu`, `bacc_etu`, `sexe_etu`)
        VALUES (:nom_etu, :prenom_etu, :adresse_etu, :email_etu, :tel_etu, :date_naissance_etu, :cin_etu, :parcours_etu, :niveau_etu, :date_inscription_etu, :statut_paiement_etu, :bacc_etu, :sexe_etu)");  
        $addetu->execute(array(
        ':nom_etu'=>$nom_etu,
        ':prenom_etu'=>$prenom_etu,
        ':adresse_etu'=> $adresse_etu,
        ':email_etu'=>$email_etu,
        ':tel_etu'=>$tel_etu,
        ':date_naissance_etu'=>$date_naissance_etu,
        ':cin_etu'=>$cin_etu,
        ':parcours_etu'=>$parcours_etu,
        ':niveau_etu'=>$niveau_etu,
        ':date_inscription_etu'=>$date_inscription_etu,
        ':statut_paiement_etu'=>$statut_paiement_etu,
        ':bacc_etu'=>$bacc_etu,
        ':sexe_etu'=>$sexe_etu
        ));
        $id_etu = $db->lastInsertId();
       
        $addparent = $db->prepare("INSERT INTO `parent` (`nom_pere`, `prenom_pere`, `adresse_pere`, `email_pere`, `tel_pere`, `profession_pere`, `nom_mere`, `prenom_mere`, `adresse_mere`, `email_mere`, `tel_mere`, `profession_mere`, `id_etu`) 
        VALUES (:nom_pere, :prenom_pere, :adresse_pere, :email_pere, :tel_pere, :profession_pere, :nom_mere, :prenom_mere, :adresse_mere, :email_mere, :tel_mere, :profession_mere, :id_etu)");  

        $addparent->execute(array(
        ':nom_pere' => $nom_pere,
        ':prenom_pere' => $prenom_pere,
        ':adresse_pere' => $adresse_pere,
        ':email_pere' => $email_pere,
        ':tel_pere' => $tel_pere,
        ':profession_pere' => $profession_pere,
        ':nom_mere' => $nom_mere,
        ':prenom_mere' => $prenom_mere,
        ':adresse_mere' => $adresse_mere,
        ':email_mere' => $email_mere,
        ':tel_mere' => $tel_mere,
        ':profession_mere' => $profession_mere,
        ':id_etu' => $id_etu
        ));
        $id_parent = $db->lastInsertId();

       
        $addpaye = $db->prepare("INSERT INTO `paiement`(`id_etu`, `id_parent`, `montant_paye`, `date_paiement`, `type_paiement`, `reste_a_payer`, `date_limite_paiement`) 
                VALUES (:id_etu, :id_parent, :montant_paye, :date_paiement, :type_paiement, :reste_a_payer, :date_limite_paiement)");

        $addpaye->execute(array(
                ':id_etu' => $id_etu,
                ':id_parent' => $id_parent,
                ':montant_paye' => $montant_paye,
                ':date_paiement' => $date_paiement,
                ':type_paiement' => $type_paiement,
                ':reste_a_payer' => $reste_a_payer,
                ':date_limite_paiement' => $date_limite_paiement
        ));


    }
    }
    else{
        echo "remplisser le formuliare";
    }
    }
    
    ?>