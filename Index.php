<?php
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
$ddnMbappe = new DateTime(("20-12-1998"));
$ddnlionelmessi = new DateTime(("24-06-1987"));
$fcBarca = new Equipe("FC Barcelone", 1899, $espagne);
$realMadrid = new Equipe ("Real Madrid",1910, $espagne);
$psg = new Equipe("Paris Saint-Germain", 1970, $france);
$rcStbg = new Equipe("Racing Club Strasbourg", 1906, $france);
$manchesterUnited = new Equipe("Manchester United", 1878, $angleterre);
$juv = new Equipe("Juventus Turin", 1897, $italie);
//Instacnier des JOUEURS
$kylianmbapon = new Joueur("Mbappé", "Kylian", $ddnMbappe, "Française");
$lionelMessi = new Joueur("Messi", "Lionel", $ddnlionelmessi, "Argentine");

//Instancier des SIGNATURES
$signatureMbappepsg = new Signature("2017",$psg, $kylianmbapon);
$signatureMessiBarca = new Signature("2004",$fcBarca,$lionelMessi);
$ignatureMessipsg = new Signature("2021", $psg, $lionelMessi );
//AFFICHAGE Équipe par pays
echo $france->afficherEquipes();
echo $espagne->afficherEquipes();
echo $angleterre->afficherEquipes();
echo $italie->afficherEquipes();
//Affichage des joueurs dans une équipe
echo $psg->afficherJoueurs();
echo $rcStbg->afficherJoueurs();
echo $fcBarca->afficherJoueurs();
echo $juv->afficherJoueurs();
echo $lionelMessi->afficherSignatures();
