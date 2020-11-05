<!--
 * @author Mohamed Yahyani
 * @Code_Permanent: YAHM14059203
 * @Courriel: yahyani.mohamed@courrier.uqam.ca
 * @Cours: INF3190-40
 * @version 2020-11-04
-->
<?php

if ($_POST["lundi"] == "Riz brun aux lentilles et aux oignons caramélisés"){
    $lundi = "Riz brun aux lentilles et aux oignons caramélisés";
}else if ($_POST["lundi"] == "Poulet au sumac et concombres acidulés"){
    $lundi = "Poulet au sumac et concombres acidulés";
}
if ($_POST["mardi"] == "Compote de pommes à l’autocuiseur"){
    $mardi = "Compote de pommes à l’autocuiseur";
}else if ($_POST["mardi"] == "Tarte au yogourt et au kéfir"){
    $mardi = "Tarte au yogourt et au kéfir";
}   
if ($_POST["mercredi"] == "Saumon grillé, tomates confites et artichauts"){
    $mercredi = "Saumon grillé, tomates confites et artichauts";
}else if ($_POST["mercredi"] == "Salade croquante au quinoa, chou, radis et feta"){
    $mercredi = "Salade croquante au quinoa, chou, radis et feta";
}        
if ($_POST["jeudi"] == "Patates douces rôties à l’huile de caméline"){
    $jeudi = "Patates douces rôties à l’huile de caméline";
}else if ($_POST["jeudi"] == "Couscous au jus de carotte"){
    $jeudi = "Couscous au jus de carotte";
}            
if ($_POST["vendredi"] == "Poule au pot et légumes d’automne à l’estragon"){
    $vendredi = "Poule au pot et légumes d’automne à l’estragon";
}else if ($_POST["vendredi"] == "Riz brun, crevettes et tofu grillé"){
    $vendredi = "Riz brun, crevettes et tofu grillé";
}

$text= "\nParent:".$_POST["Nomeparent"].", Enfant:".$_POST["Nomenfant"].", Age:".$_POST["Age"].", Ecole:".$_POST["ecole"].", Lundi:".$_POST["lundi"].", Mardi:".$_POST["mardi"].", Mercredi:".$_POST["mercredi"].", Jeudi:".$_POST["jeudi"].", Vendredi:".$_POST["vendredi"];
file_put_contents('commandes.txt', $text, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="icon" href="img/icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lunch écolier</title>
</head>

<body>
    <div class="info">
        Appelez-nous au : +1 (514) 863-2918 📞| De 7h à 17h | 5j / 7j
    </div>
    <div class="nav">
        <ul id="header">
            <li><a href="commande.php">Commandez</a></li>
            <li><a href="contact.html">Contactez-nous</a></li>
            <li><a href="info.html">Informations</a></li>
            <li><a href="accueil.html">Acceuil</a></li>
            <li class="logo"><a href="accueil.html">Lunch<span class="text-primary"> écolier</span></a></li>
        </ul>
    </div>
    <div class="section-0">
       <div class="section-4">
           <h1><i class="ri-check-double-line"></i> La commande a été enregistrée avec succès</h1>
       </div>
    </div>
    <div class="hei65"></div>
    
    
    <!--  FOOTER START -->

    <div class="footer">
        <div class="inner-footer">
            <div>
                <h2>Lunch<span class="text-primary"> écolier</span></h2>
                <p>Plats pour vos enfants <br>à l'école.</p>
            </div>
            <div>
                <h3>Liens rapides</h3>
                <ol type="square" class="menufo">
                    <li><a href="accueil.html">
                    Accueil</a></li>

                    <li><a href="info.html">
                    Informations</a></li>

                    <li><a href="contact.html">
                    Contactez-nous</a></li>

                </ol>
            </div>
            <div>
                <h3>Contactez-nous</h3>
                <ol type="square" class="menufo">
                    <li>Montreal Gouin Boulevard, Canada</li>
                    <li>Lunchecolier@gmail.com</li>
                    <li>+1 (514) 863-2918</li>
                </ol>
            </div>
        </div>
    </div>
</body>

</html>
</body>
</html>
        