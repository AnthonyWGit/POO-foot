<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheet/stylesheet.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap');
    </style>
    <title>Document</title>
</head>
    <body>
        <div class="wrapper">
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
            $neymarjunior = new Joueur("Junior", "Neymar", $ddnNeymar, "Brésil");
            $cr7 = new Joueur("Ronaldo","Cristiano", $ddnCr7, "Portugal");
            //Instancier des SIGNATURES
            $signatureMbappepsg = new Signature(2017,$psg, $kylianmbapon);
            $signatureMessiBarca = new Signature(2004,$fcBarca,$lionelMessi);
            $ignatureMessipsg = new Signature(2021, $psg, $lionelMessi );
            $signatureCr7Juv = new Signature(2018,$juv,$cr7);
            $signatureCr7Manchester = new Signature(2021, $manchesterUnited, $cr7);
            $signatureCr7Real = new Signature(2009,$realMadrid,$cr7);
            $signatureNeymarPSG = new Signature(2017, $psg,$neymarjunior);
            $signatureNeymarBarca = new Signature(2013, $fcBarca,$neymarjunior);
            //AFFICHAGE Équipe par pays ?>
            <div class = "Infos"><h2>Voici une liste des équipes de football par pays </h2></div>
            <div class = "cartePaysEnsemble">
            <div class = "cartePays"><?=$france->afficherEquipes(); ?></div>
            <div class = "cartePays"><?=$espagne->afficherEquipes(); ?></div>
            <div class = "cartePays"><?=$angleterre->afficherEquipes();?></div>
            <div class = "cartePays"><?=$italie->afficherEquipes(); ?></div>
            </div>
            <? //Affichage des joueurs dans une équipe ?>
            <div class = "Infos"><h2>Voici une liste des joueurs par équipe </h2></div>
            <div class = "carteEnsembleEquipe">
            <div class = "carteEquipe"><?= $psg->afficherJoueurs(); ?></div>
            <div class = "carteEquipe"><?= $rcStbg->afficherJoueurs(); ?></div>
            <div class = "carteEquipe"><?= $fcBarca->afficherJoueurs(); ?></div>
            <div class = "carteEquipe"><?= $juv->afficherJoueurs();?></div>
            </div>
            <? // Afficher dans quelles équipes un joueur a joué  ?>
            <div class = "Infos"><h2>Voici une liste des équipes des joueurs </h2></div>
            <div class = "carteEnsembleJoueur">
            <div class = "carteJoueur"><?= $kylianmbapon->afficherSignatures(); ?></div>
            <div class = "carteJoueur"><?= $lionelMessi->afficherSignatures(); ?></div>
            <div class = "carteJoueur"><?= $cr7->afficherSignatures(); ?></div>
            <div class = "carteJoueur"><?= $neymarjunior->afficherSignatures(); ?></div>
            </div>
        </div>
    </body>
</html>