<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});
$result ="";
$france = new Pays("France");
$allemagne = new Pays("Allemagne");
$angleterre = new Pays("Angleterre");
$italie = new Pays("Italie");
$FCBarca = new Equipe("FC Barcelone", "1899", "Espagne");
$PSG = new Equipe("Paris Saint-Germain", "1970", "France");
$kylianmbapon = new Joueur("Mbappé", "Kylian", "20/12/1998", "Française");
$lionelMessi = new Joueur("Messi", "Lionel", "24/06/1987", "Argentine");

echo $PSG->afficherJoueur();
