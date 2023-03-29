<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});
$result ="";
$france = new Pays("France");
$allemagne = new Pays("Allemagne");
$angleterre = new Pays("Angleterre");
$italie = new Pays("Italie");
$espagne = new Pays("Espagne");
$FCBarca = new Equipe("FC Barcelone", "1899", $espagne);
$realMadrid = new Equipe ("Real Madrid","1910", $espagne);
$PSG = new Equipe("Paris Saint-Germain", "1970", $france);
$RCStbg = new Equipe("Racing Club Strasbourg", "1906", $france);
$kylianmbapon = new Joueur("Mbappé", "Kylian", "20/12/1998", "Française");
$lionelMessi = new Joueur("Messi", "Lionel", "24/06/1987", "Argentine");
$signatureMbappePSG = new Signature("2017",$PSG, $kylianmbapon);
$signatureMessiBarca = new Signature("2004",$FCBarca,$lionelMessi);
$ignatureMessiPSG = new Signature("2021", $PSG, $lionelMessi );

echo $france->afficherEquipes();
echo $espagne->afficherEquipes();
//$PSG->ajouterJoueur($kylianmbapon);
echo $PSG->afficherJoueur();

