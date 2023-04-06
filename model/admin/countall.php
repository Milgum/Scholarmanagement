<?php 
require_once("../model/connectDB.php");

$countstudent=$db->prepare("SELECT count(id_etu) FROM `etudiant`"); 
$countstudent->execute();
$nb_etudiants = $countstudent->fetchColumn();



$countparent=$db->prepare("SELECT count(id_parent) FROM `parent`"); 
$countparent->execute();
$nb_parent = $countparent->fetchColumn();


$countprof=$db->prepare("SELECT count(id_enseignant) FROM `enseignant`"); 
$countprof->execute();
$nb_prof = $countprof->fetchColumn();


$countsolde=$db->prepare("SELECT SUM(montant_paye) FROM `paiement`"); 
$countsolde->execute();
$solde = $countsolde->fetchColumn();

?>