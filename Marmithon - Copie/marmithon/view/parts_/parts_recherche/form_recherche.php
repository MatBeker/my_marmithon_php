<!--========================================================
                      CONTENT
=========================================================-->
<main>
    <section class="well" id="bienvenu">
        <div class="container">
            <h2><em>Faites</em>votre recherche</h2>
            <form method="post" action="result_recherche_avancee.php">
                <div class="lign_form">
                    Le nom de la recette:
                    <input class="champ_form" type="text" name="search_name" placeholder="Ex : salade de riz" value=""/>
                </div>
                <div class="lign_form">
                    <h3 style="color: orange; margin: 30px 0px;">Chercher par type de recette :</h3>
                    <label for="type_recette">Le type de plat:</label>
                    <select class="champ_form" name="type_recette" id="type_recette">
                        <option value="dessert">Dessert</option>
                        <option value="entree">Plat d'entrée</option>
                        <option value="plat">Plat principal</option>
                        <option value="boisson">Boisson</option>
                    </select>
                </div>
                <div class="lign_form">
                    <h3 style="color: orange; margin: 30px 0px;">Chercher par ingrédients :</h3>
                    <p>
                        Cochez les ingrédients que vous voulez utiliser (eau/sel/sucre sont compris dans la recette ;D
                        ):<br/>
                        <br><h4 style="text-decoration : underline;">Légumes :</h4><br>
                    <input type="checkbox" name="pattate" id="pattate"/>
                    <label for="pattate">Pomme de terre</label><br/>
                    <input type="checkbox" name="tomate" id="tomate"/>
                    <label for="tomate">Tomates</label><br/>
                    <input type="checkbox" name="epinards" id="epinards"/>
                    <label for="epinards">Epinards</label><br/>
                    <input type="checkbox" name="carote" id="carote"/>
                    <label for="carote">Carotes</label><br/>
                    <br><h4 style="text-decoration : underline;">Fruits :</h4><br>
                    <input type="checkbox" name="fraise" id="fraise"/>
                    <label for="carote">Fraise</label><br/>
                    <input type="checkbox" name="framboise" id="framboise"/>
                    <label for="carote">Framboise</label><br/>
                    <br><h4 style="text-decoration : underline;">céréales :</h4><br>
                    <input type="checkbox" name="farine" id="farine"/>
                    <label for="carote">Farine</label><br/>
                    <input type="checkbox" name="pate" id="pate"/>
                    <label for="carote">Pate feuilletée (préparé)</label><br/>
                    <br><h4 style="text-decoration : underline;">Viandes :</h4><br>
                    <input type="checkbox" name="boeuf" id="boeuf"/>
                    <label for="carote">Boeuf</label><br/>
                    <input type="checkbox" name="poulet" id="poulet"/>
                    <label for="carote">Poulet</label><br/>
                    <input type="checkbox" name="poisson" id="poisson"/>
                    <label for="carote">Poisson</label><br/>
                    </p>
                </div>
                <button class="btn_search btn_search_form" href="#" type="submit">Chercher</button>
                <button class="btn_search btn_search_form" href="#" type="reset">Reset</button>
            </form>
        </div>
        <br><br><br><br><br>
    </section>
