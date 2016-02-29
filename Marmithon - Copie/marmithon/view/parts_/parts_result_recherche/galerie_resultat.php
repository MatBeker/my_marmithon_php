<main>
    <section class="well" id="result_search">
        <div class="container">
            <h2><em>Résultat</em>de votre recherche</h2>
            <div class="gallery">

                <?php
                $i = 0;
                $color = 'rgba(255, 118, 0, 0.59)';

                while (isset($data[$i]["id"])) {
                    echo '
                            <br><br>
                                <div>
                                    <img src="images/img-recette/' . $data[$i]["name_img"] . '"class="img_search" alt="">
                                    <p style="text-align: center;"><em>' . $data[$i]["name"] . '</em></p>
                                    <div class="decoration">
                                        <a href="../controler/php/details_controller.php?id='.$data[$i]["id"].'" class="mybtn">Voir plus</a>
                                    </div>
                                    <br/><br/><hr style="color:orange;">
                                </div>
                            <br>';
                    $i++;
                }
                if ($i == 0) {
                    echo "<h3 style='margin-left: inherit'>Erreur votre recherche n'existe pas</h3><br><br><br><br>
                        <br/><br/><a style='background-color:orange;border-radius: 20%; font-weight:bold; margin-left: 43%; color:white;' href='recherche.php'>faire une nouvelle recherche</a><br><br><br>";
                }
                else
                {
                    echo "<br/><br/><a style='background-color:orange;border-radius: 20%; font-weight:bold; margin-left: 43%; color:white;' href='recherche.php'>faire une nouvelle recherche</a><br><br><br>";
                }
                ?>
            </div>
        </div>
    </section>
</main>