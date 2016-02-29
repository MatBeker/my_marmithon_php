<!--========================================================
                           TOP RECETTES
      =========================================================-->
<section class="well well__offset-1 bg-1" id="top_recette">
    <div class="container">
        <h2><em>Top </em> des Recettes</h2>
        <div class="row row__offset-1">
            <div class="grid_4">
                <figure>
                    <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="<?php echo "view/images/img-recette/".$datatop[0]["name_img"]?>" alt=""></div>
                    <figcaption><?php echo $datatop[0]["name"]?></figcaption>
                </figure>
                <figcaption>Note</figcaption>
                <span><?php echo $datatop[0]["rating"].'/5'?></span></br>
                </br><a style="font-weight : bold;" href="controler/php/details_controller.php?id=<?php echo $datatop[0]["id"] ?>">Voir plus</a>
            </div>
            <div class="grid_4">
                <figure>
                    <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="<?php echo "view/images/img-recette/".$datatop[1]["name_img"]?>" alt=""></div>
                    <figcaption><?php echo $datatop[1]["name"]?></figcaption>
                </figure>
                <figcaption>Note</figcaption>
                <span><?php echo $datatop[1]["rating"].'/5'?></span></br>
                </br><a style="font-weight : bold;" href="controler/php/details_controller.php?id=<?php echo $datatop[1]["id"] ?>">Voir plus</a>
            </div>
            <div class="grid_4">
                <figure>
                    <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="<?php echo "view/images/img-recette/".$datatop[2]["name_img"]?>" alt=""></div>
                    <figcaption><?php echo $datatop[2]["name"]?></figcaption>
                </figure>
                <figcaption>Note</figcaption>
                <span><?php echo $datatop[2]["rating"].'/5'?></span></br>
                </br><a style="font-weight : bold;" href="controler/php/details_controller.php?id=<?php echo $datatop[2]["id"] ?>">Voir plus</a>
            </div>
        </div>
    </div>
</section>

<!--========================================================
                         !TOP RECETTES
    =========================================================-->