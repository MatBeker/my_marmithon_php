<body>
<main>
    <section class="well" id="bienvenu">
        <div class="container">
            <h2><em>Créez</em>votre recette</h2>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form name="main_infos" method="POST" enctype="multipart/form-data" id="recipe_form"
                          onsubmit="return check_form(this)" action="parts_creer/test.php">

                        <div class="form-group text-center">
                            <hr>
                            <br>
                            <h2>Informations Globales</h2><br>

                            <div class="lign_form">
                                <p>
                                    <label>Nom de la Recette:</label>
                                    <input type="text" class="champ_form form-control" name="recipe_name"
                                           onselect="dropcheck(this)"
                                           onblur="namecheck(this)" value="Chocolat"/>
                                <p hidden="hidden" id="name_error" class="error">La nom de la recette est déjà pris</p>
                                </p>
                            </div>

                            <p id="img" style="margin-left:20%;">
                                <label>Ajouter une image du plât: </label>
                                <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                                <input type="file" class="form-control" name="meal_pic" onchange="check_file(this)"/>
                            <p hidden="hidden" id="format_error" class="error">Format du Fichier incorrect</p>
                            <p hidden="hidden" id="size_error" class="error">Taille du Fichier incorrect</p>
                            </p>

                            <div class="lign_form">
                                <p>
                                <h3 style="color: orange; margin: 30px 0px;">type de recette :</h3>
                                <label for="type_recette">Le type de recette:</label>
                                <select name="type" class="champ_form form-control" onblur="selectcheck(this)">
                                    <option disabled selected hidden>Type de plat</option>
                                    <option value="Entrée">Entrée</option>
                                    <option value="Plat Principal">Plat Principal</option>
                                    <option value="Dessert" selected="selected">Dessert</option>
                                    <option value="Boisson">Boisson</option>
                                </select>
                                </p>
                            </div>

                            <div class="lign_form">
                                <p>
                                <h3 style="color: orange; margin: 30px 0px;">Niveau de difficulté :</h3>
                                <label for="type_recette">La Difficulté de la recette:</label>
                                <select name="difficulty" class="champ_form form-control" onblur="selectcheck(this)">
                                    <option disabled selected hidden>Difficulté</option>
                                    <option value="Très Facile">Très Facile</option>
                                    <option value="Facile" selected="selected">Facile</option>
                                    <option value="Intermédiaire">Intermédiaire</option>
                                    <option value="Délicat">Délicat</option>
                                    <option value="Difficile">Difficile</option>
                                </select>
                                </p>
                            </div>

                            <div class="lign_form">
                                <p>
                                <h3 style="color: orange; margin: 30px 0px;">Prix de la recette :</h3>
                                <label for="type_recette">Le Côut de la recette:</label>
                                <select name="cost" class="form-control champ_form" onblur="selectcheck(this)">
                                    <option disabled selected hidden>Coût</option>
                                    <option value="Bon Marché" selected="selected">Bon Marché</option>
                                    <option value="Moyen">Moyen</option>
                                    <option value="Assez Cher">Assez Cher</option>
                                </select>
                                </p>
                            </div>

                            <div class="lign_form">
                                <p>
                                <h3 style="color: orange; margin: 30px 0px;">Temps de préparation :</h3>
                                <label for="type_recette">Combien vous mettez de temps à préparer votre recette
                                    ?:</label>
                                <label>Temps de préparation:</label>
                                <input name="pinpu_h" class="form-control champ_form" placeholder="0" type="number" min="0"
                                       maxlength="2"
                                       id="ph" onblur="prep_set_min()" value="1"/>
                                <span>Heures</span>
                                <input name="prepa_m" class="form-control" placeholder="0" type="number" min="0"
                                       max="60"
                                       maxlength="2"
                                       id="pm" onblur="prepmin_check()" value="30"/>
                                <span>Minutes</span>
                                </p>
                            </div>

                            <div class="lign_form">
                                <h3 style="color: orange; margin: 30px 0px;">Temps de cuisson :</h3>
                                <label for="type_recette">Combien vous mettez de temps pour cuire votre plat?:</label>
                                <label>Temps de cuisson:</label>
                                <input name="Cuisson_h" class="form-control champ_form" placeholder="0" type="number" min="0"
                                       maxlength="2"
                                       id="ch" onblur="cuis_set_min()" value="1"/>
                                <label for="cuisson_h"> Heures </label>
                                <input name="Cuisson_m" class="form-control" placeholder="0" type="number" min="0"
                                       max="60"
                                       id="cm"
                                       onblur="cuismin_check()" value="30"/>
                                Minutes
                            </div>

                            <div class="lign_form">
                                <p>
                                <h3 style="color: orange; margin: 30px 0px;">Type de cuisson :</h3>
                                <label for="type_recette">Quel type de cuisson ?:</label>
                                <select name="type_cuisson" class="form-control champ_form" onblur="selectcheck(this)">
                                    <option disabled selected>Type de cuisson</option>
                                    <option value="Four" selected="selected">Four</option>
                                    <option value="Plaques">Plaques</option>
                                    <option value="Sans cuisson">Sans cuisson</option>
                                    <option value="Autre">Autre</option>
                                </select>
                                </p>
                            </div>

                            <hr>

                            <h2>Ingrédients</h2>

                            <div id="reagents">

                                <div class="lign_form">
                                    <p>
                                    <h3 style="color: orange; margin: 30px 0px;">Les ingrédients necessaires :</h3>
                                    <label for="type_recette">combien ?:</label>
                                    <input name="quantity" class="test" placeholder="Quantité" type="text"
                                           onblur="isempty(this)"/>
                                    <label>de</label>
                                    <input name="reagent" placeholder="Ingrédient" type="text"
                                           onblur="blank_check(this)"/>
                                    <button type="button" class="btn btn-danger" name="rm_reagent"
                                            onclick="delete_reagent(this)">
                                        Supprimer
                                    </button>
                                    </p>
                                </div>
                            </div>
                            <div class="lign_form">
                                <p>
                                    <label for="type_recette">Ajouter un ingrédient ?:</label>
                                    <button type="button" class="btn_search btn_search_form btn btn-success" onclick="add_reagent()">Ajouter un
                                        ingrédient
                                    </button>
                                </p>
                            </div>

                            <hr>

                            <h2>Etapes de réalisation de la recette :</h2>

                            <div id="steps">
                                <div class="lign_form">
                                    <label for="type_recette">Décrivez votre recette :</label>
                                    <p name="step" class="center">
                                        <label for="step">Etape 1: </label><textarea name="step[]" class="getstep"
                                                                                     placeholder="Décrivez votre étape"
                                                                                     type="text"
                                                                                     rows="3" cols="50"
                                                                                     onblur="isempty(this)"></textarea>
                                        <button type="button" class="btn btn-danger" name="rm_step"
                                                onclick="delete_reagent(this)">
                                            Supprimer
                                        </button>
                                    </p>
                                </div>
                            </div>

                            <div class="lign_form">
                                <p>
                                    <label for="type_recette">Ajouter une étape ?:</label>
                                    <button type="button" class="btn btn-success btn_search btn_search_form" onclick="add_step()">Ajouter une étape
                                    </button>
                                </p>
                            </div>

                            <hr>

                            <h2>Informations sur l'auteur</h2><br><br>

                            <div class="lign_form">
                                <p>
                                    <label for="type_recette">Le nom de l'auteur :</label>
                                    <input name="user" class="form-control champ_form" placeholder="Pseudo" type="text"
                                           onblur="check_user(this)"
                                           value="Dupont"/>
                                </p>
                            </div>
                            <div class="lign_form">
                                <p>
                                <label for="type_recette">Le mail de l'auteur :</label>
                                <input name="user_mail" class="form-control champ_form" placeholder="Email" type="email"
                                       onblur="check_mail(this)" value="p.dupont@free.fr"/>
                                </p>
                            </div>
                            <br><hr>

                            <p>
                                <button type="submit" value="Valider" onclick="check_form(this)"
                                        class="btn_search btn_search_form btn btn-primary btn-lg">
                                    Envoyer
                                </button>
                            </p>
                        </div>

                    </form>

                    <span><button type="button" class="btn_search btn_search_form" onclick="function_test()">Testez moi !</button></span>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>