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
//Instancier des Dates de naissances
$ddnMbappe = new DateTime(("20-12-1998"));
$ddnlionelmessi = new DateTime(("24-06-1987"));
$ddnNeymar = new DateTime(("05-02-1992"));
$ddnCr7 = new DateTime(("05-02-1985"));
//Instancier des EQUIPES 
$fcBarca = new Equipe("FC Barcelone", 1899, $espagne);
$realMadrid = new Equipe ("Real Madrid",1910, $espagne);
$psg = new Equipe("Paris Saint-Germain", 1970, $france);
$rcStbg = new Equipe("Racing Club Strasbourg", 1906, $france);
$manchesterUnited = new Equipe("Manchester United", 1878, $angleterre);
$juv = new Equipe("Juventus Turin", 1897, $italie);
//Instacnier des JOUEURS
$kylianmbapon = new Joueur("Mbappé", "Kylian", $ddnMbappe, "France");
$lionelMessi = new Joueur("Messi", "Lionel", $ddnlionelmessi, "Argentine");
$neymarjunior = new Joueur("Neymar", "Junior", $ddnNeymar, "Brésil");
$cr7 = new Joueur("Cristiano","Ronaldo", $ddnCr7, "Portugal");
//Instancier des SIGNATURES
$signatureMbappepsg = new Signature(2017,$psg, $kylianmbapon);
$signatureMessiBarca = new Signature(2004,$fcBarca,$lionelMessi);
$ignatureMessipsg = new Signature(2021, $psg, $lionelMessi );
$signatureCr7Juv = new Signature(2018,$juv,$cr7);
$signatureCr7Manchester = new Signature(2021, $manchesterUnited, $cr7);
$signatureCr7Real = new Signature(2009,$realMadrid,$cr7);
$signatureNeymarPSG = new Signature(2017, $psg,$neymarjunior);
$signatureNeymarBarca = new Signature(2013, $fcBarca,$neymarjunior);
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
//Afficher dans quelles équipes un joueur a joué 
echo $kylianmbapon->afficherSignatures();
echo $lionelMessi->afficherSignatures();
echo $cr7->afficherSignatures();
echo $neymarjunior->afficherSignatures();
