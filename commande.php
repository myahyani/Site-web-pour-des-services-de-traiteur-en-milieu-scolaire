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
                    <h4>Flotter sur &#9432; pou afficher les ingrédients.</h4>

                    <div class="inline">
                        <div class="input-group">
                            <h3 class="texth3deco">Lundi</h3>
                            <div>
                                <input type="radio" id="lundi1" name="lundi" value="Riz brun aux lentilles et aux oignons caramélisés" checked>
                                <label for="lundi1">Riz brun aux lentilles et<br>aux oignons caramélisés</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="1">
                                            <li>285 g (1 1/2 tasse) de riz basmati brun, rincé et égoutté</li>
                                            <li>90 g (1/2 tasse) de quinoa, rincé et égoutté</li>
                                            <li>750 ml (3 tasses) de bouillon de champignons ou de légumes</li>
                                            <li>60 ml (1/4 tasse) d’huile d’olive</li>
                                            <li>2 gousses d’ail, hachées</li>
                                            <li>2 gousses de cardamome (facultatif)</li>
                                            <li>1 bâton de cannelle de 3 cm (1 1/4 po) de long</li>
                                            <li>2,5 ml (1/2 c. à thé) de curcuma moulu</li>
                                            <li>4 gros oignons, émincés</li>
                                            <li>1 boîte de 398 ml (14 oz) de lentilles brunes, rincées et égouttées</li>
                                            <li>125 ml (1/2 tasse) de yogourt grec nature</li>
                                            <li>5 ml (1 c. à thé) de cumin moulu</li>
                                            <li>10 g (1/4 tasse) de coriandre ciselée</li>
                                            <li>Quartiers de citron, pour le service</li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/lundi1.jpg" alt="Riz brun aux lentilles et aux oignons caramélisés"> <br>
                            </div>
                            <div>
                                <input type="radio" id="lundi2" name="lundi" value="Poulet au sumac et concombres acidulés">
                                <label for="lundi2">Poulet au sumac<br>et concombres acidulés</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="I">
                                            <li>Concombres
                                                <ol type="1">
                                                    <li>6 concombres libanais, coupés en longs quartiers</li>
                                                    <li>45 ml (3 c. à soupe) de vinaigre de cidre</li>
                                                    <li>30 ml (2 c. à soupe) de menthe ciselée</li>
                                                    <li>30 ml (2 c. à soupe) de persil frisé ciselé</li>
                                                    <li>15 ml (1 c. à soupe) d’aneth ciselé</li>
                                                    <li>15 ml (1 c. à soupe) de miel</li>
                                                    <li>1 ml (1/4 c. à thé) de flocons de piment broyé</li>
                                                </ol>
                                            </li>
                                            <li>Poulet
                                                <ol>
                                                    <li>30 ml (2 c. à soupe) d’huile d’olive</li>
                                                    <li>15 ml (1 c. à soupe) de sumac moulu</li>
                                                    <li>5 ml (1 c. à thé) d’harissa</li>
                                                    <li>2 demi-poitrines de poulet désossées et sans la peau, coupées en deux sur l’épaisseur</li>
                                                    <li>180 ml (3/4 tasse) d’houmous du commerce</li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/lundi2.jpg" alt="Poulet au sumac et concombres acidulés">
                            </div>
                        </div>

                        <div class="input-group">
                            <h3 class="texth3deco">Mardi</h3>
                            <div>
                                <input type="radio" id="mardi1" name="mardi" value="Compote de pommes à l’autocuiseur" checked>
                                <label for="mardi1">Compote de pommes<br>à l’autocuiseur</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="1">
                                            <li>2 kg (4,4 lb) de pommes McIntosh,<br>épépinées et coupées en cubes</li>
                                            <li>250 ml (1 tasse) d’eau</li>
                                            <li>105 g (1/2 tasse) de sucre (facultatif)</li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/mardi1.jpg" alt="Compote de pommes à l’autocuiseur"> <br>
                            </div>
                            <div>
                                <input type="radio" id="mardi2" name="mardi" value="Tarte au yogourt et au kéfir">
                                <label for="mardi2">Tarte au yogourt<br>et au kéfir</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="I">
                                            <li>Croûte
                                                <ol type="1">
                                                    <li>140 g (1 tasse) de chapelure de biscuits Graham</li>
                                                    <li>55 g (1/4 tasse) de beurre non salé, fondu</li>
                                                </ol>
                                            </li>
                                            <li>Garniture
                                                <ol>
                                                    <li>10 ml (2 c. à thé) de gélatine</li>
                                                    <li>45 ml (3 c. à soupe) d’eau</li>
                                                    <li>55 g (1/4 tasse) de sucre</li>
                                                    <li>375 ml (1 1/2 tasse) de yogourt grec nature</li>
                                                    <li>250 ml (1 tasse) de kéfir nature</li>
                                                    <li>Fruits au choix : tranches fines de prunes, quartiers de figues, cerises dénoyautées, mûres ou framboises</li>
                                                    <li>Quelques petites feuilles de menthe ou de baume mélisse</li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/mardi2.jpg" alt="Tarte au yogourt et au kéfir">
                            </div>
                        </div>

                        <div class="input-group">
                            <h3 class="texth3deco">Mercredi</h3>
                            <div>
                                <input type="radio" id="mercredi1" name="mercredi" value="Saumon grillé, tomates confites et artichauts" checked>
                                <label for="mercredi1">Saumon grillé, tomates<br>confites et artichauts</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="I">
                                            <li>Légumes
                                                <ol type="1">
                                                    <li>2 échalotes françaises, émincées</li>
                                                    <li>2 gousses d’ail, émincées</li>
                                                    <li>30 ml (2 c. à soupe) d’huile d’olive</li>
                                                    <li>1 boîte de 398 ml (14 oz) de fonds d’artichauts dans l’eau,<br>égouttés et coupés en deux</li>
                                                    <li>280 g (2 tasses) de tomates cerises</li>
                                                    <li>15 ml (1 c. à soupe) de sirop d’érable</li>
                                                    <li>5 ml (1 c. à thé) d’harissa</li>
                                                </ol>
                                            </li>
                                            <li>Saumon
                                                <ol>
                                                    <li>675 g (1 1/2 lb) de filet de saumon avec la peau, coupé en 4 pavés</li>
                                                    <li>30 ml (1 c. à soupe) de ciboulette ciselée</li>
                                                    <li>Quartiers de citron (facultatif)</li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/mercredi1.jpg" alt="Saumon grillé, tomates confites et artichauts"> <br>
                            </div>
                            <div>
                                <input type="radio" id="mercredi2" name="mercredi" value="Salade croquante au quinoa, chou, radis et feta">
                                <label for="mercredi2">Salade croquante au <br>quinoa,chou, radis et feta</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="1">
                                            <li>180 g (1 tasse) de quinoa, rincé et égoutté</li>
                                            <li>200 g (2 tasses) de chou rouge coupé en dés</li>
                                            <li>1 ml (1/4 c. à thé) de sel</li>
                                            <li>1 ml (1/4 c. à thé) de sucre</li>
                                            <li>45 ml (3 c. à soupe) de vinaigre de riz</li>
                                            <li>300 g (2 tasses) de radis, tranchés finement</li>
                                            <li>1 pamplemousse, les suprêmes coupés en petits morceaux</li>
                                            <li>15 g (1/2 tasse) de feuilles de persil plat</li>
                                            <li>30 ml (2 c. à soupe) d’huile d’olive</li>
                                            <li>120 g (1 tasse) de fromage feta émietté</li>
                                            <li>55 g (1/3 tasse) de graines de citrouille</li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/mercredi2.jpg" alt="Salade croquante au quinoa, chou, radis et feta">
                            </div>
                        </div>

                        <div class="input-group">
                            <h3 class="texth3deco">Jeudi</h3>
                            <div>
                                <input type="radio" id="jeudi1" name="jeudi" value="Patates douces rôties à l’huile de caméline" checked>
                                <label for="jeudi1">Patates douces rôties<br>à l’huile de caméline</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="1">
                                            <li>1 kg (2,2 lb) de patates douces, non pelées, lavées et coupées en fins quartiers</li>
                                            <li>45 ml (3 c. à soupe) d’huile de caméline ou d’huile végétale</li>
                                            <li>6 oignons verts, émincés</li>
                                            <li>10 g (1/4 tasse) de coriandre fraîche, ciselée</li>
                                            <li>30 g (3 c. à soupe) de graines de tournesol</li>
                                            <li>50 g (2 tasses) de roquette </li>
                                            <li>Flocons de piment broyés (facultatif)</li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/jeudi1.jpg" alt="Patates douces rôties à l’huile de caméline"> <br>
                            </div>
                            <div>
                                <input type="radio" id="jeudi2" name="jeudi" value="Couscous au jus de carotte">
                                <label for="jeudi2">Couscous au jus de<br>carotte</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="1">
                                            <li>500 ml (2 tasses) de jus de carotte</li>
                                            <li>30 ml (2 c. à soupe) d’huile d’olive</li>
                                            <li>15 ml (1 c. à soupe) de miel</li>
                                            <li>2,5 ml (1/2 c. à thé) de poivre noir concassé</li>
                                            <li>400 g (2 tasses) de couscous</li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/jeudi2.jpg" alt="Couscous au jus de carotte">
                            </div>
                        </div>

                        <div class="input-group">
                            <h3 class="texth3deco">Vendredi</h3>
                            <div>
                                <input type="radio" id="vendredi1" name="vendredi" value="Poule au pot et légumes d’automne à l’estragon" checked>
                                <label for="vendredi1">Poule au pot et légumes<br>d’automne à l’estragon</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="1">
                                            <li>1 navet, pelé et coupé en fins quartiers</li>
                                            <li>2 carottes, pelées et coupées en grosses rondelles</li>
                                            <li>1 poireau, le blanc coupé en grosses<br>rondelles et le vert émincé</li>
                                            <li>2 petits oignons, pelés et coupés en deux</li>
                                            <li>4 gousses d’ail, pelées et coupées en deux</li>
                                            <li>2 litres (8 tasses) de bouillon de poulet</li>
                                            <li>4 demi-poitrines de poulet,<br>désossées et sans la peau</li>
                                            <li>2 branches de céleri, émincées</li>
                                            <li>1 citron, le zeste râpé seulement</li>
                                            <li>5 ml (1 c. à thé) d’estragon frais</li>
                                            <li>Sel et poivre</li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/vendredi1.jpg" alt="Poule au pot et légumes d’automne à l’estragon"> <br>
                            </div>
                            <div>
                                <input type="radio" id="vendredi2" name="vendredi" value="Riz brun, crevettes et tofu grillé">
                                <label for="vendredi2">Riz brun, crevettes<br>et tofu grillé</label>
                                <div class="info-bulle">&#9432;
                                    <div class="info-bulletext">
                                        <ol type="I">
                                            <li>Riz brun
                                                <ol type="1">
                                                    <li>500 ml (2 tasses) de riz brun à grains longs, rincé et égoutté</li>
                                                    <li>750 ml (3 tasses) d’eau</li>
                                                </ol>
                                            </li>
                                            <li>Garniture
                                                <ol>
                                                    <li>225 g (1/2 lb) de tofu ferme épongé, coupé en tranches d’environ 1 cm (1/2 po) d’épaisseur</li>
                                                    <li>340 g (3/4 lb) de crevettes moyennes (31/40) cuites, décortiquées et déveinées (voir note)</li>
                                                    <li>45 ml (3 c. à soupe) de vinaigre de riz</li>
                                                    <li>45 ml (3 c. à soupe) de mirin</li>
                                                    <li>30 ml (2 c. à soupe) d’aneth frais ciselé</li>
                                                    <li>20 ml (4 c. à thé) de sauce de poisson (nuoc-mam)</li>
                                                    <li>15 ml (1 c. à soupe) d’huile d’olive</li>
                                                    <li>10 ml (2 c. à thé) de sambal oelek ou autre sauce aux piments</li>
                                                    <li>2 concombres libanais, coupés en deux sur la longueur et émincés</li>
                                                    <li>1 grosse mangue, coupée en bâtonnets</li>
                                                    <li>Feuilles de menthe fraîche (facultatif)</li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <br>
                                <img class="imgmargin" src="img/vendredi2.jpg" alt="Riz brun, crevettes et tofu grillé">
                            </div>
                        </div>
                    </div>
                    <div class="wid-alite">
                        <input type="submit" class="btn btn-primary btn-lg" value="Envoyer">
                    </div>
                </form>
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
                        <ul class="menufo">
                            <li><a href="accueil.html">Accueil</a></li>
                            <li><a href="info.html">Informations</a></li>
                            <li><a href="contact.html">Contactez-nous</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>Contactez-nous</h3>
                        <ul class="menufo">
                            <li>405 Rue Sainte-Catherine Est, Montréal, QC H2L 2C4</li>
                            <li>Lunchecolier@gmail.com</li>
                            <li>+1 (514) 863-2918</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>