<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});
$result ="";
$kylianmbapon = new Joueur("Mbappé", "Kylian", "20/12/1998", "Française");
$lionelMessi = new Joueur("Messi", "Lionel", "24/06/1987", "Argentine");
$PSG = new Equipe("Paris Saint-Germain", "1970", "France");
