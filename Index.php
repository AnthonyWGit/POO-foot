<?php
//Chargement des classes
spl_autoload_register(function ($class) {
    include $class . '.php';
});
$result ="";
//Instancier les PAYS
$france = new Pays("France");
$allemagne = new Pays("Allemagne");
$angleterre = new Pays("Angleterre");
$italie = new Pays("Italie");
$espagne = new Pays("Espagne");
//Instancier des EQUIPES
$FCBarca = new Equipe("FC Barcelone", "1899", $espagne);
$realMadrid = new Equipe ("Real Madrid","1910", $espagne);
$PSG = new Equipe("Paris Saint-Germain", "1970", $france);
$RCStbg = new Equipe("Racing Club Strasbourg", "1906", $france);
//Instancier des JOUEURS
$kylianmbapon = new Joueur("Mbappé", "Kylian", "20-12-1998", "Française");
$lionelMessi = new Joueur("Messi", "Lionel", "24-06-1987", "Argentine");
//Instancier des SIGNATURES
$signatureMbappePSG = new Signature("2017",$PSG, $kylianmbapon);
$signatureMessiBarca = new Signature("2004",$FCBarca,$lionelMessi);
$ignatureMessiPSG = new Signature("2021", $PSG, $lionelMessi );
//Affichage
echo $france->afficherEquipes();
echo $espagne->afficherEquipes();
echo $PSG->afficherJoueur();
echo $lionelMessi->afficherSignatures();
