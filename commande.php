<!--
 * @author Mohamed Yahyani
 * @Code_Permanent: YAHM14059203
 * @Courriel: yahyani.mohamed@courrier.uqam.ca
 * @Cours: INF3190-40
 * @version 2020-11-04
-->
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
    <div class="section-0 section-0-1-marg">
       <div class="section-4">
           <h1>Formulaire de commande</h1>
           <p>Veuillez remplir le formulaire suivant pour enregistrer votre enfant dans le programme Lunche écolier.</p>
           <h2>Informations personnelles</h2>
            <form action="E-commande.php" method="post">
                <div class="inline">
                    <div class="input-group">
                        <label for="Nomeparent">Nom complet du parent</label><br>
                        <input class="input-text" id="Nomeparent" name="Nomeparent" type="text" pattern="[A-Za-z' ']+" required>
                    </div>
                    <div class="input-group">
                        <label for="Nomenfant">Nom complet de l'enfant</label><br>
                        <input class="input-text" id="Nomenfant" name="Nomenfant" type="text" pattern="[A-Za-z' ']+" required>
                    </div>
                </div>

                <div class="inline">
                    <div class="input-group">
                        <label for="Age">L'Âge de l'enfant</label><br>
                        <input class="input-text" id="Age" name="Age" type="number" min="4" max="12" required>
                    </div>
                    <div class="input-group">
                        <label for="école">L'école de l'enfant</label><br>
                        <input class="input-text" id="école" name="ecole" type="text" required>
                    </div>
                </div>

                <h2>Repas selon les jours de la semaine</h2>

                <div class="inline">
                    <div class="input-group">
                            <h3 class="texth3deco">Lundi</h3>
                            <div>
                                <input type="radio" id="lundi1" name="lundi" value="Riz brun aux lentilles et aux oignons caramélisés" checked>
                                <label for="lundi1">Riz brun aux lentilles et<br>aux oignons caramélisés</label><br><img class="imgmargin" src="img/lundi1.jpg" alt="Riz brun aux lentilles et aux oignons caramélisés"> <br>
                            </div>     
                            <div >   
                                <input type="radio" id="lundi2" name="lundi" value="Poulet au sumac et concombres acidulés">
                                <label for="lundi2">Poulet au sumac<br>et concombres acidulés</label><br><img class="imgmargin" src="img/lundi2.jpg" alt="Poulet au sumac et concombres acidulés">
                            </div>
                        </div>

                        <div class="input-group">
                            <h3 class="texth3deco">Mardi</h3>
                            <div>
                                <input type="radio" id="mardi1" name="mardi" value="Compote de pommes à l’autocuiseur" checked>
                                <label for="mardi1">Compote de pommes<br>à l’autocuiseur</label><br><img class="imgmargin" src="img/mardi1.jpg" alt="Compote de pommes à l’autocuiseur"> <br>
                            </div>     
                            <div>   
                                <input type="radio" id="mardi2" name="mardi" value="Tarte au yogourt et au kéfir">
                                <label for="mardi2">Tarte au yogourt<br>et au kéfir</label><br><img class="imgmargin" src="img/mardi2.jpg" alt="Tarte au yogourt et au kéfir">
                            </div>
                        </div>

                        <div class="input-group">
                            <h3 class="texth3deco">Mercredi</h3>
                            <div>
                                <input type="radio" id="mercredi1" name="mercredi" value="Saumon grillé, tomates confites et artichauts" checked>
                                <label for="mercredi1">Saumon grillé, tomates<br>confites et artichauts</label><br><img class="imgmargin" src="img/mercredi1.jpg" alt="Saumon grillé, tomates confites et artichauts"> <br>
                            </div>     
                            <div>   
                                <input type="radio" id="mercredi2" name="mercredi" value="Salade croquante au quinoa, chou, radis et feta">
                                <label for="mercredi2">Salade croquante au <br>quinoa,chou, radis et feta</label><br><img class="imgmargin" src="img/mercredi2.jpg" alt="Salade croquante au quinoa, chou, radis et feta">
                            </div>
                        </div>

                        <div class="input-group">
                            <h3 class="texth3deco">Jeudi</h3>
                            <div>
                                <input type="radio" id="jeudi1" name="jeudi" value="Patates douces rôties à l’huile de caméline" checked>
                                <label for="jeudi1">Patates douces rôties<br>à l’huile de caméline</label><br><img class="imgmargin" src="img/jeudi1.jpg" alt="Patates douces rôties à l’huile de caméline"> <br>
                            </div>     
                            <div>   
                                <input type="radio" id="jeudi2" name="jeudi" value="Couscous au jus de carotte">
                                <label for="jeudi2">Couscous au jus de<br>carotte</label><br><img class="imgmargin" src="img/jeudi2.jpg" alt="Couscous au jus de carotte">
                            </div>
                        </div>

                        <div class="input-group">
                            <h3 class="texth3deco">Vendredi</h3>
                            <div>
                                <input type="radio" id="vendredi1" name="vendredi" value="Poule au pot et légumes d’automne à l’estragon" checked>
                                <label for="vendredi1">Poule au pot et légumes<br>d’automne à l’estragon</label><br><img class="imgmargin" src="img/vendredi1.jpg" alt="Poule au pot et légumes d’automne à l’estragon"> <br>
                            </div>     
                            <div>   
                                <input type="radio" id="vendredi2" name="vendredi" value="Riz brun, crevettes et tofu grillé">
                                <label for="vendredi2">Riz brun, crevettes<br>et tofu grillé</label><br><img class="imgmargin" src="img/vendredi2.jpg" alt="Riz brun, crevettes et tofu grillé">
                            </div>
                        </div>
                    </div>          
               </div>

                <div class="wid-alite">
                    <input type="submit" class="btn btn-primary btn-lg" value="Envoyer">
                </div>
            </form>
       </div>
    </div>

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
                    <li><a href="accueil.html">Accueil</a></li>
                    <li><a href="info.html">Informations</a></li>
                    <li><a href="contact.html">Contactez-nous</a></li>
                </ol>
            </div>
            <div>
                <h3>Contactez-nous</h3>
                <ol type="square" class="menufo">
                    <li>405 Rue Sainte-Catherine Est, Montréal, QC H2L 2C4</li>
                    <li>Lunchecolier@gmail.com</li>
                    <li>+1 (514) 863-2918</li>
                </ol>
            </div>
        </div>
    </div>
</body>

</html>