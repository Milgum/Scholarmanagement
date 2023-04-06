<?php
require_once("../model/connectDB.php");
$takestudent=$db->prepare('SELECT * FROM etudiant INNER JOIN frais_de_scolarite ON etudiants.id_etudiant=frais_de_scolarite.id_etudiant');
$executestudent = $takestudent->execute();
$student = $takestudent->fetchAll();
?>