<?php
//Import des classes dans l'ordre de priorité
include 'Seance.php';
include 'BilletPleinTarif.php';
include 'BilletReduit.php';
include 'BilletEnfant.php';

/*
2) Créer une Séance pour le film "Dunesday" le 16 Décembre 2026 à 20h30
*/
$seanceA=new Seance("16/12/2026","20:30","Dunesday");

/*
3) Créer 3 billets pour la séance :
   
billet pour adulte avec le numéro 12, prix : 23.5 euros
billet enfant : numero 11, prix : 5 euros, age : 9 ans
billet étudiant : numero 42, prix réel : 23.5 euros, justificatif "carte étudiante"
*/
$billetA=new BilletPleinTarif(12,23.5,$seanceA);
$billetB=new BilletEnfant(11,5,$seanceA,9);
$billetC=new BilletReduit(42,23.5,$seanceA,"carte etudiante");


/*
4) Pour chaque billet, afficher son prix en utilisant calculerPrix(), et imprimer les Détails du billet avec imprimerDetail()
*/
echo($billetA->calculerPrix());
echo("<br><br>");
echo($billetB->calculerPrix());
//echo($billetB->calculerPrixEnfant(9));
echo("<br><br>");
echo($billetC->calculerPrix());
//echo($billetC->calculerPrixReduit("carte étudiante"));
echo("<br><br>");
$billetA->imprimerDetails();
echo("<br><br>");
$billetB->imprimerDetails();
echo("<br><br>");
$billetC->imprimerDetails();

?>