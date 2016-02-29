<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <form name="main_infos" method="POST" enctype="multipart/form-data" id="recipe_form"
              onsubmit="return check_form(this)">

            <div class="form-group text-center">
                <h2>Informations Globales</h2>

                <p>
                    <label>Nom de la Recette:</label>
                    <input type="text" class="form-control" name="recipe_name" onselect="dropcheck(this)"
                           onblur="namecheck(this)" value="Chocolat"/>
                <p hidden="hidden" id="name_error" class="error">La nom de la recette est déjà pris</p>
                </p>

                <p id="img">
                    <label>Ajouter une image du plât: </label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                    <input type="file" class="form-control" name="meal_pic" onchange="check_file(this)"/>
                <p hidden="hidden" id="format_error" class="error">Format du Fichier incorrect</p>
                <p hidden="hidden" id="size_error" class="error">Taille du Fichier incorrect</p>
                </p>

                <p>
                    <select name="type" class="form-control" onblur="selectcheck(this)">
                        <option disabled selected hidden>Type de plat</option>
                        <option value="Entrée">Entrée</option>
                        <option value="Plat Principal">Plat Principal</option>
                        <option value="Dessert" selected="selected">Dessert</option>
                        <option value="Boisson">Boisson</option>
                    </select>
                </p>

                <p>
                    <select name="difficulty" class="form-control" onblur="selectcheck(this)">
                        <option disabled selected hidden>Difficulté</option>
                        <option value="Très Facile">Très Facile</option>
                        <option value="Facile" selected="selected">Facile</option>
                        <option value="Intermédiaire">Intermédiaire</option>
                        <option value="Délicat">Délicat</option>
                        <option value="Difficile">Difficile</option>
                    </select>
                </p>

                <p>
                    <select name="cost" class="form-control" onblur="selectcheck(this)">
                        <option disabled selected hidden>Coût</option>
                        <option value="Bon Marché" selected="selected">Bon Marché</option>
                        <option value="Moyen">Moyen</option>
                        <option value="Assez Cher">Assez Cher</option>
                    </select>
                </p>

                <p>
                    <label>Temps de préparation:</label>
                    <input name="prepa_h" class="form-control" placeholder="0" type="number" min="0" maxlength="2"
                           id="ph" onblur="prep_set_min()" value="1"/>
                <p>Heures</p>
                <input name="prepa_m" class="form-control" placeholder="0" type="number" min="0" max="60" maxlength="2"
                       id="pm" onblur="prepmin_check()" value="30"/>
                <p>Minutes</p>
                </p>

                <div>
                    <label>Temps de cuisson:</label>
                    <input name="Cuisson_h" class="form-control" placeholder="0" type="number" min="0" maxlength="2"
                           id="ch" onblur="cuis_set_min()" value="1"/>
                    <label for="cuisson_h"> Heures </label>
                    <input name="Cuisson_m" class="form-control" placeholder="0" type="number" min="0" max="60" id="cm"
                           onblur="cuismin_check()" value="30"/>
                    Minutes
                </div>

                <p>
                    <select name="type_cuisson" class="form-control" onblur="selectcheck(this)">
                        <option disabled selected>Type de cuisson</option>
                        <option value="Four" selected="selected">Four</option>
                        <option value="Plaques">Plaques</option>
                        <option value="Sans cuisson">Sans cuisson</option>
                        <option value="Autre">Autre</option>
                    </select>
                </p>

                <hr>

                <h2>Ingrédients</h2>

                <div id="reagents">

                    <p>
                        <input name="quantity" class="test" placeholder="Quantité" type="text" onblur="isempty(this)"/>
                        <label>de</label>
                        <input name="reagent" placeholder="Ingrédient" type="text" onblur="blank_check(this)"/>
                        <button type="button" class="btn btn-danger" name="rm_reagent" onclick="delete_reagent(this)">
                            Supprimer
                        </button>
                    </p>

                </div>

                <p>
                    <button type="button" class="btn btn-success" onclick="add_reagent()">Ajouter un ingrédient</button>
                </p>

                <hr>

                <h2>Etapes</h2>

                <div id="steps">

                    <p name="step" class="center">
                        <label for="step">Etape 1: </label><textarea name="step[]" class="getstep"
                                                                     placeholder="Décrivez votre étape" type="text"
                                                                     rows="3" cols="50"
                                                                     onblur="isempty(this)"></textarea>
                        <button type="button" class="btn btn-danger" name="rm_step" onclick="delete_reagent(this)">
                            Supprimer
                        </button>
                    </p>

                </div>

                <p>
                    <button type="button" class="btn btn-success" onclick="add_step()">Ajouter une étape</button>
                </p>

                <hr>

                <h2>Informations sur l'auteur</h2>

                <p>
                    <input name="user" class="form-control" placeholder="Pseudo" type="text" onblur="check_user(this)"
                           value="Dupont"/>
                </p>

                <p>
                    <input name="user_mail" class="form-control" placeholder="Email" type="email"
                           onblur="check_mail(this)" value="p.dupont@free.fr"/>
                </p>

                <hr>

                <p>
                    <button type="button" value="Valider" onclick="check_form(this)" class="btn btn-primary btn-lg">
                        Envoyer
                    </button>
                </p>
            </div>

        </form>

        <button type="button" onclick="function_test()">Testez moi !</button>
    </div>
    <div class="col-md-2"></div>

    <script type="text/javascript" src="js/formscript.js"></script>
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>