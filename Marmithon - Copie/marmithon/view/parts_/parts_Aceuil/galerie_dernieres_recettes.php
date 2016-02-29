<!--========================================================
                                GALERIE DERNIERES RECETTES
               ========================================================-->
<section class="well" id="last_recette">
    <h2><em>Dernières</em>recettes</h2>
    <div class="gallery">
        <div class="gallery_col-1">
            <a data-fancybox-group="gallery" href="controler/php/details_controller.php?id=<?php echo $data[0]["id"] ?>"
               class="gallery_item thumb lazy-img" style="padding-bottom: 93.96551724137931%;">
                <img data-src="<?php echo "view/images/img-recette/" . $data[0]["name_img"] ?>" alt="">
                <div class="gallery_overlay">
                    <div class="gallery_caption">
                        <p><em><?php echo $data[0]["name"] ?></em></p>
                    </div>
                </div>
            </a>
            <a data-fancybox-group="gallery" href="controler/php/details_controller.php?id=<?php echo $data[1]["id"] ?>"
               class="gallery_item thumb lazy-img" style="padding-bottom: 74.13793103448276%;">
                <img data-src="<?php echo "view/images/img-recette/" . $data[1]["name_img"] ?>" alt="">
                <div class="gallery_overlay">
                    <div class="gallery_caption">
                        <p><em><?php echo $data[1]["name"] ?></em></p>
                    </div>
                </div>
            </a>
            <a data-fancybox-group="gallery" href="controler/php/details_controller.php?id=<?php echo $data[2]["id"] ?>"
               class="gallery_item thumb lazy-img" style="padding-bottom: 94.6551724137931%;">
                <img data-src="<?php echo "view/images/img-recette/" . $data[2]["name_img"] ?>" alt="">
                <div class="gallery_overlay">
                    <div class="gallery_caption">
                        <p><em><?php echo $data[2]["name"] ?></em></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="gallery_col-2">
            <a data-fancybox-group="gallery" href="controler/php/details_controller.php?id=<?php echo $data[3]["id"] ?>"
               class="gallery_item thumb lazy-img" style="padding-bottom: 52.48322147651007%;">
                <img data-src="<?php echo "view/images/img-recette/" . $data[3]["name_img"] ?>" alt="">
                <div class="gallery_overlay">
                    <div class="gallery_caption">
                        <p><em><?php echo $data[3]["name"] ?></em></p>
                    </div>
                </div>
            </a>
            <a data-fancybox-group="gallery" href="controler/php/details_controller.php?id=<?php echo $data[4]["id"] ?>"
               class="gallery_item thumb lazy-img" style="padding-bottom: 55.97315436241611%;">
                <img data-src="<?php echo "view/images/img-recette/" . $data[4]["name_img"] ?>" alt="">
                <div class="gallery_overlay">
                    <div class="gallery_caption">
                        <p><em><?php echo $data[4]["name"] ?></em></p>
                    </div>
                </div>
            </a>
            <a data-fancybox-group="gallery"
               href="controler/php/details_controller.php?id=<?php echo $data[5]["id"] ?>"
               class="gallery_item thumb lazy-img" style="padding-bottom: 96.10738255033557%;">
                <img data-src="<?php echo "view/images/img-recette/" . $data[5]["name_img"] ?>" alt="">
                <div class="gallery_overlay">
                    <div class="gallery_caption">
                        <p><em><?php echo $data[5]["name"] ?></em></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="gallery_col-3">
            <a data-fancybox-group="gallery"
               href="controler/php/details_controller.php?id=<?php echo $data[6]["id"] ?>"
               class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                <img data-src="<?php echo "view/images/img-recette/" . $data[6]["name_img"] ?>" alt="">
                <div class="gallery_overlay">
                    <div class="gallery_caption">
                        <p><em><?php echo $data[6]["name"] ?></em></p>
                    </div>
                </div>
            </a>
            <a data-fancybox-group="gallery"
               href="controler/php/details_controller.php?id=<?php echo $data[7]["id"] ?>"
               class="gallery_item thumb lazy-img" style="padding-bottom: 72.23168654173765%;">
                <img data-src="<?php echo "view/images/img-recette/" . $data[7]["name_img"] ?>" alt="">
                <div class="gallery_overlay">
                    <div class="gallery_caption">
                        <p><em><?php echo $data[7]["name"] ?></em></p>
                    </div>
                </div>
            </a>
            <a data-fancybox-group="gallery"
               href="controler/php/details_controller.php?id=<?php echo $data[8]["id"] ?>"
               class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                <img data-src="<?php echo "view/images/img-recette/" . $data[8]["name_img"] ?>" alt="">
                <div class="gallery_overlay">
                    <div class="gallery_caption">
                        <p><em><?php echo $data[8]["name"] ?></em></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--========================================================
                         !GALERIE DERNIERES RECETTES
    =========================================================-->
</section>